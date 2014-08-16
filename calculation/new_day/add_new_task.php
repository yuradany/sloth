<?php
include '../../include/db.php';
if (isset($_POST['do_task'])) {$do_task = $_POST['do_task'];} 
$do_task = addslashes(strip_tags($_POST['do_task']));  //фільтрація
if (isset($_POST['amount_task'])) {$amount_task = $_POST['amount_task'];} 
if (isset($_POST['date_task'])) {$date_task = $_POST['date_task'];}
if (isset($_POST['category'])) {$category = $_POST['category'];} 
$category = addslashes(strip_tags($_POST['category'])); //фільтрація

$res = mysql_query("SELECT date_task FROM main ORDER BY date_task DESC",$db);
$myrow = mysql_fetch_array($res);

$date_task = $myrow['date_task'];

                if($do_task!='' && $amount_task!='' && $category!='')
                {
                    $result = mysql_query("INSERT INTO task (do_task, category, amount_task, date_task)
                                    VALUES ('$do_task', '$category', '$amount_task', '$date_task')",$db);
                                   
                        if($result == TRUE)
                            {
                                echo 'Завдання добавлено';
                            }
                        else 
                            {
                                echo 'ЗАВДАННЯ НЕ ДОБАВЛЕНО';
                            }
                }
                else
                {
                    echo 'ВВЕДЕНО НЕ ВСІ ДАНІ'; 
                }
                ?>