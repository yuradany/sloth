
<?php

//для реалізації "10 днів" на одній сторінці

if ($page != 1) {$pervpage = '<a href= ./index.php?page=1><img src="img/lastpage.gif"></a> 
<a href= ./index.php?page='. ($page - 1) .'><img src="img/previouspage.gif" id="previouspage" onmouseover="changepreviouspage()" onmouseout="previouspagere()"></a> ';} 

if ($page != $totalpage) {$nextpage = ' <a href= ./index.php?page='. ($page + 1) .'><img src="img/nextpage.gif" id="nextpage" onmouseover="changenextpage()" onmouseout="nextpagere()"></a> 
<a href= ./index.php?page=' .$totalpage. '><img src="img/endpage.gif"></a>';}

if($page - 2 > 0) {$page2left = ' <a href= ./index.php?page='. ($page - 2) .'>'. ($page - 2) .'</a>  ';}
if($page - 1 > 0) {$page1left = '<a href= ./index.php?page='. ($page - 1) .'>'. ($page - 1) .'</a>  ';} 
if($page + 2 <= $totalpage) {$page2right = '  <a href= ./index.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';} 
if($page + 1 <= $totalpage) {$page1right = '  <a href= ./index.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';}

echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage; 

                //для реалізації "10 днів" на одній сторінці, закінчено

?>
<!--<img src="img/nextpage.gif" id="nextpage" onmouseover="changenextpage()" onmouseout="nextpagere()">-->
<script>
    function changenextpage(){
    document.getElementById('nextpage').src='img/nextpagech.gif';
    }
    function nextpagere(){
    document.getElementById('nextpage').src='img/nextpage.gif';    
    }
    function changepreviouspage(){
    document.getElementById('previouspage').src='img/previouspagech.gif';
    }
    function previouspagere(){
    document.getElementById('previouspage').src='img/previouspage.gif';    
    }
</script>