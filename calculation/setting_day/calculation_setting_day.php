<?php
include '../../include/db.php';
                                
                 $resultday = mysql_query("SELECT * FROM main ORDER BY id_main DESC",$db) ;
                  $myrowday = mysql_fetch_assoc($resultday);       
                 echo ++$myrowday['day_tasklife'].' ';
                 echo ++$myrowday['date_task'].' ';
                 echo $myrowday['main_task'].'</br>';
                 
                 $day_tasklife = $myrowday['day_tasklife'];
                 $date_task = $myrowday['date_task'];
                 $main_task = addslashes(strip_tags($myrowday['main_task']));
                                                           
                        $resultday = mysql_query("INSERT INTO main (date_task,main_task,day_tasklife)
                                    VALUES ('$date_task','$main_task','$day_tasklife')",$db);
                
                $result = mysql_query("SELECT date_task, do_task, id_task, mark_task, amount_task, category FROM task
                    WHERE  date_task=(SELECT MAX(date_task) FROM task) ORDER BY category",$db);            
                $myrow = mysql_fetch_assoc($result); 
                
                
              do{
              echo ++$myrow['date_task'].' ';
              $date_task = $myrow['date_task'];
              $mark_task = $myrow['mark_task'];
              $do_task = addslashes(strip_tags($myrow['do_task']));
              $amount_task = $myrow['amount_task'];
              $category = addslashes(strip_tags($myrow['category']));
              if($mark_task<$amount_task)
              {
                $resultins = mysql_query("INSERT  INTO task (date_task, do_task, mark_task, amount_task, category) VALUES
                            ('$date_task', '$do_task', '$mark_task', '$amount_task', '$category')",$db);  
              }
                } while ($myrow = mysql_fetch_assoc($result)); 
                            
                ?>


