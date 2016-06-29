<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
            <footer>
            <?php
            $a = new GlobalArea('Footer Site Title');
            $a->display();
            ?>
            </footer>
        </div>
        <?php Loader::element('footer_required'); ?>
    </body>
</html>
