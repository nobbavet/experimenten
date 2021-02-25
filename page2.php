<?php
function content() {
    ob_start();
    ?>
    Hello world<BR>
    <?php
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}
