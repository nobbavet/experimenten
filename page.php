<?php
function content() {
    ob_start();
    ?>
    <div class="main-section">
        <div class="add-section">
        <!-- zuja: hoe kun je deze action ook via index.php laten gaan? -->
            <form action="application/addon.php" method="POST" autocomplete="off">
            <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                    name="title" 
                    style="border-color: red"
                    placeholder="Dit moet je invullen">
                <button type="submit">Add &nbsp; <span>&#43;</span></button>

            <?php }else{ ?>
                <input type="text" 
                    name="title" 
                    placeholder="Wat moet je nog doen?">
                <button type="submit">Add &nbsp; <span>&#43;</span></button>
            <?php } ?>
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
                            data-todo-id ="<?php echo $todo['id']; ?>"
                            class="check-box"
                            checked>
                    <h2 class="checked"><?php echo $todo['title'] ?></h2> 
                <?PHP }else { ?>
                    <input type="checkbox"
                        data-todo-id ="<?php echo $todo['id']; ?>"
                        class="check-box">
                    <h2><?php echo $todo['title'] ?></h2> 
                <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date_time'] ?></small>
            </div>
            <?PHP } ?>
        </div>
    </div>

    <script src="JS/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(){
                    const id = $(this).attr('id');
                    
                    $.post("application/remove.php",
                            {
                                    id: id
                            },
                            (data) => { 
                                if(data){
                                    $(this).parent().hide(600);
                                
                                }
                            }
                    );
            };

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php', // zuja: foutjes? Moet toch application zijn?
                    {
                        id: id
                    },
                    (data) => {
                        if(data != 'error'){
                            const h2 = $(this).next();
                            if(data === '1'){
                                h2.removeClass('checked');
                            }else {
                                h2.addClass('checked');
                            }
                        }
                    }
                );
            });
        }); 
    </script>
    <?php
    $ret = ob_get_contents();
    ob_end_clean();
    return $ret;
}