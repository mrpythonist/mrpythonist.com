#!/bin/bash
# Route check for mrpythonist.com working copy. Run from the repo root.
# Starts php -S on 127.0.0.1:8125, curls every route, stops the server.
cd /home/hatch/workspace/github-open-source-readiness/work/mrpythonist.com || exit 1
php -S 127.0.0.1:8125 router.php >/tmp/php-server-8125.log 2>&1 &
SRV=$!
sleep 2
{
echo "Local route check - 2026-11-06 - PHP built-in server (php -S 127.0.0.1:8125 router.php)"
echo ""
for p in / /projects /about /experience /tech-stack /services /resume /certifications /open-source /cloud /engineering-principles /uses /now /blog /contact /blog/deploying-php-on-litespeed-shared-hosting /projects/food-delivery-system /tech-stack/php /robots.txt /sitemap.xml /nonexistent-page /blog/no-such-post; do
  curl -s -o /tmp/body8125.txt -w "%{http_code} %{size_download}" "http://127.0.0.1:8125$p" > /tmp/code8125.txt
  code=$(cat /tmp/code8125.txt)
  title=$(grep -o "<title>[^<]*" /tmp/body8125.txt | head -1 | sed 's/<title>//')
  echo "$p -> $code bytes | $title"
done
} | tee docs/screenshots/curl-routes.txt
kill $SRV 2>/dev/null
echo "server stopped"
