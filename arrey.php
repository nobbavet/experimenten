<ul class="nav navbar-nav navbar-right">
    <?php
        // Define each name associated with an URL
        $urls = array(
            'Home' => 'experimenten/Elloooo.php',
            'Page' => 'experimenten/page.php',
            // …
        );

        foreach ($urls as $name => $url) {
            print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                '><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>
</ul>