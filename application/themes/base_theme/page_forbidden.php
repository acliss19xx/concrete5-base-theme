<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<?php
$a = new GlobalArea('Breadcrumb');
$a->display();
?>
<main>
    <h1><?php echo t('403 Error')?></h1>
    <p><?php echo t('You are not allowed to access this page.')?></p>
</main>
<?php  $this->inc('elements/footer.php'); ?>
