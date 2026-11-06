# Support

## Getting help with this site

- **Found a bug or a broken link?** Open a GitHub issue on this repository
  using the bug report template. Include the page URL and what you saw.
- **Have a suggestion?** Open a feature request issue. Note that this is a
  personal portfolio site, so design and content decisions stay with the
  owner.
- **Want to get in touch with Muhammad Aqib?** Use the contact page at
  https://mrpythonist.com/contact, or the GitHub and LinkedIn links there.

## Running the site locally

See the README: `php -S localhost:8000 router.php`, then open
http://localhost:8000/. If a page is blank or PHP shows as text, PHP is not
enabled for that directory; check the PHP installation, not the site code.

## Common problems

- **Clean URLs return 404 locally:** make sure you started the server with
  `router.php` as the router script. Without it, only direct file URLs work.
- **CSS or JS not updating:** bump `ASSET_VERSION` in `includes/config.php`,
  or hard-refresh the browser.
- **Contact form error:** the host could not deliver mail. Use the mailto
  link on the contact page instead.
- **Blog page broken after adding a post:** run `php -l data/blog.php` and
  `php -l content/blog/{slug}.php`, fix any syntax error, and re-check the
  post URL and the blog index.

## Response times

This is a personal site maintained by one person. Issues are reviewed as time
allows; there is no support SLA.
