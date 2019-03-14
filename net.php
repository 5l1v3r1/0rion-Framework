<?php
require_once 'layout.php';
require_once 'u.php';
?>
<html>
    <body onLoad="init()"> 
<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Net Tools</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>Enter the URL</label>
							<input type="text" name="url" id="ur" >
                                                        
						</fieldset>
    <fieldset>
    <p> <tr> 
          <td><input type="radio" name="c" value="c1"></td> 
    				<td>Traceroute </td> 
    </tr></p> 
      
<p>  <tr> 
          <td><input type="radio" name="c" value="c2"></td> 
          <td>Test Ping</td> </tr></p>

						
                                <p>  <tr> 
                                    <td><input type="radio" name="c" value="c3" checked="true"></td> 
                                    <td>ICMP monitoring(fping)</td></tr></p> 
    <p>  <tr> 
          <td><input type="radio" name="c" value="c4"></td> 
          <td>IP Address Geolocation</td> </tr></p>
    <p>  <tr> 
          <td><input type="radio" name="c" value="c5"></td> 
          <td>Reverse IP Lookup</td> </tr></p>
    
    </fieldset>
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit">
                                    <input type="reset" value="Reset" id="reset">
				</div>
                            
			</footer>
                        
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    $url=$_POST['url'];
                    $c=$_POST['c'];
                   
                    $url = trim($url); //remove space from start and end of url
               if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8);
      
                     $url_parts = explode("/", $url);
                     $url = $url_parts[0];
                    
       
               
               if($url==''){
                 echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
                  
               }
 else {
             
      if(isset($c))
      {
          
          require_once 'loading.php';
          switch ($c)
          {
              case c1:
                   echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Traceroute started for  $url!Please refer result section after this message'});</script>";
            
                   echo "<p><b>Traceroute started for  $url</b></p>";
                  shell("mtr --report $url");
                                     
 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Traceroute Done for $url'});</script>";
                 
                  break;
              case c2:
                   echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Ping Test!refer to the results tab'});</script>";
            
                 echo "<p><b>Test Ping</b></p>";
                  shell(" ping -c 5 -R -a $url ");
                                     
 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'ping Done for $url'});</script>";
                  break;
             
        case c3:
                  
              echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'ICMP Monitoring!refer to the results tab'});</script>";
            echo "<p><b>fping for $url</b></p>";
            shell("fping $url && fping -C 8 $url");
                  
              echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'ICMP Monitoring Done!refer to the results tab'});</script>";
                             
        
            break;
              case c4:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Execution Started!refer to the results tab'});</script>";
            
                       echo "<p><b>Getting GeoLocation of target IP $url </b></p> ";
                  shell("python ./cmd/geoedge.py $url|grep 'IP\|Country\|City\|Coordinates'");
                  
                  break;
              case c5:
                 if(filter_var($url, FILTER_VALIDATE_IP))
                 {
                      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : '$url is not a valid URL'});</script>";
            
                     echo "$url is Not a Valid URL";
                      
                 }else{
                      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Execution Started!refer to the results tab'});</script>";
            
                     echo "<p><b>Reverse IP for $url</b></p>"; 
                  shell("host $url");
                
                 }
               
                  break;
          }
  

            
                
                
      echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finshed</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Success </h4>
                 
 ';
      }  
               }
                }
                
 ?>
                

		

		<div class="spacer"></div>
	</section>
</body>
</html>
