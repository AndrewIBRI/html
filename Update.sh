#!/bin/bash
cd /var/www/html
for i in $(seq 1 60);
do
git pull >> /var/www/html/cron.log 2>&1
sleep 1
done