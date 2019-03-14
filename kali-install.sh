#!/usr/bin/env bash

# check if user is root
   if [ $(id -u) != "0" ]; then
      echo ""
      echo [*] [Check User]: $USER ;
      sleep 1
      echo [x] [not root]: you need to be [root] to run this script...;
   sleep 1
exit

else
   echo ""
   echo [*] [Check User]: $USER ;
   sleep 1
fi




apt-get update
#Adding www-data to sudoers with no password
echo "www-data ALL=(ALL:ALL) NOPASSWD:ALL">>/etc/sudoers

#Web Server
echo "Installing Apache and PHP..............."
apt-get install apache2 php7.3 libapache2-mod-php7.3
service apache2 start 

git clone https://github.com/scipag/vulscan.git
 mv vulscan /usr/share/nmap/scripts

apt install shellinabox  mingw-w64 binutils-mingw-w64 binutils-mingw-w64-i686 mingw-w64-i686-dev mingw-w64-tools mingw-w64-x86-64-dev curl lynx mtr 




echo "Installation Complete........"


