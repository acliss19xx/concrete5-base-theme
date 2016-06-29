<?php

/*
標準テーマ elemental の page_theme.php の解説
http://acliss.secret.jp/private-blog/acliss-blog/2015/12/12/elemental%E3%81%AEpage_theme/
*/

/*
テーマのフォルダ名を変更した場合、下記 BaseTheme の箇所をフォルダ名に合わせて変更する
※テーマのフォルダ名には英子文字、数字と _ （アンダーバー）が使用できる。-  （ハイフン）は使用できない

フォルダ名が base_theme の場合、 namespace は BaseTheme となる
（アンダーバーは削除、頭一文字とアンダーバー後の一文字は大文字に変更）
*/
namespace Application\Theme\BaseTheme;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;

class PageTheme extends \Concrete\Core\Page\Theme\Theme implements ThemeProviderInterface
{
    public function registerAssets()
    {
        /*
        concrete5で最初から用意されているcssやjavascriptを読み込むか設定する
        $this->providesAsset() —- 通常使われるcssやjavascriptを使用しない
        $this->requireAsset() —- concrete5のコアで用意されているcssやjavascriptを使用する
        */
        //$this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('css', 'bootstrap/*');
        $this->providesAsset('css', 'blocks/form');
        $this->providesAsset('css', 'blocks/social_links');
        $this->providesAsset('css', 'blocks/share_this_page');
        $this->providesAsset('css', 'blocks/feature');
        $this->providesAsset('css', 'blocks/testimonial');
        $this->providesAsset('css', 'blocks/date_navigation');
        $this->providesAsset('css', 'blocks/topic_list');
        $this->providesAsset('css', 'blocks/faq');
        $this->providesAsset('css', 'blocks/tags');
        $this->providesAsset('css', 'core/frontend/*');
        $this->providesAsset('css', 'blocks/feature/templates/hover_description');

        $this->providesAsset('css', 'blocks/event_list');

        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
    }

    /*
    レイアウト機能を使うときのグリッドシステムをどのCSSフレームワークにするか設定する
    concrete5では、Bootstrap 3、Bootstrap 2、Foundation、960 grid をサポートしている
    http://concrete5-japan.org/help/5-7/developer/designing-for-concrete5/adding-grid-support-to-your-theme/enabling-grid-support-for-areas-and-layouts/
    */
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    /*
    テーマ名
    */
    public function getThemeName()
    {
        return t('Base Theme');
    }

    /*
    テーマの説明
    */
    public function getThemeDescription()
    {
        return t('Empty Theme');
    }

    /*
    ブロックのカスタムクラス名を追加
    http://concrete5-japan.org/help/5-7/developer/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor/
    */
    public function getThemeBlockClasses()
    {
        return array(
            'feature' => array('feature-home-page'),
            'page_list' => array(
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped',
            ),
            'next_previous' => array('block-sidebar-wrapped'),
            'share_this_page' => array('block-sidebar-wrapped'),
            'content' => array(
                'block-sidebar-wrapped',
                'block-sidebar-padded',
            ),
            'date_navigation' => array('block-sidebar-padded'),
            'topic_list' => array('block-sidebar-wrapped'),
            'testimonial' => array('testimonial-bio'),
            'image' => array(
                'image-right-tilt',
                'image-circle',
            ),
        );
    }
    
    /*
    エリアのカスタムクラス名を追加
    http://concrete5-japan.org/help/5-7/developer/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor/
    */
    public function getThemeAreaClasses()
    {
        return array(
            'Page Footer' => array('area-content-accent'),
        );
    }

    /*
    ブロックのデフォルトのカスタムテンプレートを設定
    http://concrete5-japan.org/help/5-7/developer/working-with-blocks/working-with-existing-block-types/creating-additional-custom-view-templates/default-a-block-to-a-custom-template-in-a-theme/
    */
    public function getThemeDefaultBlockTemplates()
    {
        return array(
            'calendar' => 'bootstrap_calendar.php'
        );
    }

    /*
    レスポンシブに対応したテーマの場合、どの幅で画像を切り替えるか定義できる
    http://concrete5-japan.org/help/5-7/developer/designing-for-concrete5/supporting-responsive-images-in-your-concrete5-theme/
    */
    public function getThemeResponsiveImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        );
    }

    /*
    記事ブロックで選択出来るクラスを定義できる
    http://concrete5-japan.org/help/5-7/developer/designing-for-concrete5/advanced-css-and-javascript-usage/adding-custom-css-classes-to-blocks-areas-and-the-editor/
    */
    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Title Thin'), 'menuClass' => 'title-thin', 'spanClass' => 'title-thin', 'forceBlock' => 1),
            array('title' => t('Title Caps Bold'), 'menuClass' => 'title-caps-bold', 'spanClass' => 'title-caps-bold', 'forceBlock' => 1),
            array('title' => t('Title Caps'), 'menuClass' => 'title-caps', 'spanClass' => 'title-caps', 'forceBlock' => 1),
            array('title' => t('Image Caption'), 'menuClass' => 'image-caption', 'spanClass' => 'image-caption', 'forceBlock' => '-1'),
            array('title' => t('Standard Button'), 'menuClass' => '', 'spanClass' => 'btn btn-default', 'forceBlock' => '-1'),
            array('title' => t('Success Button'), 'menuClass' => '', 'spanClass' => 'btn btn-success', 'forceBlock' => '-1'),
            array('title' => t('Primary Button'), 'menuClass' => '', 'spanClass' => 'btn btn-primary', 'forceBlock' => '-1'),
        );
    }

    /*
    レイアウト機能で追加するレイアウトの定義ができる
    たとえば、スマートフォンサイズでは1カラム、タブレットサイズでは2カラム、PCサイズでは3カラムという設定ができる
    */
    public function getThemeAreaLayoutPresets()
    {
        $presets = array(
            array(
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => array(
                    '<div class="col-sm-4"></div>',
                    '<div class="col-sm-8"></div>'
                ),
            ),
            array(
                'handle' => 'right_sidebar',
                'name' => 'Right Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => array(
                    '<div class="col-sm-8"></div>',
                    '<div class="col-sm-4"></div>'
                ),
            )
        );
        return $presets;
    }
}
