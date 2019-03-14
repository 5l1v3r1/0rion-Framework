9<?php
require_once 'layout.php';
require_once 'u.php';
?>
   
<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Clean Slate Protocol</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Protocol Confirmation:</legend>
                <label> Clean Slate Protocol:</label>Type  "yes & yes" To Confirm Protocol Initiation</p><input id="ur" type="text" name="url" value="" />
</fieldset>

    <fieldset>
        <legend>When You are finished with 0rion or its just time to go, execute the clean slate protocol</legend>
        <legend>There is no recovering 0rion after this protocol is initiated</legend>
        <legend>CLEAN SLATE PROTOCOL WILL COMPLETELY WIPE 0RION AND REPLACE IT WITH ANOTHER WEBSITE IN 7 MINS</legend>
        <legend>. . . CONSIDER THIS A WARNING</legend>
       </fieldset>
        <video width="885" height="550" controls autoplay>
          <source src="CLEANSLATE.webm" type="video/webm">
  Sorry, your browser doesn't support the video element.
</video>

				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Initiate" class="alt_btn" id="submit" >
                                    
				</div>
			</footer>
                        
		</article><!-- end of post new article -->
               

                <?php
              if(isset($_POST['submit'])){
               $url = $_POST['url'];

 if($url==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have Not Confirmed Initiation Of Clean Slate Protocol Please Type - yes & yes'});</script>";
              }
               
 else {
      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Clean Slate Protocol Initiated'});</script>";
         
      require_once 'loading.php';
	
	


                    
shell("sudo slate");
	
         
   
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Clean Slate Protocol</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Complete</h4>
                 
 ';
     
        echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'What a long strange trip its been - Protocol Complete - refresh webpage'});</script>";
            
     
               
          
                     
 }
}            
    
                
 ?>
      	
		
	</section>
    
</body>
</html>
