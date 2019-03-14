<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>BlindElephant Scan</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>

							<label>Enter Domain</label>
                                                        <input type="text" name="url" value=""  id="ur">
						</fieldset>
    <fieldset style="width:47%">  
        <label>Web Application</label>
   <select name="c" value="Drupal">
            <option value="drupal"> Drupal</option>
            <option value="joomla">Joomla</option>
            <option value="liferay">Liferay</option>
            <option value="mediawiki">Mediawiki</option>
            <option value="movabletype">movabletype</option>
            <option value="oscommerce">oscommerce</option>
            <option value="phpbb">phpbb</option>
            <option value="phpmyadmin">phpmyadmin</option>
            <option value="phpnuke">phpnuke</option>
            <option value="spip">spip</option>
            <option value="tikiwiki">tikiwiki</option>
            <option value="twiki">twiki</option>
            <option value="wordpress">wordpress</option>
        </select></p>
    </fieldset>
    <fieldset style ="float: left;width: 47%">
        <legend><label>No Web App Info On Target?</label></legend><input type="checkbox" name="check">Guess Application</p>
    </fieldset>
        
        
        
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start Now" class="alt_btn" id="submit">
                                    <a href="harvester.php"><input type="button" value="Reset" id="reset"></a>
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    $url=$_POST['url'];
                    $c=$_POST['c'];
                    $check=$_POST['check'];

                    
                
               
               
               if($url==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL to continue..'});</script>";
              }
               
 else {
      
      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'BlindElephant scan for $url ! Please refer to the results tab after this '});</script>";
                   require_once 'loading.php';
                   if (isset($check))
                   {
                       echo "<p><b>Guessing the name of CMS</b></p>";
                       shell(" BlindElephant.py $url guess");
                   }
                 else {
    shell("BlindElephant.py $url $c");
             
                  
                   }


        
        echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'BlindElephant Scan ! Complete results in result tab'});</script>";
            
     
        
         
   
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Thank You!</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Success </h4>
                 
 ';
         
 }
               
 }            
                     
    
                
 ?>
                

		<div class="spacer"></div>
	</section>
</body>
</html>
