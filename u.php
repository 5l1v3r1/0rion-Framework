<?php


function shell($cmd){
 
 header('Content-Encoding: none;');

        set_time_limit(0);

        $handle = popen("$cmd", "r");

        if (ob_get_level() == 0) 
            ob_start();

        while(!feof($handle)) {

            $buffer = fgets($handle);
            $buffer = trim(htmlspecialchars($buffer));

            echo $buffer . "<br />";

            echo str_pad('', 4096);    

            ob_flush();
            flush();

            sleep(1);
        }

        pclose($handle);

        ob_end_flush();

}

function getLocation($ip)
{ 
 $NetGeoURL = "http://netgeo.caida.org/perl/netgeo.cgi?target=".$ip; 
  
 if($NetGeoFP = fopen($NetGeoURL,r))
 { 
         ob_start();
 
         fpassthru($NetGeoFP);
         $NetGeoHTML = ob_get_contents();
         ob_end_clean();

 fclose($NetGeoFP);
 }
 preg_match ("/LAT:(.*)/i", $NetGeoHTML, $temp) or die("Could not find element LAT");
 $location[0] = $temp[1];
 preg_match ("/LONG:(.*)/i", $NetGeoHTML, $temp) or die("Could not find element LONG");
 $location[1] = $temp[1];

 return $location;
 }

  

  

  
?>
