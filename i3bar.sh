#!/bin/sh
# shell script to prepend i3status with more stuff

i3status | while :
 do
  read line
  echo -e "$(wget -q -O - http://domain.com/random.txt && mocp -Q %title ) | $line" || exit 1
 done
