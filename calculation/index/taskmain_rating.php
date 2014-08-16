<?php

//приєднання рейтингу до нової таблиці
            $result_status = mysql_query("SELECT status_task FROM main ORDER BY id_main DESC");
            $rows_status = mysql_fetch_array($result_status);  
            
            $stack = array();
            
            do{  if($rows_status['status_task'] === ''){$rows_status['status_task'] = -10;} //для останього запису, який ще не підсумовано              
               $r = round(($rows_status['status_task']-4.999),-1);  // для перевірки рейтингу             
               array_push($stack, $r);              
            
            }  while ($rows_status = mysql_fetch_assoc($result_status));
                            
                $result = mysql_query("SELECT day_tasklife, date_task, main_task, status_task, id_main FROM main ORDER BY id_main DESC LIMIT $start, $num",$db);            
                $myrow = mysql_fetch_array($result);
                
                if ($page==1) {
                $n = $stack[0]; //для виводу рейтингу
                $i=1;          
                }
                elseif ($page==2) {
                $n = $stack[$num+1]; //для виводу рейтингу
                $i=$num+1;          
                }
                elseif ($page==3) {
                $n = $stack[2*$num]; //для виводу рейтингу
                $i=2*$num+1;          
                }
                


                do {                       
                    $result_rating = mysql_query("SELECT rating_name, rating_calculation FROM rating WHERE rating_calculation = '$n' ",$db);
                    $rows_rating = mysql_fetch_array($result_rating);
                    
                    $myrow['status_task'] = round($myrow['status_task'], 2); //для округлення "виконано в %"
                    printf("<tr>"
                            . "<td>%s</td>"
                            . "<td>%s</td>"
                            . "<td><a href='total_task.php?id_main=%s'>%s</a></td>"
                            . "<td>на %s &#37</td>"
                            . "<td>%s</td>"
                            . "</tr>",
                       $myrow['day_tasklife'], $myrow['date_task'],$myrow['id_main'],$myrow['main_task'],$myrow['status_task'],$rows_rating['rating_name']);
                    $n = $stack[0+$i]; //для вибору наступного елементу масива
                    $i++; 
                    $mainrow[$i]; 
                    
                } while ($myrow = mysql_fetch_array($result));  

