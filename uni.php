<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Web Vuln Scan Using uniscan</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Target:</legend>
        <label for="ur">URL:</label><input id="ur" type="text" name="url" value="http://www.karunya.edu/" />
</fieldset>

    <fieldset>
        <legend>Scan Options</legend>
		<p><input  type="checkbox" name="options[]" value=" -q" checked="checked" /> Directory Check</p>
		<p><input  type="checkbox" name="options[]" value=" -w" checked="checked" /> File Check</p>
		<p><input  type="checkbox" name="options[]" value=" -e" checked="checked" /> /robots.txt Check</p>
		<p><input  type="checkbox" name="options[]" value=" -d" checked="checked" /> Dynamic Tests</p>
		<p><input  type="checkbox" name="options[]" value=" -s" checked="checked" /> Static Tests</p>
		<p><input  type="checkbox" name="options[]" value=" -r" checked="checked" /> Stress Tests</p>
		<p><input  type="checkbox" name="options[]" value=" -g" checked="checked" /> Web Server Information</p>
		<p><input  type="checkbox" name="options[]" value=" -j" checked="checked" /> Server Information</p>
       </fieldset>
        
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit">
                                    <input type="reset" value="Reset" id="reset"></a>
</form>
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
              if(isset($_POST['submit'])){
               $url = $_POST['url'];
require_once 'loading.php';
 if($url==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
              }
               
 else {
  	if(preg_match("#;|\||&|%#", $url)){ die("Bad, very bad, this characters are not accepted: ; | & %");}
	
echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Uniscan for $url !Full results in the results tab'});</script>";
          
	foreach ($_POST['options'] as $key => $value) {
		if(preg_match("#;|\||&|%#", $value)){
			die("Bad, very bad, this characters are not accepted: ; | & %");
		}
$str.=$value;

		
	}
shell("echo 'Starting uniscan..'");
shell("sudo uniscan -b $str -u  $url|sed -e '1,8d'");
	
      
   
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finished</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Success </h4>
                 
 ';
         
      
        echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Scanning Done !Full results in the results tab'});</script>";
            
     
        
               
                     
 }
}            
    
                
 ?>
   
		
		
		<div class="spacer"></div>
	</section>
</body>
</html>
