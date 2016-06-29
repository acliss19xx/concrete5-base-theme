<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
            <footer>
            <?php
            $a = new GlobalArea('Footer Global');
            $a->display();
            ?>
            </footer>
        </div>
        <?php // ↓必須タグ ?>
        <?php Loader::element('footer_required'); ?>
    </body>
</html>
