<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		<div class="clear"></div>
		
		<article class="module width_full">
                    <header><h3>Web Scanner</h3></header>
			<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Target:</legend>
        <label for="ur">URL:</label><input id="ur" type="text" name="url" value="" />
</fieldset>			
    <fieldset>          
        <legend>Scan Options</legend>
        <p> <input type="checkbox" name="c1" > GET HTTP headers and display the transaction</p>
        <p> <input type="checkbox" name="c2" checked="true"> Scan web server for dangerous Files,Outdated Versions... etc </p>
        <p> <input type="checkbox" name="c3" > What Web Scan</p> 
        <p><input type="checkbox" name="c4"> SSL Check:(Enter port number-Default 443)<input type="text" maxlength="30" size="4" name="port0" value="443" style="float:right;width:10%"> </p>
        <p> <input type="checkbox" name="c5"> Check if domain uses load balancing </p>
        <p> <input type="checkbox" name="c6"> Web Application Firewall Detection</p
        <p><input type="checkbox" name="c7"> Detect Application at given port:<input type="text" maxlength="30" size="4" name="port" value="80" style="float:right;width:10%"></p>
 </fieldset>			
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start Scanning" class="alt_btn" id="submit">
                                    <input type="reset" value="Reset" id="reset"></a>
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    
                    $url=$_POST['url'];
                    $c1=$_POST['c1'];
                    $c2=$_POST['c2'];
                    $c3=$_POST['c3'];
                    $c4=$_POST['c4'];
                    $c5=$_POST['c5'];
                    $c6=$_POST['c6'];
                    $c7=$_POST['c7'];
                    
                    $port0=$_POST['port0'];
                    $port=$_POST['port'];
                    $url = trim($url); //remove space from start and end of url
               if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8);
      
                     $url_parts = explode("/", $url);
                     $url = $url_parts[0];
                    
                     require_once 'loading.php';     
            if($url==''){
                    echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
                  die("!!!!You Have Not Entered a URL!!!!");
               }
            
            if(isset($c1)||isset($c2)||isset($c3)||isset($c4)||isset($c5)||isset($c6)||isset($c7))
            {
                 
                           if(isset($c1)){
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Getting HTTP Header and Displaying Transactions for $url'});</script>";
                  
                            echo "<p><b>Getting HTTP Header and Displaying Transactions for $url:</b></p>";
                       shell(" siege  -g $url");
                        
                           }
                           if(isset($c2))
                           {
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Nikto Scanner on $url..See details in Results tab'});</script>";
                  
                            echo "<p><b>Scanning web server on $url for dangerous Files,Outdated Versions... etc:</b></p>";
                            shell("echo 'Starting......'");
                            shell(" nikto -host $url|sed -e '1,1d'");
                           
                           }
                           if(isset($c3)){
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Whatweb for  $url..See details in Results tab'});</script>";
                               echo "<p><b>Whatweb Scan Started for $url:</b></p>";
                               shell(" whatweb -v  $url");
                               
                           }
             
                           if(isset($c4)){
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Testing SSL configuration for $url..See details in Results tab'});</script>";
                               echo "<p><b> SSL-check  for $url:</b></p>";
                               shell(" sslyze $url:$port0 |sed -e '1,11d'");
                               
                           }
                           if(isset($c5)){
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Checking  if $url uses load balancing..See details in Results tab'});</script>";
                               echo "<p><b>Checking  if $url uses load balancing</b></p>";
                               shell("lbd $url|sed -e '1,3d'");
                               
                           }
                           if(isset($c6)){
                               echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Detecting firewall for $url..See details in Results tab'});</script>";
                               echo "<p><b>Detecting firewall for  $url :</b></p>";
                               shell("wafw00f $url |sed -e '1,13d'");
                               
               
                           }
                           if(isset($c7)){
                              echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Detecting Application @ $port on  $url..See details in Results tab'});</script>";
                              echo "<p><b>Detecting Application at port  $port on $url  :</b></p>";
                              shell("sudo amap -A $url $port|grep 'Protocol\|Unidentified'");
                             
                           }
echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'Scanning Done for $url..See details in Results tab'});</script>";
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finished</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Success </h4>
                 
            ';}
 else {
     echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : '!!!!You have not selected any option!!!!'});</script>";
                  
                die("!!!!You Have Not Selected any option!!!!");
            }
 }
         
  
             
 ?>
                
		<div class="spacer"></div>
	</section>
</body>
</html>
