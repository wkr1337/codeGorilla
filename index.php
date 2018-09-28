<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <title>Mi Casa Es Su Casa</title>
        <?php include("./navigationBar.php") ?>
        
    
   </head>
        <div>
            <h2 id="welkom"></h2> 
        </div>
       <script>   
   if (new Date().getHours() < 12){ 
    document.getElementById("welkom").innerHTML = 'Good Morning, welcome on: Mi Casa Es Su Casa!';
} 
    else if (new Date().getHours() < 18) {
    document.getElementById("welkom").innerHTML = 'Good Afternoon, welcome on: Mi Casa Es Su Casa!';
        }
    else if (new Date().getHours() < 24) {
    document.getElementById("welkom").innerHTML = 'Good Evening, welcome on: Mi Casa Es Su Casa!';    
    }else {
    document.getElementById("welkom").innerHTML = 'Good Night, welcome on: Mi Casa Es Su Casa!';
    }
    </script>     
   
   
   
   <div class="column">
            <h3>Welcome:</h3>
       
        
        
            <p> We created this website, because there is a big shortage of housing for students in 
                the Netherlands, and espacialy for international students.<br />
                Looking at this problem, we thought wouldn't it be nice, if people with a spare
                room, could maybe adopt an international student for a short time until they
                find a room were they can stay for a longer time.
              </p>
        </div>   
   <div class='column'>
       <h3>How do we make matches</h3>
   
       <p>Well, the way we do this is to let the owner and tenant fill out a form and try to match
           them with the awnsers that are filled out.
           And so come to a good match that is mutually beneficial.           
 </p> 
   </div>
   <div class='column'>
       <h3>There is a match what happens</h3>
   
       <p>Now we will send an email to the owner and tenant, with all the contact info.
          Then you can discuss how much the rent will be and give some practical information
          to each other.
       </p>
   </div>
   
   <div class='column'>
       <h3>Get to know each other!</h3>
   
       <p>This is an amazing opportunity to learn something about a other culture from both sides.
          Maybe you can cook something for your owner/tenant from your own country,
          and in the meanwhile have a nice conversation.
       </p>
   </div>
      
                
                
                
                
         
        
        
        
        
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
