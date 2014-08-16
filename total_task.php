<?php
include 'include/db.php';
if (isset($_GET['id_main'])) {$id_main=$_GET['id_main'];}
$result = mysql_query("SELECT date_task, day_tasklife FROM main WHERE id_main = '$id_main'",$db);            
$myrow = mysql_fetch_assoc($result);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title><?php echo $myrow['day_tasklife']." день - ".$myrow['date_task']?></title>
    </head>
    <body>
        <div id="main">
            <table id="tasktable">
                <caption>
                    <?php
                        echo "Дата завдань - ".$myrow['date_task'];
                    ?>
                </caption>
                <tr><td class="tdtask">Завдання</td><td class="tcategory">Категорія</td><td class="tamount">Кількість</td><td class="tdstat">Виконано</td></tr>
            <?php   
                require 'calculation/total_task/table_task.php';
            ?>
                <tr><td class="tdall" colspan="2">Всього:</td>
                    <td>
            <?php
                require './calculation/total_task/calculation_amount_task.php';
            ?>
                    </td>
                    <td>
            <?php 
                require './calculation/total_task/calculation_mark_task.php';
            ?>
                    </td>
                    </tr>
            </table>     
          <!--  <select>
                <option value="none">Сортувати за...</option>
                <option value="category">категоріями</option>
                <option value="amount_task">к-стю завдань</option>
                <option value="mark_task">к-стю виконаних</option>
            </select> -->
            </div>
    </body>
</html>


