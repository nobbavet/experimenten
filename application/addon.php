<?php 

if(isset($_POST['title'])){
<<<<<<< HEAD
    require '../db_connect.php';
=======
    //require '';
>>>>>>> e36e2fe49cfe016e369e54b864c8172f468e361c

    $title = $_POST['title'];

    if(empty($title)){
<<<<<<< HEAD
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
=======
        header("Location: ../index.php?mess=error");
    }
>>>>>>> e36e2fe49cfe016e369e54b864c8172f468e361c
}
