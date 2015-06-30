<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.ctp');

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
<?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
else:
    $this->layout = 'error';
endif;
?>


<h1 class="wb-inv">Error / <span lang="fr">Erreur</span></h1>
<section class="col-md-6">
    <h2><span class="glyphicon glyphicon-warning-sign mrgn-rght-md"></span> Error</h2>
    <p>An error occurred while loading this page. If the error persist please contact your system administrator.</p>
    <ul>
        <li>Return to the <?= $this->Html->link('home page', '/') ?></li>
    </ul>
</section>
<section class="col-md-6" lang="fr">
    <h2><span class="glyphicon glyphicon-warning-sign mrgn-rght-md"></span> Erreur</h2>
    <p>Une erreur s'est produite lors de l'exécution de la page. Si l'erreur persiste veuillez contacter votre
    administrateur de système.</p>
    <ul>
        <li>Retournez à la <?= $this->Html->link("page d'accueil", '/') ?></li>
    </ul>
</section>
