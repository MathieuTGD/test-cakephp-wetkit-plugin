<?php
use Cake\Core\Configure;

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?= Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
else:
    $this->layout = 'error';
endif;
?>



<h1 class="wb-inv">We couldn't find that Web page (Error 404) / <span lang="fr">Nous ne pouvons trouver cette page Web (Erreur 404)</span></h1>
<section class="col-md-6">
    <h2><span class="glyphicon glyphicon-warning-sign mrgn-rght-md"></span> We couldn't find that Web page (Error 404)</h2>
    <p>We're sorry you ended up here. Sometimes a page gets moved or deleted, but hopefully we can help you find what you're looking for.</p>
    <ul>
        <li>Return to the <?= $this->Html->link('home page', '/') ?></li>
    </ul>
</section>
<section class="col-md-6" lang="fr">
    <h2><span class="glyphicon glyphicon-warning-sign mrgn-rght-md"></span> Nous ne pouvons trouver cette page Web (Erreur 404)</h2>
    <p>Nous sommes désolés que vous ayez abouti ici. Il arrive parfois qu'une page ait été déplacée ou supprimée. Heureusement, nous pouvons vous aider à trouver ce que vous cherchez.</p>
    <ul>
        <li>Retournez à la <?= $this->Html->link("page d'accueil", '/') ?></li>
    </ul>
</section>
