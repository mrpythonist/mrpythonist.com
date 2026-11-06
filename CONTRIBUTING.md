# Contributing to mrpythonist.com

This is a personal portfolio site, not a general-purpose library. The owner makes content decisions (copy, projects, posts, design). Outside contributions are welcome for fixes, not for redesigns or new features.

## What is welcome

- Bug fixes: broken links, wrong URLs, PHP warnings or errors, layout breaks.
- Typo and grammar corrections in pages and blog posts.
- Accessibility improvements: headings, labels, focus states, contrast, keyboard use.
- Small, clearly explained improvements to the docs in this repo.

## What is not welcome without discussion first

- Design changes, new pages, new sections, or new features.
- Changes to personal content: bio, experience, projects, resume, or blog opinions.
- Adding frameworks, build tools, dependencies, analytics, or tracking.
- Changes to `includes/config.php` contact details or the canonical domain.

If you are unsure, open an issue first and describe the change before writing code.

## How to contribute

1. Fork the repo and create a branch from `main`.
2. Make one focused change per pull request. Keep the diff small.
3. Follow the existing code style: plain PHP with `declare(strict_types=1)`, 4-space indentation, no framework idioms.
4. Do not add em dashes to any file. The site style avoids them.
5. Do not invent facts. Project details, dates, and experience claims must match the real record.
6. Test locally before submitting (see below).
7. Fill in the pull request template, including what you tested and the result.

## Testing your change

There is no test suite. Verify manually:

```bash
# Syntax check every PHP file
find . -name "*.php" -exec php -l {} \;

# Serve locally and load the pages you changed
php -S localhost:8000 router.php
```

Check the changed page in a browser, plus the home page and one blog post, to confirm nothing else broke. If you changed the contact form, do not submit the live form to test it; test locally and say so in the pull request.

## Reporting a bug

Use the bug report template. Include the page URL, what you expected, what happened, and your browser and PHP version if relevant. A screenshot helps for layout issues.

## Code of conduct

Be respectful and constructive. See [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md).
