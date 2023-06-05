#!/bin/bash
count=0
cd /var/www/html
while count<61
do
git pull > /var/www/html/cron.log 2>&1
sleep 1
count+=1
done