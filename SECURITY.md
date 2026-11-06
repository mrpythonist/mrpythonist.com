# Security Policy

## Supported versions

This is a personal portfolio site. Only the code on the `main` branch, as
deployed at https://mrpythonist.com, is supported. Older commits and forks
are not supported.

| Version | Supported |
| --- | --- |
| `main` (current live site) | Yes |
| Older commits | No |

## Reporting a vulnerability

If you find a security issue, please report it through a GitHub issue on this
repository, or through the contact options on https://mrpythonist.com/contact.

Include:

- A description of the issue and where it is (file and, if useful, line number).
- Steps to reproduce it, if you have them.
- What you think the impact is.

Do not include private personal data in a public issue. If the report involves
personal data, use the contact page instead of a public issue.

## What to expect

- The report will be reviewed, and the issue will be fixed on `main` and
  deployed to the live site.
- There is no bug bounty and no fixed response-time promise. This is a
  personal site maintained by one person, so please allow reasonable time.

## Scope notes

- The site has no database, no user accounts, and no stored credentials.
  There is nothing to exfiltrate from a user table because there is not one.
- The contact form (`contact.php`) uses PHP `mail()` and has CSRF protection,
  a honeypot field, session rate limiting, and header-injection stripping on
  the reply-to address. Reports about mail delivery reliability are useful,
  but mail delivery itself depends on the host.
- Direct access to `includes/`, `data/`, and `content/` is denied by the
  `.htaccess` files in those directories. If you find a way to read those
  files over HTTP on the live site, that is worth reporting.
- The `php.ini` file in this repo is a cPanel-generated file. It contains a
  host log path, not a secret.
- Please do not run automated scanners against the live site at a rate that
  could degrade it for visitors, and do not test the live contact form with
  spam submissions. Test locally where possible.
