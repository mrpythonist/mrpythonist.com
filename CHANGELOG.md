# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).
This project does not use version numbers; entries are dated instead, because
the site is deployed continuously to shared hosting.

## [Unreleased]

### Added

- Rewrote `README.md` from scratch to describe the actual site: pages, blog
  system, local setup, cPanel deployment, contact form limits, and verification.
- Added `CONTRIBUTING.md`, `CODE_OF_CONDUCT.md`, `SECURITY.md`, `SUPPORT.md`,
  and this changelog.
- Added issue templates (bug report, feature request) and a pull request
  template under `.github/`.
- Added `.gitignore` for environment files, logs, editor files, and build
  artifacts.
- Added `docs/architecture.md` and `docs/development.md`, plus local
  verification output in `docs/screenshots/`.

### Fixed

- README no longer claims a root `.htaccess` exists in the repo. There is
  none; the live host holds the rewrite rules. See the deployment section of
  the README.
- README no longer implies the contact form is proven to deliver mail. It
  documents the form as it is: present in `contact.php`, host-dependent
  `mail()` delivery, with a mailto fallback.

## Past releases

No tagged releases exist. The site was built and deployed in October 2026;
the git history before this changelog entry is the only record of earlier
changes. Nothing has been backfilled here, because the details of those
changes are not recorded anywhere verifiable.
