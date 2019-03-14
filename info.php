<?php
require_once 'layout.php';
require_once 'u.php';
?>
<html>
<body onLoad="init()">
    
<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Information Gathering</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>Enter Target Domain or IP</label>
                                                        <input type="text" name="url" id="ur"  >
						</fieldset>
    <fieldset> 
        <p><tr> 
    <td><input type="radio" name="c" value="c0"></td> 
    				<td>Retrieve NetBIOS State</td> 
				</tr> </p>
<p><tr>
<p><tr> 
    <td><input type="radio" name="c" value="c1" checked="true"></td> 
    				<td>Live Host Identification</td> 
				</tr> </p>
   
      <p>   <tr> 
   					<td><input type="radio" name="c" value="c2"></td> 
    				<td>Retrieve netcraft.com information on host</td> 
                                </tr> </p>
<p>   <tr> 
   					<td><input type="radio" name="c" value="c3"></td> 
    				<td>Search for possible email address</td> 
                                </tr> </p>

<p><tr> 
   					<td><input type="radio" name="c" value="c4"></td>
                                        <td>Enumerating all hostnames which Bing has indexed for IP address</td> 
				</tr> </p>
<p><tr> 
   					<td><input type="radio" name="c" value="c5"></td> 
                                        <td>Search URL for Datas(MD5,MySQL,WP (Wordpress),Domain,URL,IP4,IP6,SSN,EMAIL,CCN,Twitter,DOC,EXE,ZIP,IMG)<input type="text" name="data" value="EMAIL" maxlength="30" size="4" style="float: right;width: 10%"></td> 
				</tr> </p>


    </fieldset>

						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start Scanning Now" class="alt_btn" id="submit">
                                   <input type="reset" value="Reset" id="reset"></a>
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    $url=$_POST['url']; 
                   
                    $c=$_POST['c'];
                    $doc=$_POST['doc'];
                    
                    $data=$_POST['data'];
                    
                 $url = trim($url); //remove space from start and end of url
               if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8);
      
                     $url_parts = explode("/", $url);
                     $url = $url_parts[0];
                      
                       
                    
                    
                
               
                
               if($url==''){
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
             
               }
 else 
              
               {
                   echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Started ! results located in the results tab'});</script>";
      
                     require_once 'loading.php';
                      
                       
                    
     
     
                     switch ($c)
     {
                         case c0:
          echo "<p><bRetriving NetBIOS state for  $url</b></p>";
                             shell("");
        shell("nmap -Pn --script nbstat -p 137  $url");
        break;
    
        case c1:
            echo "<p><b>Live Host Identification for  $url</b></p>";
            shell("");
            shell("sudo xprobe2 $url |sed -e '1,19d'");
            break;
        
         
            
         
         case c2:
              echo "<p><b>Retrieving Netcraft.com Info on $url:</b></p>";
                 
                       shell("dmitry -n $url");
                       break;
                   
                         case c3:
                              echo "<p><b>Searching  $url for possible email address</b></p>";
         shell(" dmitry -e $url");
         break;
                         case c4:
                             
          echo "<p><b>Enumerating all hostnames which Bing has indexed for  IP address. of $url:</b></p>";
                                 shell("");
          shell("sudo ./cmd/bing-ip2hosts $url");
          break;
      
                         case c5:
              if ($data!=''){
                 echo "<p><b>Searching $url for $data:</b></p>";
                    
            
              shell("sudo python ./cmd/tekCollect.py -u http://$url -t $data  ");  
              }  else {
                  echo "Hey!Please enter a database  e.g.MD5,MySQL,WP (Wordpress),Domain,URL,IP4,IP6,SSN,EMAIL,CCN,Twitter,DOC,EXE,ZIP,IMG";
              }
            
              
           
             
    
     }
    echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Done ! results located in the results tab'});</script>";
            
     
        
        
         

   
         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finished</h3>
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
