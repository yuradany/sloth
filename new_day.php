<?php
include 'include/db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>SLOTH 1.2</title>
    </head>
    <body>
        <div id="main">            
            <form name='form1' action='calculation/new_day/add_new_day.php' method='post' target='_blank'>
                <p class="text">
                Дата дня завдань:<br>    
                <input type='date' name='date_task'>
                </p>
                <p class="text">
                Завдання дня:<br>    
                <input type='text' name='main_task'>
                </p>                
                <input id='but' type='submit' name='new_day' value='Додати день'>
            </form>    
            <hr>
            <form name='form2' action='calculation/new_day/add_new_task.php' method='post' target='_blank'>
                <p class="text">
                Введіть завдання:<br>    
                <input type='text' name='do_task'>
                </p> 
                <p class="text">
                Введіть категорію:<br>    
                <input type='text' name='category'>
                </p>
                <p class="text">
                Кількість завдань:<br>    
                <input type='text' name='amount_task' value="1" maxlength='2' onkeyup = 'this.value=parseInt(this.value) | 0'>
                </p>
                <input id='but' type='submit' name='new_task' value='Додати Завдання'>
            </form> 
        </div>
    </body>
</html>
