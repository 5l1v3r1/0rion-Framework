<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">
		
		<h4 class="alert_info">Orion's Tool Belt</h4>
		
		
		
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Google Minerva</h3></header>
				<div class="module_content">
                                    <script type="text/javascript">
                                    function do_google_search(type) 
                        {
                            if(document.getElementById('p1').value.length == 0) {
                                alert_element('p1', 'This field must not be empty');
                                return;
                            }
                            site = document.getElementById('p1').value;
                            url = 'https://www.google.com/search?q=';
                            url += site;
                            switch(type)
                            {
                                case 1:
                                    url += '+intitle:index.of';
                                    break;
                                case 2:
                                    url += '+ext:xml+|+ext:conf+|+ext:cnf+|+ext:reg+|+ext:inf+|+ext:rdp+|+ext:cfg+|+ext:txt+|+ext:ora+|+ext:ini';
                                    break;
                                case 3:
                                    url += '+ext:sql+|+ext:dbf+|+ext:mdb';
                                    break;
                                case 4:
                                    url += '+ext:log';
                                    break;
                                case 5:
                                    url += '+ext:bkf+|+ext:bkp+|+ext:bak+|+ext:old+|+ext:backup';
                                    break;
                                case 6:
                                    url += '+inurl:login';
                                    break;
                                case 7:
                                    url += '+intext:"sql+syntax+near"+|+intext:"syntax+error+has+occured"+|+intext:"incorrect+syntax+near"+|+intext:"unexpected+end+of+SQL+command"+|+intext:"Warning:+mysql_connect()"+|+intext:"Warning:+mysql_query()"+|+intext:"Warning:+pg_connect()"';
                                    break;
                                case 8:
                                    url += '+ext:doc+|+ext:docx+|+ext:odt+|+ext:pdf+|+ext:rtf+|+ext:sxw+|+ext:psw+|+ext:ppt+|+ext:pptx+|+ext:pps+|+ext:cvs';
                                    break;
                                case 9:
                                    url += '+ext:php+intitle:phpinfo+"published+by+the+PHP+Group"';
                                    break;
                                case 10:
                                    url += '+site:';
                                    break;
                                case 11:
                                    url += '+allintext:';
                                    break;
                                case 12:
                                    url += '+inurl:';
                                    break;
                                case 13:
                                    url += '+filetype:pdf+|+filetype:ps+|+filetype:epub+|+filetype:wk1+|+filetype:rtf+|+filetype:wk2+|+filetype:wk3+|+filetype:wk4+|+filetype:wk5+|+filetype:wki+|+filetype:wks+|+filetype:wku+|+filetype:lwp+|+filetype:mw+|+filetype:xls+|+filetype:ppt+|+filetype:doc+|+filetype:wps+|+filetype:wdb+|+filetype:wri+|+filetype:swf+|+filetype:ans+|+filetype:txt+|+filetype:md';
                                    break;
                                case 14:
                                    url += '+link:';
                                    break;
                                case 15:
                                    url += '+cache:';
                                    break;
                                case 16:
                                    url += '+numrange:';
                                    break;
                                case 17:
                                    url += '+related:';
                                    break;
                                case 18:
                                    url += '+group:';
                                    break;
                                case 19:
                                    url += '+phonebook:';
                                    break;
                                case 20:
                                    url += '+inurl:"/irj/go/km/docs/"';
                                    break;
                                case 21:
                                    url += '+inurl:apspassword';
                                    break;

                                case 22:
                                    url += '+filetype:pub "ssh-rsa"';
                                    break;

                                case 23:
                                    url += '+filetype:doc "Answer Key"';
                                    break;

                                case 24:
                                    url += '+inurl:"ai1wm-backups"';
                                    break;
                            }
                            window.open(url,'',                         'scrollbars=yes,menubar=no,height=600,width=800,resizable=yes,toolbar=yes,menubar=no,location=no,status=no');

                           
                        }
                    </script>
                    <fieldset>
                        <label>Minerva Search:</label>
                        <p><input id="p1" name="target domain" value="" type="text"></p>
                    </fieldset>
                    <fieldset>
                        <p style="margin-left: 4cm">Search with intitle:index.of:
                            <a href="" onclick="do_google_search(1)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
                    
                    
                        <p style="margin-left: 4cm">Search for configuration files:
                       
                            <a href="" onclick="do_google_search(2)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
                    
                        
                        <p style="margin-left: 4cm"> Search for database files:
                        
                            <a href="" onclick="do_google_search(3)"><v style="float:right;margin-right:8cm">Search</v></a>
                            </p>
                   
                            <p  style="margin-left: 4cm">Search for log files:
                        
                            <a  href=""  onclick="do_google_search(4)"><v style="float:right;margin-right:8cm">Search</v></a>
                        
                    </p>
                   <p style="margin-left: 4cm"> Search for backup and old files:
                        
                            <a href="" onclick="do_google_search(5)"><v style="float:right;margin-right:8cm">Search</v></a>
                       </p>
                       <p style="margin-left: 4cm">Search for login pages:
                        
                            <a href="" onclick="do_google_search(6)"><v style="float:right;margin-right:8cm">Search</v></a>
                       </p>
                       
                       <p style="margin-left: 4cm">Search for SQL errors:
                        
                            <a href="" onclick="do_google_search(7)"><v style="float:right;margin-right:8cm">Search</v></a>
                       </p>
                       <p style="margin-left: 4cm">Search for publicly exposed documents:
                        
                            <a href="" onclick="do_google_search(8)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
                        <p style="margin-left: 4cm">Search for phpinfo():
                        
                            <a href="" onclick="do_google_search(9)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search Target Domain:
                            <a href="" onclick="do_google_search(10)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
             
                       <p style="margin-left: 4cm">Search with allintext:
                            <a href="" onclick="do_google_search(11)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search with inurl:
                            <a href="" onclick="do_google_search(12)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search pdf's epub's & Whitepapers:
                            <a href="" onclick="do_google_search(13)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search Target Domain or Server Name with link:
                            <a href="" onclick="do_google_search(14)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
      
                        <p style="margin-left: 4cm">Search Cached Web Pages:
                            <a href="" onclick="do_google_search(15)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search with numrange Operator:
                            <a href="" onclick="do_google_search(16)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
 
                        <p style="margin-left: 4cm">Search for Pages Related to Target:
                            <a href="" onclick="do_google_search(17)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search Group Titles:
                            <a href="" onclick="do_google_search(18)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>
 
                        <p style="margin-left: 4cm">Search Phone Listings:
                            <a href="" onclick="do_google_search(19)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search for Sensitive Documents:
                            <a href="" onclick="do_google_search(20)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search for Credentials:
                            <a href="" onclick="do_google_search(21)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search for ssh-rsa keys and info:
                            <a href="" onclick="do_google_search(22)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search for answer keys:
                            <a href="" onclick="do_google_search(23)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>

                        <p style="margin-left: 4cm">Search for backups:
                            <a href="" onclick="do_google_search(24)"><v style="float:right;margin-right:8cm">Search</v></a>
                        </p>




                    </fieldset>
                    
       
    
        
   
						
		
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
                                    
				</div>
			</footer>
		</article><!-- end of post new article -->
                
              

 
		

		<div class="spacer"></div>
	</section>
</body>
</html>
