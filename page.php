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
            <div class="todo-items">
                <input type="checkbox">
                <h2>Eet je groentjes</h2>
                <br>
                <small>created: 19/02/2021</small>
            </div>
        </div>
    </div>
<!-- </body>s
</html> -->