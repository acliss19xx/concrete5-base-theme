<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<?php
$a = new GlobalArea('Breadcrumb');
$a->display();
?>
<main>
<?php
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);
?>
</main>

<?php  $this->inc('elements/footer.php'); ?>