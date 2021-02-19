<?php

$sName = "localhost";
$uName = "root";
$Pass = "";
$db_name = "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $Pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected :D";
}catch(PDOException $e){
    echo "Connection failed:/ : ". $e->getMessage();
}
?>