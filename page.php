<html>
<head>
    <title>Page</title>
</head>

    <?php 
    include 'navbar.php'
    ?>

<body>
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
function voertuig(){ 
    $test = $_GET["voertuigen"];
    $var = "";
    
switch($test){
    case "tank":
        $var .= "Tank goes BRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR";
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