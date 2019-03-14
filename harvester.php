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
			<header><h3>The Harvester</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>Enter Domain</label>
                                                        <input type="text" name="url" value="" id="ur">
						</fieldset>
   <fieldset style="width:48%; float:left;">
							<label>Limit the number of results</label>
                                                        <input type="text" name="limit" value="500" style="width:92%;" >
						</fieldset>
   <fieldset style="width:47%; float:right;">  
       <label>Search Engine</label>
       <p><select  style="width:92%;" name="c" value="Google">
            <option value="google">Google</option>
            <option value="linkedin">Linkedin</option>
            <option value="pgp">pgp</option>
            <option value="all">All</option>
            <option value="google_profiles">Google-profiles</option>
            <option value="bing">Bing</option>
            <option value="bing_api">Bing_Api</option>
            <option value="yandex">Yandex</option>
            <option value="people123">People123</option>
            <option value="jigsaw">Jigsaw</option>
        </select>
   </fieldset>
    <fieldset style=" float:left; width: 100%">
    <p><h3>Do You Want Me Include any of these Modules?</h3></p>



<p><tr> 
   					<td><input type="checkbox" name="c2"></td> 
    				<td>Verify host name via dns resolution and search for virtual hosts</td> 
				</tr> </p>
<p><tr> 
   					<td><input type="checkbox" name="c3"></td> 
    				<td>Perform a DNS reverse query on all ranges discovered</td> 
				</tr> </p>

<p><tr> 
   					<td><input type="checkbox" name="c5"></td> 
                                        <td>Perform a DNS TLD expansion discovery</td>
				</tr> </p>

    </fieldset>
        
        
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit">
                                    <a href="harvester.php"><input type="button" value="Reset" id="reset"></a>
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    $url=$_POST['url'];
                    $c=$_POST['c'];
                    $c1=$_POST['c2'];
                    $c2=$_POST['c3'];
                    
                    $c3=$_POST['c5'];
                    $limit=$_POST['limit'];
                    
                $url = trim($url); //remove space from start and end of domain
                if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8); // remove http:// if included
                if(substr(strtolower($url), 0, 4) == "www.") $url = substr($url, 4);//remove www from domain
               
               
               $url_parts = explode("/", $url);
                     $url = $url_parts[0];
              
               if($url==''){
                    
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
             
               }
 else {
             
      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Starting theHarvester!Full results in the results tab'});</script>";
       
                   if(isset($c)){  
                       
                       require_once 'loading.php';
                       
                       if(isset($c1)&&isset($c2)&&isset($c3)){
                           shell("");
                          shell("python ./harvester/theHarvester.py -d $url -l $limit -v -n -t -b $c");
                           
                           
                   }elseif(isset ($c1)&&isset ($c2)){
                       shell("");
shell("python ./harvester/theHarvester.py -d $url -l $limit -v -n  -b $c");
                       
                       
                   }elseif (isset ($c1)&&isset ($c3)) {
                       shell("");
shell("sudo python ./harvester/theHarvester.py -d $url -l $limit -v -t -b $c");
                
                       
                       
            }elseif (isset ($c2)&&isset ($c3)) {
                shell("");
shell("python ./harvester/theHarvester.py -d $url -l $limit -n -t -b $c");
                
                
            }
                       
                       
   elseif (isset($c1)) {
       shell("");
shell("python ./harvester/theHarvester.py -d $url -l $limit -v   -b $c");
           }
            elseif (isset ($c2)) {
                shell("");
               shell("python ./harvester/theHarvester.py -d $url -l $limit -n   -b $c");
                
                
            } 
           
        elseif (isset ($c3)) {
            shell("");
 shell("python ./harvester/theHarvester.py -d $url -l $limit -t   -b $c");
            
            }  else {
                shell("");
                shell("python ./harvester/theHarvester.py -d $url -l $limit  -b $c");
                
            }
                       
                   }
        
        
       echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Info Harvesting Complete!Full results in the results tab'});</script>";
            
         
   
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
