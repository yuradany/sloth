<?php
include 'include/db.php';
mysql_query("SET NAMES utf8");

if (isset($_POST['id_main'])) {$id_main = $_POST['id_main'];}
header('Content-Type: text/html; charset=utf-8');

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>SLOTH 1.21</title>
    </head>
    <body onload="start(),startclock()">
            <div id="main">
                <p class="info" id="version">
                    <?php             
                    $result = mysql_query("SELECT date_task FROM main ORDER BY id_main DESC",$db);
                    $myrow = mysql_fetch_array($result);
                    
                    echo "|Дані оновлено: ".$myrow['date_task'];
                    ?>
                    <a id="clock"></a>
                 </p>
                 
            <div class='maintable'>
            <table>
                <tr><td class="tday">День</td><td class="tdate">Дата</td><td class="ttask">Завдання</td><td class="tstat">Виконано</td><td class="trating">Рейтинг</td></tr>
<?php
    require 'calculation/index/page_maintask_navigation.php';
    require 'calculation/index/taskmain_rating.php';
?>
            </table>
                </div>                 
            <div id="windimg">
            <div id='windinfo'>
        
<?php
    require 'calculation/index/motivation_info.php';
?>
            </div>
            </div>
                 <div class="itempage"> 
<?php          
    require 'calculation/index/page_itempage_navigation.php';
?>
                 </div>
                 <div>
            <p class="buthref"><a href='new_day.php'>Новий день</a></p>
            <p class="buthref"><a href='result_day.php'>Підсумок дня</a></p>
                 </div>
        </div>
        <script type="text/javascript" src="js/index/clock.js">
        </script>                       
    </body>    
</html>
