<link rel="stylesheet" href="kleurtjes.css">


<body>
    <?php
        // zuja: misschien is dit een betere manier om pagina's te benaderen.
        $page = (isset($_GET['i']))?$_GET['i']:'home';
        include 'header.php';
        include 'navbar.php';

        switch ($page) {
            case 'home':
                echo '<p>Hello World</p>'; 
                echo strrev("Nabil Ahammar"); 
                echo strrev("Ik ben nabil en ben 17 jaar oud. ijn hobby zijn gamen, tekenen en fietsen/sporten.");
                break;
            case 'p1': include 'page.php'; break;
            case 'p2': include 'page2.php'; break;
        }
    ?>
 
    <?php 
    include 'footer.php'; 
    ?>
    
    
    <?php 
//   include 'page.php';
//   include 'page2.php';
    ?>
</body>
