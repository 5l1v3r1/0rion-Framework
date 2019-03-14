<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Ping-Sweep</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
						<fieldset>
							<label>IP Range(Maximum C Class)</label>
                                                        <input type="text" name="url" id="ur" value="192.168.1.0/24 ">
                                                        e.g.. 192.168.1.0/24 
						</fieldset>
    <fieldset>   
        <p><input type="radio" name="c0"  value="c1" checked="true">Discover which hosts are up within a range of IP addresses(Ping-Sweep)</p>
        <p><input type="radio" name="c0" value="c2" ></td> Scan network for NetBIOS Name</p>
        
    </fieldset>		
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Start Ping-Sweep" class="alt_btn" id="submit">
                                   <input type="reset" value="Reset" >
				</div>
			</footer>
		</article><!-- end of post new article -->
                
               <?php
               
                if(isset($_POST['submit']))
                {
                    $url=$_POST['url'];
                    $c0=$_POST['c0'];
             if($url==''){
                       echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a URL.Please enter a URL..'});</script>";
                  
               }
 else {
             if(isset($c0)){
                  require_once 'loading.php';
                   switch ($c0)
                   {
                       case c1:
     echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content :'starting ping-sweep using nmap'});</script>";
                  
                       echo "<p><b>Discovering which hosts are up within a range of IP addresses $url:</b></p>";
                       shell("echo 'Wait.........'");
                       shell(" sudo nmap  -sP -T Insane $url|sed -e '1,2d'");
              break;
                       
 case c2:
                           
                      echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content :'Scanning Network $url for NetBIOS Name.Refer Result Section for details'});</script>";
                  
                       echo "<p><b>Scanning Network $url for NetBIOS Name</b></p>";
                          shell("cho 'Wait........'");
                       shell("sudo nbtscan -r $url");
                       
     break;
                   }
                  
    echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content :'Scan Done '});</script>";
                      
                    
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
                   
 }            
                     
     
                
 ?>
                

		
		

		<div class="spacer"></div>
	</section>
</body>
</html>
