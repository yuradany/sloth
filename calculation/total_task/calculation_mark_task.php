<?php
if (isset($_GET['id_main'])) {$id_main=$_GET['id_main'];}
                    $res = mysql_query("SELECT task.date_task, main.date_task, mark_task, id_main FROM task JOIN main 
                            WHERE (id_main='$id_main') AND (task.date_task=main.date_task)",$db);            
                    $myrow = mysql_fetch_assoc($res);                    
                    $stack = array();
                do{
                    $m = $myrow['mark_task'];               
                    array_push($stack, $m);            
                }  while ($myrow = mysql_fetch_assoc($res));
           
                    $mark_sum = array_sum($stack);
                    echo $mark_sum;

