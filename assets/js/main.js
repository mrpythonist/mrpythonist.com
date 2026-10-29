
document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.nav-toggle');
  var list = document.querySelector('.nav-list');

  if (!list) return;

  var links = Array.from(list.querySelectorAll('a'));

  // Mobile navigation
  if (button) {
    button.addEventListener('click', function () {
      var open = list.classList.toggle('open');

      button.setAttribute('aria-expanded', String(open));
      button.setAttribute(
        'aria-label',
        open ? 'Close navigation menu' : 'Open navigation menu'
      );
    });

    list.addEventListener('click', function (event) {
      var link = event.target.closest('a');

      if (!link) return;

      list.classList.remove('open');
      button.setAttribute('aria-expanded', 'false');
      button.setAttribute('aria-label', 'Open navigation menu');
    });
  }

  // Set exactly one active navigation link.
  function setActiveLink(activeLink) {
    links.forEach(function (link) {
      if (link === activeLink) {
        link.setAttribute('aria-current', 'location');
      } else {
        link.removeAttribute('aria-current');
      }
    });
  }

  // Resolve navigation links to sections on this page.
  var sectionLinks = links
    .map(function (link) {
      try {
        var url = new URL(link.href, window.location.origin);

        if (
          url.origin !== window.location.origin ||
          !url.hash ||
          url.pathname !== window.location.pathname
        ) {
          return null;
        }

        var section = document.getElementById(
          decodeURIComponent(url.hash.slice(1))
        );

        return section ? { link: link, section: section } : null;
      } catch (error) {
        return null;
      }
    })
    .filter(Boolean);

  // Clicking a section link activates it immediately.
  sectionLinks.forEach(function (item) {
    item.link.addEventListener('click', function () {
      setActiveLink(item.link);
    });
  });

  // Determine the section currently nearest the top reading area.
  function updateActiveSection() {
    var marker = window.innerHeight * 0.35;
    var current = null;

    sectionLinks.forEach(function (item) {
      var rect = item.section.getBoundingClientRect();

      if (rect.top <= marker && rect.bottom > marker) {
        current = item;
      }
    });

    if (!current) {
      // Before the first section, activate Home if available.
      var homeLink = links.find(function (link) {
        var url;

        try {
          url = new URL(link.href, window.location.origin);
        } catch (error) {
          return false;
        }

        return (
          url.origin === window.location.origin &&
          url.pathname === window.location.pathname &&
          !url.hash
        );
      });

      if (homeLink && window.scrollY < 100) {
        setActiveLink(homeLink);
      }

      return;
    }

    setActiveLink(current.link);
  }

  if (sectionLinks.length) {
    // Keep the active state synchronized with scrolling.
    window.addEventListener('scroll', updateActiveSection, {
      passive: true
    });

    window.addEventListener('resize', updateActiveSection);

    window.addEventListener('hashchange', function () {
      var hash = window.location.hash;

      var target = sectionLinks.find(function (item) {
        return '#' + item.section.id === hash;
      });

      if (target) {
        setActiveLink(target.link);
      } else {
        updateActiveSection();
      }
    });

    // Initial state, including direct URLs such as /#about.
    var initial = sectionLinks.find(function (item) {
      return '#' + item.section.id === window.location.hash;
    });

    if (initial) {
      setActiveLink(initial.link);
    } else {
      updateActiveSection();
    }
  }
});
