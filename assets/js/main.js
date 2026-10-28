// Mobile navigation only. No frameworks, no tracking, no scroll handlers.
document.addEventListener('DOMContentLoaded', function () {
  var button = document.querySelector('.nav-toggle');
  var list = document.querySelector('.nav-list');
  if (!button || !list) return;
  button.addEventListener('click', function () {
    var open = list.classList.toggle('open');
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  list.addEventListener('click', function (event) {
    if (event.target.tagName === 'A') {
      list.classList.remove('open');
      button.setAttribute('aria-expanded', 'false');
    }
  });
});
