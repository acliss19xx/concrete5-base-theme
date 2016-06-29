<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    /*
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/default.css">
    */
    ?>
    <?php Loader::element('header_required');?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">
        <header>
        <?php
        /*
        グローバルエリア
        */
        ?>
        <?php
        $a = new GlobalArea('Header Site Title');
        $a->display();
        ?>
        </header>