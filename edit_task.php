<?php
include 'include/db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>Налаштування програми</title>
    </head>
    <body>
        <div id="main">
            
            <form name='form4' action='calculation/edit_task/edit_main_task.php' method='post' target='_blank'>    
            <?php      
require './calculation/edit_task/edit_field.php';          
            ?>
             <input id="but" type="submit" name="editmain" value="Змінити"> 
               
            </form> 
             </div>
        </body>
</html>

