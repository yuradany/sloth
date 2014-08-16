<?php
$result = mysql_query("SELECT date_task, do_task, id_task, mark_task, amount_task, category FROM task
                    WHERE  date_task=(SELECT MAX(date_task) FROM task) ORDER BY category",$db);            
            $myrow = mysql_fetch_assoc($result); 
      
              do{     
                  if($myrow['mark_task']<$myrow['amount_task']){
                     $myrow['date_task']++;
                    printf("<tr><td>%s</td>"
                            . "<td>%s</td>"
                            . "<td>%s</td>" 
                            . "<td>%s</td>" 
                            . "<td>%s</td>"                                                 
                            . "</tr>"
                            ,$myrow['date_task'], $myrow['do_task'],  $myrow['category'], $myrow['amount_task'], $myrow['mark_task']);
                  }
                    } while ($myrow = mysql_fetch_assoc($result)); 

