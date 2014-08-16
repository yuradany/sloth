<?php include 'include/db.php';
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
            
                <div id="rtable">
                <table id="resulttable">
                    <caption>Невиконані завдання:</caption>
                    <tr><td class="trdate">Дата</td><td class="trtask">Завдання</td><td class="trcategory">Категорія</td><td class="tramount">Кількість</td><td class="trstat">Оцінка</td></tr>
                <?php   
require './calculation/setting_day/setting_task_table.php';            
                ?>
                </table>
                </div>
            <form name='form3' action='calculation/setting_day/calculation_setting_day.php' method='post' target='_blank'>
                <input id="but" type="submit" name="postpone" value="Перенести"> 
                
            </form>     
        </div>
    </body>
</html>