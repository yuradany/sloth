<?php
$result = mysql_query("SELECT main_task, date_task FROM main
                    WHERE  date_task=(SELECT MAX(date_task) FROM main)",$db);
            $myrow = mysql_fetch_assoc($result); 
            printf("<input type='text' name='main_task' id='but' value='%s'>",$myrow['main_task']);

