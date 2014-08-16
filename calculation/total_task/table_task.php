<?php
$result = mysql_query("SELECT task.date_task, do_task, category, mark_task, amount_task
                    FROM task JOIN main WHERE (id_main = '$id_main') AND (main.date_task=task.date_task) ORDER BY category",$db);            
            $myrow = mysql_fetch_assoc($result);            
            do
            {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                    $myrow['do_task'],$myrow['category'],$myrow['amount_task'],$myrow['mark_task']);
            }
            while ($myrow = mysql_fetch_assoc($result));

