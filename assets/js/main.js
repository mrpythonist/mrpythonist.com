/* mrpythonist.com — main.js
   Mobile navigation toggle + resume page scrollspy.
   (A previous version contained a fatal redeclaration of `links` that broke
   the entire script, plus a scrollspy targeting in-page hash links that the
   navigation does not use. Both are fixed/removed here.) */
document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.nav-toggle');
  var list = document.querySelector('.nav-list');

  // Mobile navigation toggle.
  if (button && list) {
    button.addEventListener('click', function () {
      var open = list.classList.toggle('open');
      button.setAttribute('aria-expanded', String(open));
      button.setAttribute('aria-label', open ? 'Close navigation menu' : 'Open navigation menu');
    });

    // Close the menu when a navigation link is chosen.
    list.addEventListener('click', function (event) {
      var link = event.target.closest('a');
      if (!link) return;
      list.classList.remove('open');
      button.setAttribute('aria-expanded', 'false');
      button.setAttribute('aria-label', 'Open navigation menu');
    });
  }

  // Resume page: highlight the section nav item for the section in view.
  var resumePage = document.querySelector('.resume-page');
  if (!resumePage) return;

  var sections = resumePage.querySelectorAll('.resume-block[id]');
  var navLinks = resumePage.querySelectorAll('.resume-nav a');
  if (!sections.length || !navLinks.length) return;

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var currentId = entry.target.id;
        navLinks.forEach(function (link) {
          link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
        });
      });
    },
    { rootMargin: '-20% 0px -65% 0px', threshold: 0 }
  );

  sections.forEach(function (section) {
    observer.observe(section);
  });
});