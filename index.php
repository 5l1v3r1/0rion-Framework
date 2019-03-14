<?php
require_once 'layout.php';
require_once 'u.php';
?>
   
<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Nmap Scan</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Target:</legend>
                <label> URL:</label>e.g.. www.target.com / 98.XX.XXX.62 / 98.XX.XXX.62/24</p><input id="ur" type="text" name="url" value="" />
</fieldset>

    <fieldset>
        <legend>Scan Options</legend>
		<p><input type="checkbox" name="options[]" value=""  />Ping Target To Check if its Alive</p>
		<p><input  type="checkbox" name="options[]" value=" -O --osscan-guess " checked="checked" />Detect Operating System</p>
		<p><input  type="checkbox" name="options[]" value=" -sV " />Detect Service Version</p>
		<p><input  type="checkbox" name="options[]" value=" --traceroute "  /> Do Traceroute</p>
		<p><input  type="checkbox" name="options[]" value=" -sU "  /> UDP Port Scan</p>
		<p><input  type="checkbox" name="options[]" value=" -p 1-65535 "  /> TCP Port Scan</p>
		<p><input  type="checkbox" name="options[]" value=" -T4 -A -Pn "  /> Intense Scan No Ping</p>
		<p><input  type="checkbox" name="options[]" value=" --script ip-geolocation-* " />Target Geolocation</p>
                <p><input  type="checkbox" name="options[]" value=" --script whois " />Information about the registry and contact names</p>
               
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script vulscan/vulscan.nse " />Vulnscan  - Use nmap vulnerability scan script</p>
                 
       </fieldset>
        

				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit" >
                                    <input type="reset" value="Reset" id="reset"> </a>
				</div>
			</footer>
                        
		</article><!-- end of post new article -->
               

                <?php
              if(isset($_POST['submit'])){
               $url = $_POST['url'];

 if($url==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a TARGET URL.Please enter a TARGET URL..'});</script>";
              }
               
 else {
      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Doing Nmap Scan for $url ! results located in the result section'});</script>";
         
      require_once 'loading.php';
	if(preg_match("#;|\||&|%#", $url)){ die("Bad, very bad, this characters are not accepted: ; | & %");}
	

	foreach ($_POST['options'] as $key => $value) {
		if(preg_match("#;|\||&|%#", $value)){
			die("Bad, very bad, this characters are not accepted: ; | & %");
		}
$str.=$value;

		
	}
$url = trim($url); //remove space from start and end of url
               if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8);
      
                     $url_parts = explode("/", $url);
                     $url = $url_parts[0];
                    
shell("sudo nmap $str $url");
	
         
   
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finished</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Complete </h4>
                 
 ';
     
        echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Nmap Done ! results located in the result tab'});</script>";
            
     
               
          
                     
 }
}            
    
                
 ?>
      	
		
	</section>
    
</body>
</html>
