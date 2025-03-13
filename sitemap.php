<?php
header('Content-Type: application/xml; charset=utf-8');

$pages = [
    '/' => 1.0,
    '/projet.html' => 0.8,
    '/blog.html' => 0.8,
    '/contact.html' => 0.7
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $url => $priority): ?>
        <url>
            <loc>https://rayanchattaoui.com<?= $url ?></loc>
            <lastmod><?= date('Y-m-d', filemtime(__DIR__ . $url)) ?></lastmod>
            <priority><?= $priority ?></priority>
        </url>
    <?php endforeach; ?>
</urlset>
