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

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/default.css'); ?>
<?php echo Theme::css('css/layout.css'); ?>
<?php echo Theme::css('css/media-queries.css'); ?>
<?php echo Theme::css('css/bludit.css'); ?>

<!-- Script -->
<?php echo Theme::js('js/modernizr.js'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
