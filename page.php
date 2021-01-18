<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?m=Elloooo">Menu</a></li>
            <li><a href="index.php?m=page2">Hobby's</a></li>
        <ul>
    </nav>
    <section>
<?php
    if ($_GET['m']=='page2')
        include 'page2.php';
?>
    </section>


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