<?php
$result = mysql_query("SELECT date_task, do_task, id_task, mark_task, amount_task, category FROM task
                    WHERE  date_task = (SELECT MAX(date_task) FROM task) ORDER BY category",$db);            
            $myrow = mysql_fetch_assoc($result); 
       
            $i = 0;
            do{
                $i++;
                    printf("<tr><td>%s</td>"
                            . "<td>%s</td>"
                            . "<td>%s</td>" 
                            . "<td>%s</td>" 
                            . "<td><input type='text' name='mark_task_%s' value='%s' id='textmark' maxlength='2' onkeyup = 'this.value=parseInt(this.value) | 0'></td>"                                                 
                            . "</tr>"
                            . "<input type='hidden' name='id_task_%s'  value='%s'>"
                            ,$myrow['date_task'], $myrow['do_task'],  $myrow['category'], $myrow['amount_task'], $i,  $myrow['mark_task'], $i, $myrow['id_task']);
                  } while ($myrow = mysql_fetch_assoc($result)); 

