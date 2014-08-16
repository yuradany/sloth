<?php
if (isset($_GET['id_main'])) {$id_main=$_GET['id_main'];}
                $ras = mysql_query("SELECT amount_task, task.date_task, main.date_task, mark_task, id_main FROM task JOIN main 
                            WHERE (id_main='$id_main') AND (task.date_task=main.date_task)",$db);            
                $myro = mysql_fetch_assoc($ras);            
                $stac = array();
                    do{
                $m = $myro['amount_task'];               
                array_push($stac, $m);            
                    }  while ($myro = mysql_fetch_assoc($ras));
                           
                $total_task = array_sum($stac);                      
                echo $total_task;

