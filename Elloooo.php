<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
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

$test = $_GET["voertuigen"];

switch($test){
    case "tank":
        echo "ehhhh...";
        break;
    case "vliegtuig":
        echo "swoosh maar kan een " . $test . " vliegen??";
        break;
    case "porche":
        echo "dit is een mooie auto!";
        break;
    default:
        echo "kies een voertuig";
}
 ?>
     <ul>
        <?php
            $groenten = ['spinazie', 'boerenkool', 'zuurkool', 'witlof', 'bonen'];
                function ulfnc($array){
                    foreach($array as $groenten){
                $returnit =  '<li>' . $groenten;
                }
                return $returnit;
                }
            echo ulfnc($groenten);
        ?>
    </ul>
        <?php
            function returnh1($h1){
                return '<h1>' . $h1 . '</h1>';
                }

            echo returnh1('Hi 0~0');
        ?>
 </body>
</html>