<?php 
// zuja: hoe kun je nu ook dit via index laten lopen?

if(isset($_POST['title'])){
    require '../db_connect.php';

    $title = $_POST['title'];

    if(empty($title)){
        header("Location: ../page.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
        $res = $stmt->execute([$title]);

        if($res) {
            header("Location: ../page.php?mess=succes");
        }else { 
            header("Location: ../page.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../page.php?mess=error");
}
