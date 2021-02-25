<?php 
    require 'db_connect.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="kleurtjes.css">
    </head>
    <body>
        <?php
            $page = (isset($_GET['i']))?$_GET['i']:'home';
            // zuja: probeer dit meer functie gestuurd te maken. Hier staat nog te veel data die gedumpt wordt.
            // hierdoor krijg je veel HTML met PHP stukjes. Draai dit eens om.
            include 'header.php';
            include 'navbar.php';

            switch ($page) {
                case 'home': include 'home.php'; break;
                case 'p1': include 'page.php'; break;
                case 'p2': include 'page2.php'; break;
            }
            echo content();
            include 'footer.php'; 
        //   include 'page.php';
        //   include 'page2.php';
        ?>
    </body>
</html>
