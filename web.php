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
			<header><h3>Web Tools</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>Enter the URL</label>
							<input type="text" name="url" id="ur" >
                                                        

                                                </fieldset>
    <fieldset>
    <p> <tr> 
          <td><input type="radio" name="c" value="c1"></td> 
    				<td>Get HTTP Header</td> 
    </tr></p> 
      
<p>  <tr> 
          <td><input type="radio" name="c" value="c2"></td> 
          <td>Link Extractor</td> </tr></p>
                                <p>  <tr> 
                                    <td><input type="radio" name="c" value="c3" checked="true"></td> 
          <td>Website Link Checker</td> </tr></p>

    </fieldset>			
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit">
                                    <a href="web.php"><input type="button" value="Reset" id="reset"></a>
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
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Getting HTTP Header!refer to the results tab'});</script>";
            
                   echo "<p><b>Getting HTTP Header on $url</b></p>";
                  shell("sudo curl -I $url");
                                     
 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'See HTTP Header details for $url in the Results tab'});</script>";
                 
                  break;
              case c2:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Dumping all the links of  $url in your web page!refer to the results tab'});</script>";
            
                 echo "<p><b>Dumping all the links of  $url in your web page</b></p>";
                  shell(" lynx -dump $url ");
                                     
 echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Links dumped from $url to your result tab'});</script>";
                  break;
             
              case c3:
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Checking link status on $url !Refer to the Results tab'});</script>";
            
                  require 'microLink.php';
                  echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Done!refer to the results tab'});</script>";
            
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
