<?php
include '../../include/db.php';
// зміна імені, для name=mark_task, для того щоб один "сабміт" добавляв бульше, ніж одне текстове поле
if (isset($_POST['count_task'])) {$count = $_POST['count_task'];}
           
for ($i = 1; $i <= $count; $i++) {
    $m = 'mark_task_'.$i;
    $id = 'id_task_'.$i;
if (isset($_POST[$m])) {$mark_task = $_POST[$m];}
if (isset($_POST[$id ])) {$id_task = $_POST[$id];}

echo $mark_task;

        if($mark_task != '')
                {
            
                    $result = mysql_query("UPDATE task SET mark_task = '$mark_task'
                            WHERE id_task='$id_task'" ,$db);
                        
                  
                                   
                        if($result == true)
                            {
                                echo 'Оцінку зроблено';                                
                            }
                        else 
                            {
                                echo 'ОЦІНКУ НЕ ДОБАВЛЕНО';
                            }
                }
                else
                {
                    echo 'ВВЕДЕНО НЕ ВСІ ДАНІ'; 
                }
                }               
        
 // Обчислення рейтингу, який автоматично додається при відправленні виконаних завдань
                       if($mark_task != '')
            {
            $ras = mysql_query("SELECT date_task, amount_task, mark_task FROM task
                    WHERE  date_task = (SELECT MAX(date_task) FROM task)",$db);            
            $myro = mysql_fetch_assoc($ras);            
            $stac = array();
            do{
            $m = $myro['amount_task'];               
            array_push($stac, $m);            
            }  while ($myro = mysql_fetch_assoc($ras));
           
            print_r($stac);
            $total_task = array_sum($stac);                      
            echo 'кількість завдань'.$total_task.'<br>';
                
  
            $res = mysql_query("SELECT date_task, mark_task FROM task
                    WHERE  date_task=(SELECT MAX(date_task) FROM task)",$db);            
            $myrow = mysql_fetch_assoc($res);            
            $stack = array();
            do{
            $m = $myrow['mark_task'];               
            array_push($stack, $m);            
            }  while ($myrow = mysql_fetch_assoc($res));
           
            print_r($stack);
            $mark_sum = array_sum($stack);
            echo 'сума оцінок'.$mark_sum.'<br>';
            
            $rating = (100/$total_task)*$mark_sum;            
            echo 'виконано завдань'.round($rating, 2).'%<br>';
            
            
            $rem = mysql_query("UPDATE main SET status_task = '$rating'
                            ORDER BY id_main DESC LIMIT 1" ,$db);
            if ($rem) {
                echo 'Рейтинг додано';
            } else {echo 'Сталась помилка';}            
            }
            
            
                    
            
            
            
            
                
            
            
            
            
                     
            
            