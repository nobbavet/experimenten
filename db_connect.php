<?php

$sName = "localhost";
$uName = "root";
$Pass = "";
$db_name = "to_do_list";

try {
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $Pass);
=======
    $conn = new PDO("mysql:host=$sName;db_name=$db_name", $uName, $Pass);
>>>>>>> 7aafe0e6626e26a183ca57aec740f8468af96160
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected :D";
}catch(PDOException $e){
    echo "Connection failed:/ : ". $e->getMessage();
}
?>