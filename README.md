# 64CCADC_Project

Project for 64CCADC Class. Template is provided by the teacher.
Useful Commands

ssh ec2-user@domain.com -i path_to_key

Script for Apache on amazon linux

#!/bin/bash

# Install Apache Web Server and PHP

yum install -y httpd mysql php

# Turn on web server

chkconfig httpd on
service httpd start
