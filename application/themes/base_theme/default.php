<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<?php
/*
『ページテンプレート』ファイル

管理画面→ページとテーマ→テーマ
作成中のテーマで『ページテンプレート』をクリックすると、作成されていないページテンプレートが追加出来る。

インストールされているページテンプレートは下記で確認可能。
管理画面→ページとテーマ→ページテンプレート

ページタイプ・ページテンプレートの解説（動画）
http://concrete5-japan.org/help/5-7/movies/editing/page-type-template-composer/
*/

/*
concrete5のテーマ作成に必要なコードは、下記を参照

cheatsheet [C5 Cheat Sheet]
http://www.webli.us/cheatsheet/doku.php

【完全保存版】 concrete5.7.x テーマスニペット集
http://ja.katzueno.com/2015/08/3492/

*/
?>
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
