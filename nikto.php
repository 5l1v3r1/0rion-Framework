 
<?php
require_once 'layout.php';
require_once 'u.php';
?>
   
<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Nikto Scan</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Target:</legend>
                <label> URL:</label>e.g.. www.target.com / 98.XX.XXX.62 / 98.XX.XXX.62/24</p><input id="ur" type="text" name="url" value="" />
</fieldset>

    <fieldset>
        <legend>Scan Options</legend>
		<p><input type="checkbox" name="options[]" value=" -dbcheck "  />Check database and other key files for syntax errors</p>
		<p><input  type="checkbox" name="options[]" value=" -Cgidirs all " />Scan all CGI directories</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -V " />Use verbose display</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -1 "  />Display redirects</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -2 "  />Display cookies recieved</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -3 "  />Display all 200/OK responses</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -4 "  />Display URLs which require authentication</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -D " />Display Debug output</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -E " />Display all HTTP errors</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -P " />Print progress to STDOUT</p>
		<p><input  type="checkbox" name="options[]" value=" -Display -S " />Scrub output of IPs and hostnames</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -1 " />Use Random URI encoding (non-UTF8)</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -2 " />Directory self-reference (/./)</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -3 " /> Use Premature URL ending</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -4 " />Prepend long random string</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -5 " />Use Fake parameter</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -6 " />Use TAB as request spacer</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -7 " />Change the case of the URL</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -8 " />Use Windows directory separator (\)</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -A " />Use a carriage return (0x0d) as a request spacer</p>
		<p><input  type="checkbox" name="options[]" value=" -evasion -B " />Use binary value 0x0b as a request spacer</p>
		
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
                    
shell("sudo nikto -C all -nointeractive -host $url $str");
	
         
   
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
