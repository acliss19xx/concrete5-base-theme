<?php
/*

他のテーマファイルから
$this->inc('elements/header.php');
で読み込まれるヘッダーファイル

concrete5のテーマ作成に必要なコードは、下記を参照

cheatsheet [C5 Cheat Sheet]
http://www.webli.us/cheatsheet/doku.php

【完全保存版】 concrete5.7.x テーマスニペット集
http://ja.katzueno.com/2015/08/3492/

*/
?>
<?php // ↓必須タグ 最初の直接アクセス禁止 ?>
<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <?php // ↓必須タグ ?>
    <?php Loader::element('header_required');?>
    <?php
    /*
    headタグ内に、元のHTMLから不要なタグ以外のものを持ってくる。
    
    不要なタグ：
    
    titleタグ
    meta keywords
    meta description
    上記は、 Loader::element('header_required'); でconcrete5が生成する
    
    jQueryの読み込み
    concrete5が編集画面の操作でjQueryを読み込むので、テーマ内では読み込まない
    
    OGPタグ
    アドオンで管理できる
    http://www.concrete5.org/marketplace/addons/open-graph-tags-lite1
    */
    ?>
    <?php
    /*
    テーマでcssやjsを読み込む場合は、 $view->getThemePath() でパスを指定する
    例：
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/default.css">
    */
    ?>
</head>
<body>
    <?php// ↓必須タグ これがないと編集画面でレイアウトが崩れる ?>
    <div class="<?php echo $c->getPageWrapperClass()?>">
    <?php
    /*
    <div class="ccm-page page-type-blog page-template-full">
    という形で、 page-type-ハンドル や page-templete-ハンドル と CSS クラスが出力される
    */
    ?>
        <header>
        <?php
        /*
        グローバルエリア宣言
        */
        ?>
        <?php
        $a = new GlobalArea('Header Global');
        $a->display();
        ?>
        <?php
        /*
        エリア宣言
        */
        ?>
        <?php
        $a = new Area('Header');
        $a->display($c);
        ?>
        </header>