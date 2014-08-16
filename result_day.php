<?php
include 'include/db.php';
if (isset($_POST['id_task'])) {$id_task=$_POST['id_task'];}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>SLOTH 1.2</title>
    </head>
    <body>
        <div id="main">            
            <form name='form3' action='calculation/result_day/calculation_result.php' method='post' target='_blank'>
                <div id="rtable">
                <table id="resulttable">
                    <tr><td class="trdate">Дата</td><td class="trtask">Завдання</td><td class="trcategory">Категорія</td><td class="tramount">Кількість</td><td class="trstat">Оцінка</td></tr>
                <?php   
require './calculation/result_day/result_table.php';            
                ?>
                </table>
                </div>
                <input type='hidden' name='count_task'  value='<?php echo $i ?>'>
                <input id="but" type="submit" name="result" value="Підсумок">
                <p class="buthref"><a href='setting_day.php'>Перенести невиконані завдання</a></p>
                <p class="buthref"><a href='edit_task.php'>Редагувати завдання дня</a></p>
            </form>     
        </div>
    </body>
</html>

                
                
                




