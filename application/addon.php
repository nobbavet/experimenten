<?php 

if(isset($_POST['title'])){
    //require '';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../index.php?mess=error");
    }
}
