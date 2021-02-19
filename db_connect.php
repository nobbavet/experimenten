<?php

$sName = "localhost";
$uName = "root";
$Pass = "";
$db_name = "to_do_list";

try {
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $Pass);
=======
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $Pass);
=======
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $Pass);
=======
    $conn = new PDO("mysql:host=$sName;db_name=$db_name", $uName, $Pass);
>>>>>>> 7aafe0e6626e26a183ca57aec740f8468af96160
>>>>>>> 4b92797ba0751e5e66f618d33d930cc34dac8b3f
>>>>>>> 9b038b5bdb2039230c1ec5762e710d88a6c7d974
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected :D";
}catch(PDOException $e){
    echo "Connection failed:/ : ". $e->getMessage();
}
?>