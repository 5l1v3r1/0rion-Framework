<a href="https://imgbb.com/"><img src="https://i.ibb.co/crDBVqg/0rion.png" alt="0rion" border="0"></a>

Orion Framework Kali Linux Edition is intended for and was tested on Kali linux
Orion Framework is a recon and attack framework.Orion Framework currently contains one main module "Orion's toolbelt"
There are many other modules in development. Orion's Toolbelt consists of many modules that preform recon for personal,
domain, and network information.

Here is a list of what Orion can preform on the network and domain end of recon: 
 
 ping target

detect operating system

detect service version

do traceroute

udp & tcp port scan

intense scan (no ping)

Target Geolocation

acquire information about the registry and contact names

get http headers and display the transaction

scan target server for dangerous files, outdated versions ... etc

whatweb scan

ssl check

check if domain uses load balancing

web app firewall detection

detect application at given port

preform directory and file check

robots.txt check

dynamic tests

static tests

collect web server and server information

blindelephant scan

scan for netBIOS name

ping sweep

retrieve netBIOS state

live host identification

retrieve netcraft.com information on host

search for possible email addresses

search URL for data (md5 mysql wordpress domain img zip exe ) etc

run the harvester

domain availability checker

page ranker

domain age checker

get alexa rank

generate and test domain typos

whois look up

run automator

dns look up

reverse dns

mx lookup

dns zone transfer

find (SOA) record in a zone file

brute force DNS

dns record viewer

trace a chain of dns servers to the source

link extractor and checker

     !!NMAP MODULE UPDATE!!
     
     Added to nmap module:
     
     Kracken scan
     Retrieve information from a listening acarsd daemon
     Brute force Apple Filing Protocol
     brute force Apache JServ protocol
     Detect the All-Seeing Eye service
     brute force BackOrifice service
     brute force Cassandra database
     brute force a CESL login screen
     brute force CVS pserver authentication
     brute force DelugeRPC daemon
     Detect & exploit a remote code execution vuln in the distributed compiler daemon distcc
     brute force the Lotus Domino Console
     brute force an iPhoto Library
     brute force databases supporting the IBM DB2 protocol such as Informix, DB2 and Derby
     Firewalk
     Detect a vuln in netfilter and other firewalls that use helpers to dynamically open ports for protocols such as ftp and sip
     brute force FTP servers
     Test for  ProFTPD 1.3.3c backdoor
     Test for vsFTPd 2.3.4 backdoor
     Check for a stack-based buffer overflow in ProFTPD server (CVE-2010-4221)
     exploit an authentication bypass vulnerability in a Adobe Coldfusion Server
     brute force password auditing against http basic, digest and ntlm authentication
     Detect a firmware backdoor on some D-Link routers
     Exploit insecure file upload forms in web applications using various techniques
     brute force http form-based authentication
     Detect Huawei modems models vulnerable to a remote credential and information disclosure vulnerability
     Check for a vulnerability in IIS 5.1/6.0 that allows arbitrary users to access secured WebDAV folders
     brute force Joomla web CMS installations
     brute force HTTP proxy server
     Attempt to exploit the shellshock vulnerability in web applications
     Check for a path-traversal vulnerability in VMWare ESX, ESXi, and Server (CVE-2009-3733)
     Exploit a file disclosure vulnerability in Webmin (CVE-2006-3392)
     Detect whether the specified URL is vulnerable to the Apache Struts Remote Code Execution Vulnerability
     Detect if a system is vulnerable to the INTEL-SA-00075 privilege escalation vulnerability
     Attempt to detect a privilege escalation vuln in Wordpress that allows unauthenticated users to inject content in posts
     Detect the RomPager 4.07 Misfortune Cookie vulnerability by safely exploiting it
     test a vuln in WNR 1000 series routers that allows an you to retrieve administrator credentials with the router interface
     brute force Wordpress CMS/blog installations
     brute force password auditing against the Asterisk IAX2 protocol
     brute force IMAP servers using either LOGIN, PLAIN, CRAM-MD5, DIGEST-MD5 or NTLM authentication
     brute force password auditing against IBM Informix Dynamic Server
     brute force password auditing against IPMI RPC server
     brute force IRC servers
     brute force IRC servers supporting SASL authentication
     brute force iSCSI targets
     brute force Couchbase Membase servers
     brute force Mikrotik RouterOS devices with the API RouterOS interface enabled
     brute force RPA Tech Mobile Mouse servers
     brute force MongoDB database
     brute force MySQL database
     Attempt to bypass authentication in MySQL and MariaDB servers by exploiting CVE2012-2122
     brute force Netbus backdoor service
     brute force an Nping Echo service
     brute force the pcAnywhere remote access protocol
     brute force pgsql
     brute force classic UNIX rexec service 
     brute force password auditing against the classic UNIX rlogin service
     brute force WinPcap Remote Capture Daemon
     brute force Session Initiation Protocol
     brute force SMB
     Check if target machines are vulnerable to the arbitrary shared library load vulnerability CVE-2017-7494
     brute force SMTP servers using either LOGIN, PLAIN, CRAM-MD5, DIGEST-MD5 or NTLM authentication
     brute force password auditing against SOCKS 5 proxy servers
     Detect if target is vulnerable to the OpenSSL Heartbleed bug (CVE-2014-0160)
     Detect whether the target is vulnerable to the F5 Ticketbleed bug (CVE-2016-9244)
     brute force TSO account
     brute force VMWare Authentication Daemon
     brute force VNC servers
     brute force XMPP (Jabber) instant messaging servers
     
     
     
There is also Google Minerva. 
Minerva can be used for both people and network recon. 
Named after Minerva , the goddess of wisdom and strategic warfare. Minerva is a search module for Orion Framework. 
Minerva makes easy utilization of advanced operators with any given search term. 
Each set of results are separately displayed in their own window. 

The toolbelt also has modules for payload and backdoor creation currently for these platforms.

windows

apple

android

java

webshell

debian

pdf

php

Orion's toolbelt also has a DDOS module 

0rion Framework also uses vulnscan ( https://github.com/scipag/vulscan )

\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Included contents required for install
1: Install script (kali-install.sh)

///////////////////////////////////////////////////////////////////////////////////////////////

Install Instructions:

Step 1: chmod the orion directory to 777 with this command
  chmod 777 -R -v "orion directory"

Step 2: move the orion directory to your html directory 

Step 3: Run the install script 

It's that easy

a "server edition" is in the works as well as other modules and a "hacker mode 0rion Framework" hybrid

www.0rion.tk


!UPDATE!
Nikto module added

