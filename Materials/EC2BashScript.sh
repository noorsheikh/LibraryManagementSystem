#!/bin/bash
yum update -y
yum install httpd -y
service httpd start
chkconfig httpd on
yum install php56 php56-cli php56-common php56-fpm php56-mysqlnd php56-pdo php56-xml php56-xmlrpc php56-soap php56-gd --skip-broken -y
yum install mysql
