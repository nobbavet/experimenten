<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
    <?php include 'header.php'; ?> 
    <div id="header">
    <?php echo "run header stuff"; ?>
    </div>

    <?php 
        echo '<p>Hello World</p>'; 
    ?> 

    <form action="" method="get">
    <select name="voertuigen" id="">
        <option>select iets</option>
        <option value = "tank">tank</option>
        <option value = "vliegtuig">vliegtuig</option>
        <option value = "porche">porche</option>
    </select>
    <button type = "submit">submit</button>
</form>
<?php

// if($_GET["voertuigen"] == $_GET["tank"]){
//     echo "ehhhhh";
// }
// else if($_GET['voertuigen'] == $_GET['vliegtuig']){
//     echo "kan het vliegen??";
// }
// else if($_GET['voertuigen'] == $_GET['porche']){
//     echo "wauw";
// }
// else{
//     "kies een voertuig";
// }



function voertuig(){ 
    $test = $_GET["voertuigen"];
    $var = "";
    
switch($test){
    case "tank":
        $var .= "ehhhh... Kaboom";
        break;
    case "vliegtuig":
        $var .= "swoosh maar kan een " . $test . " vliegen??";
        break;
    case "porche":
        $var .= "Vroem";
        break;
    default:
        $var .= "kies een voertuig";
}
    return $var;
}
    echo voertuig();

 ?>
 </body>
</html>