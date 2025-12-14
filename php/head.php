<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::headTitle(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::headDescription(); ?>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo Theme::src('apple-touch-icon.png') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Theme::src('favicon-32x32.png') ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Theme::src('favicon-16x16.png') ?>">
<link rel="manifest" href="<?php echo Theme::src('site.webmanifest') ?>">
<link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo Theme::sitemapUrl('/sitemap.xml') ?>">

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/default.css'); ?>
<?php echo Theme::css('css/layout.css'); ?>
<?php echo Theme::css('css/media-queries.css'); ?>
<?php echo Theme::css('css/bludit.css'); ?>

<!-- Script -->
<?php echo Theme::js('js/modernizr.js'); ?>

<!-- ISSO Comments -->
<script data-isso="/isso/"
        data-isso-css="true"
        data-isso-css-url="null"
        data-isso-lang="en"
        data-isso-max-comments-top="10"
        data-isso-max-comments-nested="5"
        data-isso-reveal-on-click="5"
        data-isso-sorting="newest"
        data-isso-avatar="true"
        data-isso-avatar-bg="#f0f0f0"
        data-isso-avatar-fg="#9abf88 #5698c4 #e279a3 #9163b6 ..."
        data-isso-vote="true"
        data-isso-vote-levels=""
        data-isso-page-author-hashes="f124cf6b2f01,7831fe17a8cd"
        data-isso-reply-notifications-default-enabled="false"
        src="/isso/js/embed.min.js"></script>


<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
