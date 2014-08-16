<?php
                $result = mysql_query("SELECT id_info, text_info FROM info ORDER BY id_info",$db);
                $myrow=  mysql_fetch_array($result);
                               
                
                // для рандомного вибору інформації, справа
                $stack = array();
           
                do{
                $m = $myrow['text_info'];               
                array_push($stack, $m);            
                }  while ($myrow = mysql_fetch_assoc($result));
           
                $str = $stack[ array_rand($stack) ];    
                echo $str;                    
               

