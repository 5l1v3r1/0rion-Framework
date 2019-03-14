<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Orion Framework</title>
       	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
        <link media="screen" href="dlgs/jquery.msg.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
  
        <script type="text/javascript" src="dlgs/jquery.center.min.js"></script>
        <script type="text/javascript" src="dlgs/jquery.msg.js"></script>

	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
       
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });


</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('body').hide().slideUp ("slow").toggle('slide','swing');


    });
</script>

</head>


<body  onload="dvProgress.style.display = 'none'; ">

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Orion Framework</a></h1>
                        <h2 class="section_title">KALI LINUX EDITION</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
                   
			<p>Logged in as <?php echo get_current_user(); ?></p>
			 <a class="logout_user" href="#" title=""></a> 
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Orion Framework</a> <div class="breadcrumb_divider"></div> <a class="current">Kali Linux Edition</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		
		<hr/>
		<h3 >Scanning</h3>
		<ul class="toggle">
                    <li class="icn_settings"><a href="index.php">Nmap Scanner Menu</a></li>
			<li class="icn_security"><a href="vuln.php">Web Scanner</a></li>
                     <li class="icn_exploit"><a href="uni.php">URL Fuzzer</a></li>
                     <li class="icn_security"><a href="cms.php">BlindElephant Scan</a></li>
			<li class="icn_settings"><a href="sweep.php">Ping Sweep</a></li>
                       
                        
		</ul>
                <h3>Reconnaissance</h3>
                <ul class="toggle">
                    <li class="icn_security"><a href="info.php">Domain Info gathering</a></li>
			<li class="icn_security"><a href="harvester.php">TheHarvester</a></li>
                        <li class="icn_minerva"><a href="google.php">Google Minerva</a></li>
                        <li class="icn_categories"><a href="dmtool.php">Additional Domain Tools</a></li>
                         
                </ul>
               
                <h3>Payload Generation</h3>
                <ul class="toggle">
                    <li class="icn_exploit"><a href="payload.php">Quick Payload</a></li>
                    <li class="icn_exploit"><a href="win.php">Windows OS</a></li>
			
                </ul>
                
               
               
<h3> Backdoor Creation</h3>
		<ul class="toggle">
                    <li class="icn_exploit"><a href="exe.php">Backdooring exe</a></li>
                    <li class="icn_exploit"><a href="deb.php">Debian package backdoor</a></li>
                    <li class="icn_exploit"><a href="check.php">PDF Backdoor</a></li>
                    <li class="icn_exploit"><a href="phpbackdoor.php">PHP Backdoor</a></li>
                        </ul>
 
                

		<h3>Network Tools</h3>
		<ul class="toggle">
			<li class="icn_security"><a href="dns.php">DNS Queries</a></li>
                        <li class="icn_categories"><a href="web.php">Web Tools</a></li>
                        <li class="icn_categories"><a href="net.php">Net Tools</a></li>
                     
		</ul>

	
                <h3>Additional Tools</h3>
                <ul class="toggle">
                   
			

                        <li class="icn_ddos"><a href="ddos.html" target="_blank">Orion DDOS</a></li>

		
                         
                </ul>

		
                
           
		<footer>
			
		</footer>
	</aside><!-- end of sidebar -->


</body>

</html>
