<?php

    //для реалізації навігації "10 днів" на одній сторінці
            $num = 10;
$page = $_GET['page'];
$result = mysql_query("SELECT * FROM main"); 
$myrow = mysql_fetch_assoc($result);
do{$maink++;}
while ($myrow = mysql_fetch_assoc($result));
$totalpage = intval(($maink - 1)/$num)+1;
$page = intval($page);
if(empty($page) or $page < 0) {$page = 1;} 
  if($page > $totalpage) {$page = $totalpage;} 
$start = $page * $num - $num; 
          //для реалізації "10 днів" на одній сторінці, продовження нижче
          


