<script>

function AddToBlack(){       
        
            source = blacklistform.elements['client_id[]'];
            destination = blacklistform.elements['client_id_black[]'];            
       var tabsource = '';
       for(var i = 0; i < source.options.length; i++){
           if(source.options[i].selected == true){
               tabsource =tabsource + source.options[i].value+',';
           }
       }      
       var tabdestination = '';
       for(var i = 0; i < destination.options.length; i++){
               tabdestination =tabdestination + destination.options[i].value+',';
       }
        //var url = 'http://localhost/APL/client/blacklistchoice/source/'+tabsource+'/destination/'+tabdestination;
       
         //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/Client/blacklistchoice/source/'+tabsource+'/destination/'+tabdestination;
        var url = "<?php echo Yii::app()->request->baseUrl ?>/client/blacklistchoice/source/"+tabsource+"/destination/"+tabdestination;   
        ajaxsend(url,'destination');        
        
 }
 
 
  function AddAllToBlack(){       
        
            source = blacklistform.elements['client_id[]'];        
       var tabsource = '';
       for(var i = 0; i < source.options.length; i++){
               tabsource =tabsource + source.options[i].value+',';
       }     
        //    var url = 'http://localhost/APL/client/allblacklistchoice/source/'+tabsource;  
           // var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/Client/allblacklistchoice/source/'+tabsource;  
        var url = "<?php echo Yii::app()->request->baseUrl ?>/client/allblacklistchoice/source/"+tabsource;    
        ajaxsend(url,'destination');         
     
 }
 
 
 function RemoveAllFromBlack(){       
           
            //var url = 'http://localhost/APL/client/removeallblacklistchoice';
            //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/Client/removeallblacklistchoice';
        var url = "<?php echo Yii::app()->request->baseUrl ?>/client/removeallblacklistchoice";     
        
        ajaxsend(url,'destination');         
       
 }
 
 
 function RemoveFromBlack(){       
       
            destination = blacklistform.elements['client_id_black[]'];                  
       var tabdestination = '';
       for(var i = 0; i < destination.options.length; i++){
            if(destination.options[i].selected != true){
                tabdestination =tabdestination + destination.options[i].value+',';
            }              
       }
        //var url = 'http://localhost/APL/client/removeblacklistchoice/destination/'+tabdestination;
        //var url = 'https://tompanther.arvixe.com/~webside/yetgroup.com/demo-webserver/APL/index.php/Client/removeblacklistchoice/destination/'+tabdestination;
          var url = "<?php echo Yii::app()->request->baseUrl ?>/client/removeblacklistchoice/destination/"+tabdestination;
        ajaxsend(url,'destination');        
        
 }

</script>