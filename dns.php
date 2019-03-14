<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>DNS Queries</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>Enter Target Domain/IP</label>
							<input type="text" name="url" id="ur" >
                                                        
						</fieldset>
    <fieldset>
      <tr> 
          <td><input type="radio" name="c" value="c1" checked="true"></td> 
    				<td>DNS Lookup</td> 
				</tr> 
                                <p   <tr> 
   					<td><input type="radio" name="c" value="c2"></td> 
    				<td>Reverse DNS</td> 
                                </tr> </p>
<p   <tr> 
   					<td><input type="radio" name="c" value="c3"></td> 
    				<td>Whois Lookup</td> 
                                </tr> </p>
<p   <tr> 
    <td><input type="radio" name="c" value="c4"></td> 
    				<td>MX Lookup</td> 
                              
                                </tr> </p>

    <td><input type="radio" name="c" value="c5"></td> 
    				<td>DNS Zone Transfer</td> 
                                </tr> </p>
<p   <tr> 
    <td><input type="radio" name="c" value="c6"></td> 
    				<td>Find the Status Of Authority(SOA) record in a zone file</td> 
                                </tr> </p>
<p   <tr> 
    <td><input type="radio" name="c" value="c7"></td> 
    				<td>Brute Force DNS</td> 
                                </tr> </p>
    <p   <tr> 
    <td><input type="radio" name="c" value="c8"></td> 
    				<td>DNS Record Viewer</td> 
                              
                                </tr> </p>
<p   <tr> 
    <p   <tr> 
    <td><input type="radio" name="c" value="c9"></td> 
    				<td>Trace a chain of DNS Server to the source</td> 
                                </tr> </p>

    </fieldset>				
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start DNS Test" class="alt_btn" id="submit">
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
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'DNS Lookup Started for $url!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>DNS Lookup Started for $url </b></p> ";
             
             shell(" dig $url ANY +noall +answer  | sed -e '1,3d' ");
                  break;
              case c2:
                 if(filter_var($url, FILTER_VALIDATE_IP))
                 {
                     echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Reverse DNS for $url!Please refer to the results tab after this'});</script>";
            
                      echo "<p><b>Reverse DNS for $url</b></p>"; 
                  shell("dig +noall +answer -x $url ");
                 }else{
                     echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : '$url is not a valid IP'});</script>";
                     echo "$url is not a valid IP";
                 }
               
                  break;
              case c3:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Whois Lookup for $url!Please refer to the results tab after this'});</script>";
            
                  if(filter_var($url, FILTER_VALIDATE_IP)){
                      echo "<p><b>Whois Lookup for $url </b></p>";
                  shell("sudo dmitry -i $url "); 
                  }
 else {
      
                      echo "<p><b>Whois Lookup for $url </b></p>";
                  shell("sudo dmitry -w $url  "); 
                  
 }
                  
                  break;
              case c4:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Mail Exachange Loopkup(MX Lookup) Started for $url!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>Mail Exachange Loopkup(MX Lookup) Started for $url</b></p>";
                  shell(" host -t MX $url ");
                  break;
              case c5:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'DNS Zone Transfer Starting for $url!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>DNS Zone Transfer Starting for $url </b></p>";
              
                  shell("sudo dig $url AXFR|sed -e '1,3d'");
                  break;
              case c6:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Execution Started!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>Finding the Status Of Authority(SOA) record in a zone file for  $url</b></p>";
                  shell("dig +nocmd $url any +multiline +noall +answer");
                  break;
              case c7:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Execution Started!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>Bruteforcing DNS-Records for Domain $url </b></p>";
                 shell("sudo nmap -Pn -p 80 --script dns-brute $url|sed -e '1,4d'");
                 break;
             case c8:
                 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Viewing DNS Records for $url!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>Viewing DNS Records for $url </b></p>";
                 shell("host -t any $url");
                 break;
             
             case c9:
                 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Tracing a chain of DNS Server to the source!Please refer to the results tab after this'});</script>";
            
                  echo "<p><b>Tracing a chain of DNS Server to the source </b></p>";
                 shell("dnstracer $url");
                 break;
              

             
          }
  
                   
 }            
                     
         
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
