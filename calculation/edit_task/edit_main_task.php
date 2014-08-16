<?php
include '../../include/db.php';
if (isset($_POST['main_task'])) {$main_task = $_POST['main_task'];} 
if (isset($_POST['id_main'])) {$id_main=$_POST['id_main'];}
$main_task = addslashes(strip_tags($_POST['main_task'])); //для фільтрації вводу лапок, апострофів

$result = mysql_query("SELECT date_task FROM main ORDER BY date_task DESC",$db);
$myrow=  mysql_fetch_assoc($result);
$date_task = $myrow['date_task'];
if ($main_task!=''){
$result = mysql_query("UPDATE main SET main_task='$main_task' WHERE date_task = '$date_task'",$db); 
echo 'OK';
}
 else {
    echo 'Помилка';    
}
