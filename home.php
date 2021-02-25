<?php
    function content() {
        ob_start();
        ?>
            <p>Hello World</p>
            Nabil Ahammar
            Ik ben nabil en ben 17 jaar oud. ijn hobby zijn gamen, tekenen en fietsen/sporten.
        <?php
        $ret = ob_get_contents();
        ob_end_clean();
        return strrev($ret); // ach ja, als we toch bezig zijn ;-). Zal dit goed gaan?
    }