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
            <form action="application/addon.php" method="POST" autocomplete="off">
            <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                error
            <?php } ?>
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
            <?php if($todos->rowCount() <= 0){ ?>
        <div class="todo-items">
                <div class="empty">
                    <img src="img/load.gif" width="80px">
                </div>
            </div>
            <?php } ?>

            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="todo-items">
                <span id="<?php echo $todo['id']?>"
                        class="remove-to-do">x</span>

                <?php if($todo['checked']){ ?>
                    <input type="checkbox"
                            class="check-box"
                            checked>
                    <h2 class="checked"><?php echo $todo['title'] ?></h2> 
                <?PHP }else { ?>
                    <input type="checkbox"
                           class="check-box">
                    <h2><?php echo $todo['title'] ?></h2> 
                <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date_time'] ?></small>
            </div>
            <?PHP } ?>
        </div>
    </div>
<!-- </body>s
</html> -->