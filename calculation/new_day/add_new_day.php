<?php
include '../../include/db.php';
if (isset($_POST['date_task'])) {$date_task = $_POST['date_task'];}
if (isset($_POST['main_task'])) {$main_task = $_POST['main_task'];} 
$main_task = addslashes(strip_tags($_POST['main_task'])); //для фільтрації вводу лапок, апострофів 
if (isset($_POST['day_tasklife'])) {$day_tasklife = $_POST['day_tasklife'];}


                                                  
                if($date_task != '' and $main_task != '')
                {
                    $result = mysql_query("SELECT * FROM main ORDER BY id_main DESC",$db) ;
                    $myrow = mysql_fetch_assoc($result);
                    $day_tasklife = mysql_num_rows($result)+1;
                    echo "день - ".$day_tasklife."<br>";
                  
                    $result = mysql_query("INSERT INTO main (date_task,main_task,day_tasklife)
                                    VALUES ('$date_task','$main_task','$day_tasklife')",$db);
                                   
                        if($result == TRUE)
                            {
                                echo 'Дані добавлені';                                
                            }
                        else 
                            {
                                echo 'ДАНІ НЕ ДОБАВЛЕНО';
                            }
                }
                else
                {
                    echo 'ВВЕДЕНО НЕ ВСІ ДАНІ'; 
                }
                
                
                


