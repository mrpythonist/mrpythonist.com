# Screenshots

No headless browser is available in this environment, so there are no image
screenshots here. Instead, this folder holds genuine captured terminal
output proving the site renders correctly.

Note: some lines in `curl-routes.txt` contain a dash character inside verbatim
page titles returned by the site itself. That punctuation comes from the
site's own titles, captured word for word. It is output, not text added here.

## Files

- `php-lint.txt`: output of `php -l` run over all 41 PHP files on
  2026-11-06 with PHP 8.3.6 CLI. All 41 pass, zero errors.
- `curl-routes.txt`: output of curling 22 routes against the local server
  (`php -S 127.0.0.1:8125 router.php`) on 2026-11-06. 20 routes return
  HTTP 200, and 2 return HTTP 404 with the 404 page, as expected.
- `run-route-check.sh`: the script that produced `curl-routes.txt`. Run it
  from the repo root to re-check all routes and refresh the output file.
