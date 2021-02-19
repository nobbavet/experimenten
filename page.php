<?php 
require 'db_connect.php';
?>

<!-- <html>
<head>
    <title>Page</title>
</head>

<?php 
    //include 'navbar.php'
    ?>
 
<body> -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7aafe0e6626e26a183ca57aec740f8468af96160
    <div class="main-section">
        <div class="add-section">
            <form action="">
                <input type="text" 
                       name="title" 
                       placeholder="Dit moet je invullen">
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            </form>
        </div>
        <?php
<<<<<<< HEAD
            $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>
        <div class="show-todo-section">
            <?php if($todos->rowCount() === 0){ ?>
        <div class="todo-items">
                <div class="empty">
                    <img src="img/load.gif" width="100%">
                </div>
            </div>
            <?php } ?>
=======

        ?>
        <div class="show-todo-section">
>>>>>>> 7aafe0e6626e26a183ca57aec740f8468af96160
            <div class="todo-items">
                <input type="checkbox">
                <h2>Eet je groentjes</h2>
                <br>
                <small>created: 19/02/2021</small>
            </div>
        </div>
    </div>
<!-- </body>s
<<<<<<< HEAD
=======
=======
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

?>
<!-- </body>
>>>>>>> 7a18fbf348ffd3a53a8e3260bb2fa13c64f2634d
>>>>>>> 7aafe0e6626e26a183ca57aec740f8468af96160
</html> -->