#!/bin/bash
count=0
cd /var/www/html
while count<61
do
git pull
sleep 1
count+=1
done