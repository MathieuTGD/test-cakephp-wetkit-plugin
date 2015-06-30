<?php
use Cake\Core\Configure;
$theme = Configure::read('wetkit.wet.theme');
?>
<!DOCTYPE html><!--[if lt IE 9]><html class="no-js lt-ie9" lang="en" dir="ltr"><![endif]--><!--[if gt IE 8]><!-->
<html class="no-js" lang="en" dir="ltr">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
            wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html -->
    <title>We couldn&#x27;t find that Web page (Error 404) - Government of Canada Intranet theme / Nous ne pouvons trouver cette page Web (Erreur 404) - Thème du gouvernement du Canada pour les sites intranet</title>
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <!-- Meta data -->
    <meta name="robots" content="noindex, nofollow, noarchive">
    <!-- Meta data-->
    <!--[if gte IE 9 | !IE ]><!-->
    <link href="<?= Configure::read('wetkit.wet.path') ?>/assets/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="<?= Configure::read('wetkit.wet.path') ?>/css/wet-boew.min.css"/>
    <link rel="stylesheet" href="<?= Configure::read('wetkit.wet.path') ?>/css/theme-srv.min.css">
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <link href="<?= Configure::read('wetkit.wet.path') ?>/assets/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="<?= Configure::read('wetkit.wet.path') ?>/css/ie8-theme-srv.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/<?= Configure::read('wetkit.jquery-version') ?>/jquery.min.js"></script>
    <script src="<?= Configure::read('wetkit.wet.path') ?>/js/ie8-wet-boew.min.js"></script>
    <![endif]-->
    <noscript><link rel="stylesheet" href="<?= Configure::read('wetkit.wet.path') ?>/css/noscript.min.css" /></noscript>
</head>
<body vocab="http://schema.org/" typeof="WebPage">
<header role="banner" id="wb-bnr">
    <?php if ($theme != 'theme-base'): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="<?= Configure::read('wetkit.wet.path') ?>/assets/sig-blk-en.svg" aria-label="Government of Canada"></object>
            </div>
            <div class="col-sm-6">
                <?php if ($theme == 'theme-gcwu-fegc'): ?>
                    <object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="<?= Configure::read('wetkit.wet.path') ?>/assets/wmms-alt.svg" aria-label="Symbol of the Government of Canada"></object>
                <?php else: ?>
                    <object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="<?= Configure::read('wetkit.wet.path') ?>/assets/wmms-intra.svg" aria-label="Symbol of the Government of Canada"></object>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</header>
<main role="main" property="mainContentOfPage" class="container">
    <div class="row mrgn-tp-lg">

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    </div>
</main>
<!--[if gte IE 9 | !IE ]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/<?= Configure::read('wetkit.jquery-version') ?>/jquery.min.js"></script>
<script src="<?= Configure::read('wetkit.wet.path') ?>/js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="<?= Configure::read('wetkit.wet.path') ?>/js/ie8-wet-boew2.min.js"></script>

<![endif]-->
<script src="<?= Configure::read('wetkit.wet.path') ?>/js/theme.min.js"></script>
</body>
</html>

