<?php
require_once 'layout.php';
require_once 'u.php';
?>

<section id="main" class="column">

		<h4 class="alert_info">Orion's Tool Belt.</h4>




		<div class="clear"></div>

		<article class="module width_full">
			<header><h3>Nmap Module</h3></header>
				<div class="module_content">
<form name="form1" action="" method="post"><fieldset>
		<legend>Target:</legend>
                <label> URL:</label>e.g.. www.target.com / 98.XX.XXX.62 / 98.XX.XXX.62/24</p><input id="ur" type="text" name="url" value="" />
</fieldset>

    <fieldset>
        <legend>Scan Options</legend>
		<p><input type="checkbox" name="options[]" value=""  />Ping Target To Check if its Alive</p>
		<p><input  type="checkbox" name="options[]" value=" -O --osscan-guess " checked="checked" />Detect Operating System</p>
		<p><input  type="checkbox" name="options[]" value=" -sV " />Detect Service Version</p>
		<p><input  type="checkbox" name="options[]" value=" --traceroute "  /> Do Traceroute</p>
		<p><input  type="checkbox" name="options[]" value=" -sU "  /> UDP Port Scan</p>
		<p><input  type="checkbox" name="options[]" value=" -p 1-65535 "  /> TCP Port Scan</p>
		<p><input  type="checkbox" name="options[]" value=" -T4 -A -Pn "  /> Intense Scan No Ping</p>
		<p><input  type="checkbox" name="options[]" value=" --script ip-geolocation-* " />Target Geolocation</p>
                <p><input  type="checkbox" name="options[]" value=" --script whois " />Information about the registry and contact names</p>
                <p><input  type="checkbox" name="options[]" value=" -sS -sV -O -T4 -A -v -Pn -e wlan0 --script acarsd-info,address-info,afp-brute,afp-ls,afp-path-vuln,afp-serverinfo,afp-showmount,ajp-auth,ajp-brute,ajp-headers,ajp-methods,ajp-request,allseeingeye-info,amqp-info,asn-query,auth-owners,auth-spoof,backorifice-brute,backorifice-info,bacnet-info,banner,bitcoin-getaddr,bitcoin-info,bitcoinrpc-info,bittorrent-discovery,bjnp-discover,broadcast-ataoe-discover,broadcast-avahi-dos,broadcast-bjnp-discover,broadcast-db2-discover,broadcast-dhcp-discover,broadcast-dhcp6-discover,broadcast-dns-service-discovery,broadcast-dropbox-listener,broadcast-eigrp-discovery,broadcast-igmp-discovery,broadcast-listener,broadcast-ms-sql-discover,broadcast-netbios-master-browser,broadcast-networker-discover,broadcast-novell-locate,broadcast-ospf2-discover,broadcast-pc-anywhere,broadcast-pc-duo,broadcast-pim-discovery,broadcast-ping,broadcast-pppoe-discover,broadcast-rip-discover,broadcast-ripng-discover,broadcast-sonicwall-discover,broadcast-sybase-asa-discover,broadcast-tellstick-discover,broadcast-upnp-info,broadcast-versant-locate,broadcast-wake-on-lan,broadcast-wpad-discover,broadcast-wsdd-discover,broadcast-xdmcp-discover,cassandra-brute,cassandra-info,cccam-version,cics-enum,cics-info,cics-user-brute,cics-user-enum,citrix-enum-apps-xml,citrix-enum-apps,citrix-enum-servers-xml,citrix-enum-servers,clamav-exec,clock-skew,coap-resources,couchdb-databases,couchdb-stats,creds-summary,cups-info,cups-queue-info,cvs-brute-repository,cvs-brute,daap-get-library,daytime,db2-das-info,dhcp-discover,dict-info,distcc-cve2004-2687,dns-blacklist,dns-brute,dns-cache-snoop,dns-check-zone,dns-client-subnet-scan,dns-ip6-arpa-scan,dns-nsec-enum,dns-nsec3-enum,dns-nsid,dns-random-txid,dns-recursion,dns-service-discovery,dns-srv-enum,dns-update,dns-zeustracker,dns-zone-transfer,docker-version,domcon-brute,domcon-cmd,domino-enum-users,dpap-brute,drda-brute,drda-info,duplicates,eap-info,enip-info,epmd-info,eppc-enum-processes,fcrdns,finger,fingerprint-strings,firewalk,firewall-bypass,flume-master-info,fox-info,freelancer-info,ftp-anon,ftp-bounce,ftp-brute,ftp-libopie,ftp-proftpd-backdoor,ftp-syst,ftp-vsftpd-backdoor,ftp-vuln-cve2010-4221,ganglia-info,giop-info,gkrellm-info,gopher-ls,gpsd-info,hadoop-datanode-info,hadoop-jobtracker-info,hadoop-namenode-info,hadoop-secondary-namenode-info,hadoop-tasktracker-info,hbase-master-info,hbase-region-info,hddtemp-info,hnap-info,hostmap-bfk,hostmap-ip2hosts,hostmap-robtex,http-adobe-coldfusion-apsa1301,http-affiliate-id,http-apache-negotiation,http-apache-server-status,http-aspnet-debug,http-auth-finder,http-auth,http-avaya-ipoffice-users,http-awstatstotals-exec,http-axis2-dir-traversal,http-backup-finder,http-barracuda-dir-traversal,http-brute,http-cakephp-version,http-chrono,http-cisco-anyconnect,http-coldfusion-subzero,http-comments-displayer,http-config-backup,http-cookie-flags,http-cors,http-cross-domain-policy,http-csrf,http-date,http-default-accounts,http-devframework,http-dlink-backdoor,http-dombased-xss,http-domino-enum-passwords,http-drupal-enum-users,http-drupal-enum,http-enum,http-exif-spider,http-favicon,http-feed,http-fetch,http-fileupload-exploiter,http-form-brute,http-frontpage-login,http-generator,http-git,http-gitweb-projects-enum,http-google-malware,http-grep,http-headers,http-huawei-hg5xx-vuln,http-iis-webdav-vuln,http-internal-ip-disclosure,http-joomla-brute,http-litespeed-sourcecode-download,http-ls,http-majordomo2-dir-traversal,http-malware-host,http-mcmp,http-method-tamper,http-methods,http-mobileversion-checker,http-ntlm-info,http-open-proxy,http-open-redirect,http-passwd,http-php-version,http-phpmyadmin-dir-traversal,http-phpself-xss,http-proxy-brute,http-put,http-qnap-nas-info,http-referer-checker,http-rfi-spider,http-robots.txt,http-robtex-reverse-ip,http-robtex-shared-ns,http-security-headers,http-server-header,http-shellshock,http-sitemap-generator,http-slowloris-check,http-sql-injection,http-stored-xss,http-svn-enum,http-svn-info,http-title,http-tplink-dir-traversal,http-trace,http-unsafe-output-escaping,http-userdir-enum,http-vhosts,http-vlcstreamer-ls,http-vmware-path-vuln,http-vuln-cve2006-3392,http-vuln-cve2009-3960,http-vuln-cve2010-0738,http-vuln-cve2010-2861,http-vuln-cve2011-3192,http-vuln-cve2011-3368,http-vuln-cve2012-1823,http-vuln-cve2013-0156,http-vuln-cve2013-6786,http-vuln-cve2013-7091,http-vuln-cve2014-2126,http-vuln-cve2014-2127,http-vuln-cve2014-2128,http-vuln-cve2014-2129,http-vuln-cve2014-8877,http-vuln-cve2015-1427,http-vuln-cve2015-1635,http-vuln-cve2017-1001000,http-vuln-cve2017-5638,http-vuln-cve2017-5689,http-vuln-cve2017-8917,http-vuln-misfortune-cookie,http-vuln-wnr1000-creds,http-waf-detect,http-waf-fingerprint,http-webdav-scan,http-wordpress-brute,http-wordpress-enum,http-wordpress-users,iax2-brute,iax2-version,icap-info,iec-identify,ike-version,imap-brute,imap-capabilities,imap-ntlm-info,impress-remote-discover,informix-brute,informix-query,informix-tables,ip-forwarding,ip-geolocation-geoplugin,ip-geolocation-ipinfodb,ip-geolocation-map-bing,ip-geolocation-map-google,ip-geolocation-map-kml,ip-https-discover,ipidseq,ipmi-brute,ipmi-cipher-zero,ipmi-version,ipv6-multicast-mld-list,ipv6-node-info,ipv6-ra-flood,irc-botnet-channels,irc-brute,irc-info,irc-sasl-brute,irc-unrealircd-backdoor,iscsi-brute,iscsi-info,isns-info,jdwp-exec,jdwp-info,jdwp-inject,jdwp-version,knx-gateway-discover,knx-gateway-info,krb5-enum-users,ldap-brute,ldap-novell-getpass,ldap-rootdse,ldap-search,lexmark-config,llmnr-resolve,lltd-discovery,maxdb-info,mcafee-epo-agent,membase-brute,membase-http-info,memcached-info,metasploit-info,metasploit-msgrpc-brute,metasploit-xmlrpc-brute,mikrotik-routeros-brute,mmouse-brute,mmouse-exec,modbus-discover,mongodb-brute,mongodb-databases,mongodb-info,mqtt-subscribe,mrinfo,ms-sql-brute,ms-sql-config,ms-sql-dac,ms-sql-dump-hashes,ms-sql-empty-password,ms-sql-hasdbaccess,ms-sql-info,ms-sql-ntlm-info,ms-sql-query,ms-sql-tables,ms-sql-xp-cmdshell,msrpc-enum,murmur-version,mysql-audit,mysql-brute,mysql-databases,mysql-dump-hashes,mysql-empty-password,mysql-enum,mysql-info,mysql-query,mysql-users,mysql-variables,mysql-vuln-cve2012-2122,nat-pmp-info,nat-pmp-mapport,nbstat,ncp-enum-users,ncp-serverinfo,ndmp-fs-info,ndmp-version,nessus-brute,nessus-xmlrpc-brute,netbus-auth-bypass,netbus-brute,netbus-info,netbus-version,nexpose-brute,nfs-ls,nfs-showmount,nfs-statfs,nje-node-brute,nje-pass-brute,nntp-ntlm-info,nping-brute,nrpe-enum,ntp-info,ntp-monlist,omp2-brute,omp2-enum-targets,omron-info,openlookup-info,openvas-otp-brute,openwebnet-discovery,oracle-brute-stealth,oracle-brute,oracle-enum-users,oracle-sid-brute,oracle-tns-version,ovs-agent-version,p2p-conficker,path-mtu,pcanywhere-brute,pcworx-info,pgsql-brute,pjl-ready-message,pop3-brute,pop3-capabilities,pop3-ntlm-info,pptp-version,puppet-naivesigning,qconn-exec,qscan,quake1-info,quake3-info,quake3-master-getservers,rdp-enum-encryption,rdp-vuln-ms12-020,realvnc-auth-bypass,redis-brute,redis-info,resolveall,reverse-index,rexec-brute,rfc868-time,riak-http-info,rlogin-brute,rmi-dumpregistry,rmi-vuln-classloader,rpc-grind,rpcap-brute,rpcap-info,rpcinfo,rsync-brute,rsync-list-modules,rtsp-methods,rtsp-url-brute,rusers,s7-info,samba-vuln-cve-2012-1182,sip-brute,sip-call-spoof,sip-enum-users,sip-methods,skypev2-version,smb-brute,smb-double-pulsar-backdoor,smb-enum-domains,smb-enum-groups,smb-enum-processes,smb-enum-sessions,smb-enum-shares,smb-enum-users,smb-flood,smb-ls,smb-mbenum,smb-os-discovery,smb-print-text,smb-protocols,smb-psexec,smb-security-mode,smb-server-stats,smb-system-info,smb-vuln-cve-2017-7494,smb-vuln-cve2009-3103,smb-vuln-ms06-025,smb-vuln-ms07-029,smb-vuln-ms10-054,smb-vuln-ms10-061,smb-vuln-ms17-010,smb-vuln-regsvc-dos,smb2-capabilities,smb2-security-mode,smb2-time,smb2-vuln-uptime,smtp-brute,smtp-commands,smtp-enum-users,smtp-ntlm-info,smtp-open-relay,smtp-strangeport,smtp-vuln-cve2010-4344,smtp-vuln-cve2011-1720,smtp-vuln-cve2011-1764,sniffer-detect,snmp-brute,snmp-hh3c-logins,snmp-info,snmp-interfaces,snmp-ios-config,snmp-netstat,snmp-processes,snmp-sysdescr,snmp-win32-services,snmp-win32-shares,snmp-win32-software,snmp-win32-users,socks-auth-info,socks-brute,socks-open-proxy,ssh-auth-methods,ssh-brute,ssh-hostkey,ssh-publickey-acceptance,ssh-run,ssh2-enum-algos,sshv1,ssl-ccs-injection,ssl-cert-intaddr,ssl-cert,ssl-date,ssl-dh-params,ssl-enum-ciphers,ssl-heartbleed,ssl-known-key,ssl-poodle,sslv2-drown,sslv2,sstp-discover,stun-info,stun-version,stuxnet-detect,supermicro-ipmi-conf,svn-brute,targets-traceroute,teamspeak2-version,telnet-brute,telnet-encryption,telnet-ntlm-info,tftp-enum,tls-nextprotoneg,tls-ticketbleed,tn3270-screen,tor-consensus-checker,traceroute-geolocation,tso-brute,tso-enum,unittest,unusual-port,upnp-info,url-snarf,ventrilo-info,versant-info,vmauthd-brute,vmware-version,vnc-brute,vnc-info,vnc-title,voldemort-info,vtam-enum,vuze-dht-info,wdb-version,weblogic-t3-info,whois-domain,whois-ip,wsdd-discover,x11-access,xdmcp-discover,xmlrpc-methods,xmpp-brute,xmpp-info,vulscan/vulscan.nse " />The Kracken scan - A monsterous Nmap scan</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script vulscan/vulscan.nse " />Vulnscan  - Use nmap vulnerability scan script</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script acarsd-info.nse " />Retrieve information from a listening acarsd daemon</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script afp-brute.nse " />Brute force Apple Filing Protocol</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script ajp-brute.nse " />brute force Apache JServ protocol</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script allseeingeye-info.nse " />Detect the All-Seeing Eye service</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script backorifice-brute.nse " />brute force BackOrifice service</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script cassandra-brute.nse " />brute force Cassandra database</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script cics-user-brute.nse " />brute force a CESL login screen</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script cvs-brute.nse " />brute force CVS pserver authentication</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script deluge-rpc-brute.nse " />brute force DelugeRPC daemon</p>
                <p><input  type="checkbox" name="options[]" value=" -p 3632 --script distcc-cve2004-2687.nse --script-args="distcc-cve2004-2687.cmd='id'" />Detect & exploit a remote code execution vuln in the distributed compiler daemon distcc</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 2050 --script domcon-brute.nse " />brute force the Lotus Domino Console</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script dpap-brute.nse " />brute force an iPhoto Library</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 50000 --script drda-brute.nse " />brute force databases supporting the IBM DB2 protocol such as Informix, DB2 and Derby</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script firewalk.nse --traceroute " />Firewalk</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -Pn -T4 --script firewall-bypass.nse " />Detect a vuln in netfilter and other firewalls that use helpers to dynamically open ports for protocols such as ftp and sip.</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 21 --script ftp-brute.nse " />brute force FTP servers</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 21 --script ftp-proftpd-backdoor.nse " />Test for  ProFTPD 1.3.3c backdoor</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 21 --script ftp-vsftpd-backdoor.nse " />Test for vsFTPd 2.3.4 backdoor</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 21 --script ftp-vuln-cve2010-4221.nse " />Check for a stack-based buffer overflow in ProFTPD server (CVE-2010-4221)</p>
                <p><input  type="checkbox" name="options[]" value=" -sV --script http-adobe-coldfusion-apsa1301.nse " />exploit an authentication bypass vulnerability in a Adobe Coldfusion Server</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 80 --script http-brute.nse " />brute force password auditing against http basic, digest and ntlm authentication</p>
                <p><input  type="checkbox" name="options[]" value=" -sV --script http-dlink-backdoor.nse " />Detect a firmware backdoor on some D-Link routers</p>
                <p><input  type="checkbox" name="options[]" value=" -sV -p 80 --script http-fileupload-exploiter.nse " />Exploit insecure file upload forms in web applications using various techniques</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 80 --script http-form-brute.nse " />brute force http form-based authentication.</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-huawei-hg5xx-vuln.nse " />Detect Huawei modems models vulnerable to a remote credential and information disclosure vulnerability</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 80,8080 --script http-iis-webdav-vuln.nse " />Check for a vulnerability in IIS 5.1/6.0 that allows arbitrary users to access secured WebDAV folders</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-joomla-brute.nse " />brute force Joomla web CMS installations</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 8080 --script http-proxy-brute.nse " />brute force HTTP proxy server</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-shellshock.nse " />Attempt to exploit the shellshock vulnerability in web applications</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p80,443,8222,8333 --script http-vmware-path-vuln.nse " />Check for a path-traversal vulnerability in VMWare ESX, ESXi, and Server (CVE-2009-3733)</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-vuln-cve2006-3392.nse " />Exploit a file disclosure vulnerability in Webmin (CVE-2006-3392)</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 80 --script http-vuln-cve2017-5638.nse " />Detect whether the specified URL is vulnerable to the Apache Struts Remote Code Execution Vulnerability</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 16992 --script http-vuln-cve2017-5689.nse " />Detect if a system is vulnerable to the INTEL-SA-00075 privilege escalation vulnerability</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-vuln-cve2017-1001000.nse " />Attempt to detect a privilege escalation vulnerability in Wordpress that allows unauthenticated users to inject content in posts</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 7547 --script http-vuln-misfortune-cookie.nse " />Detect the RomPager 4.07 Misfortune Cookie vulnerability by safely exploiting it</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 80 --script http-vuln-wnr1000-creds.nse " />test a vulnerability in WNR 1000 series routers that allows an attacker to retrieve administrator credentials with the router interface</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script http-wordpress-brute.nse " />brute force Wordpress CMS/blog installations</p>
                 <p><input  type="checkbox" name="options[]" value=" -sU -p 4569 --script iax2-brute.nse " />brute force password auditing against the Asterisk IAX2 protocol</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 143,993 --script iax2-brute.nse " />brute force IMAP servers using either LOGIN, PLAIN, CRAM-MD5, DIGEST-MD5 or NTLM authentication</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 9088 --script informix-brute.nse " />brute force password auditing against IBM Informix Dynamic Server</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 623 --script ipmi-brute.nse " />brute force password auditing against IPMI RPC server</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 6667 --script irc-brute.nse " />brute force IRC servers</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 6667 --script irc-sasl-brute.nse " />brute force IRC servers supporting SASL authentication</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script iscsi-brute.nse " />brute force iSCSI targets</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 11211 --script membase-brute.nse " />brute force Couchbase Membase servers</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 8728 --script mikrotik-routeros-brute.nse " />brute force Mikrotik RouterOS devices with the API RouterOS interface enabled</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 51010 --script mmouse-brute.nse " />brute force RPA Tech Mobile Mouse servers</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 27017 --script mongodb-brute.nse " />brute force MongoDB database</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script mysql-brute.nse " />brute force MySQL database</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script mysql-vuln-cve2012-2122.nse " />Attempt to bypass authentication in MySQL and MariaDB servers by exploiting CVE2012-2122</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script netbus-brute.nse " />brute force Netbus backdoor service</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 9929 --script nping-brute.nse " />brute force an Nping Echo service</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV --script pcanywhere-brute.nse " />brute force the pcAnywhere remote access protocol</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 5432 --script pgsql-brute.nse " />brute force pgsql</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 512 --script rexec-brute.nse " />brute force classic UNIX rexec service</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 513 --script rlogin-brute.nse " />brute force password auditing against the classic UNIX rlogin service</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 2002 --script rpcap-brute.nse " />brute force WinPcap Remote Capture Daemon</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 5060 --script sip-brute.nse " />brute force Session Initiation Protocol</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 445 --script smb-brute.nse " />brute force SMB</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 445 --script smb-vuln-cve-2017-7494.nse " />Check if target machines are vulnerable to the arbitrary shared library load vulnerability CVE-2017-7494</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 25 --script smtp-brute.nse " />brute force SMTP servers using either LOGIN, PLAIN, CRAM-MD5, DIGEST-MD5 or NTLM authentication</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 1080 --script socks-brute.nse " />brute force password auditing against SOCKS 5 proxy servers</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 443 --script ssl-heartbleed.nse " />Detect if target is vulnerable to the OpenSSL Heartbleed bug (CVE-2014-0160)</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 443 --script tls-ticketbleed.nse " />Detect whether the target is vulnerable to the F5 Ticketbleed bug (CVE-2016-9244)</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 2401 --script tso-brute.nse " />brute force TSO account</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 902 --script vmauthd-brute.nse " />brute force VMWare Authentication Daemon</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 5900 --script vnc-brute.nse " />brute force VNC servers</p>
                 <p><input  type="checkbox" name="options[]" value=" -sV -p 5222 --script xmpp-brute.nse " />brute force XMPP (Jabber) instant messaging servers</p>

       </fieldset>


				<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">

                                    <input type="submit" name="submit" value="Start" class="alt_btn" id="submit" >
                                    <input type="reset" value="Reset" id="reset"> </a>
				</div>
			</footer>

		</article><!-- end of post new article -->


                <?php
              if(isset($_POST['submit'])){
               $url = $_POST['url'];

 if($url==''){

                   echo "<script type='text/javascript'>$.msg({fadeIn : 500,fadeOut : 500,bgPath : 'dlgs/',  content : 'You Have not entered a TARGET URL.Please enter a TARGET URL..'});</script>";
              }

 else {
      echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Doing Nmap Scan for $url ! results located in the result section'});</script>";

      require_once 'loading.php';
	if(preg_match("#;|\||&|%#", $url)){ die("Bad, very bad, this characters are not accepted: ; | & %");}


	foreach ($_POST['options'] as $key => $value) {
		if(preg_match("#;|\||&|%#", $value)){
			die("Bad, very bad, this characters are not accepted: ; | & %");
		}
$str.=$value;


	}
$url = trim($url); //remove space from start and end of url
               if(substr(strtolower($url), 0, 7) == "http://") $url = substr($url, 7); // remove http:// if included
                if(substr(strtolower($url), 0, 8) == "https://") $url = substr($url, 8);

                     $url_parts = explode("/", $url);
                     $url = $url_parts[0];

shell("sudo nmap $str $url");



         echo '</div>
                                    <footer>
				<div align="left">

					<h3>Finished</h3>
				</div>
			</footer>
		</article><!-- end of styles article -->
                 <h4 class="alert_success">Scan Complete </h4>

 ';

        echo "<script type='text/javascript'>$.msg({ fadeIn : 500,fadeOut : 500, bgPath : 'dlgs/',  content : 'Nmap Done ! results located in the result tab'});</script>";





 }
}


 ?>


	</section>

</body>
</html>
