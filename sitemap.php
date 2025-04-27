<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php
  $pages = [
    'index',
    'work',
    'jeen',
    'pieces',
    'draw-a-card',
    'prague-experience',
    'track-run',
    'about'
  ];

  foreach ($pages as $page) {
    if ($page === 'index') {
        $lastmod = date("Y-m-d", filemtime($page . '.php'));
        $url = "https://joselcanlas.com/";
        echo "<url>\n";
        echo "  <loc>$url</loc>\n";
        echo "  <lastmod>$lastmod</lastmod>\n";
        echo "  <priority>1.0</priority>\n";
        echo "</url>\n";
    } else {
        $lastmod = date("Y-m-d", filemtime($page . '.php'));
        $url = "https://joselcanlas.com/" . $page;
        echo "<url>\n";
        echo "  <loc>$url</loc>\n";
        echo "  <lastmod>$lastmod</lastmod>\n";
        echo "  <priority>0.8</priority>\n";
        echo "</url>\n";
    }
  }
  ?>
</urlset>