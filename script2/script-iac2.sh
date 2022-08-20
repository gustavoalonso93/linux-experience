#!/bin/bash

echo "atualizando e instalando programas"
apt-get update -y
apt-get upgrade -y
apt-get install apache2 unzip -y

echo "baixando sitea"
cd /tmp
wget https://github.com/denilsonbonatti/linux-site-dio/archive/refs/heads/main.zip
unzip main.zip
cd linux-site-dio-main
cp -R * /var/www/html/

echo "fim"

