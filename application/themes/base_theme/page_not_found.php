<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<?php
$a = new GlobalArea('Breadcrumb');
$a->display();
?>
<main>
    <h1><?php echo t('404 Error')?></h1>
    <p><?php echo t('Page not found.')?></p>
</main>
<?php  $this->inc('elements/footer.php'); ?>
