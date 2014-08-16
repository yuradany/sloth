 function start(){
                        txt=' Sloth - програма для самоконтролю | Версія 1.21|';
                        setTimeout(function(){
                            var el = document.getElementById('version');
                            var _html = el.innerHTML;
                            el.innerHTML = _html + txt;
                        },2000); 
                        }
                        
                       function time(){
   var dat = new Date();
   var hour=dat.getHours();
   var min=dat.getMinutes();
   var sec=dat.getSeconds();
   s='';h='';m=''
        if(sec<10){s=0;}
        if(hour<10){h=0;}
        if(min<10){m=0;}
        tim='|'+h+hour+':'+m+min+':'+s+sec+'|';
   
      
   document.getElementById('clock').innerHTML=tim;
}
function startclock(){
   id=setInterval('time()',0);
}