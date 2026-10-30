<?php
declare(strict_types=1);

// Breadcrumb helpers. $trail is a list of [label, url|null]; the last item
// is the current page (url null). Rendered once visibly and once as JSON-LD.

function render_breadcrumbs(array $trail): void
{
    if (count($trail) < 2) {
        return;
    }
    ?>
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <?php foreach ($trail as $i => $crumb):
              [$label, $url] = $crumb;
              $is_last = $i === count($trail) - 1; ?>
          <li<?= $is_last ? ' aria-current="page"' : '' ?>>
            <?php if ($url !== null && !$is_last): ?><a href="<?= e($url) ?>"><?= e($label) ?></a>
            <?php else: ?><span><?= e($label) ?></span><?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </nav>
    <?php
}

/** Build a BreadcrumbList JSON-LD node from the same trail. */
function breadcrumbs_jsonld(array $trail): array
{
    $items = [];
    $pos = 1;
    foreach ($trail as [$label, $url]) {
        $item = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => $label,
        ];
        if ($url !== null) {
            $item['item'] = site_url($url);
        }
        $items[] = $item;
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}
