#!/bin/bash

#
# Dynamic deployment script
#
# Copyright MBCRAFT © 2016
#
# Script version : 1.2
#

cd /boot/

if test -f ./deploy_specs.txt
then
  unzip -uoq `cat ./deploy_specs.txt` -d /home/pi/
  rm -f ./`cat ./deploy_specs.txt`
  rm -f ./deploy_specs.txt
  mkdir -p /home/pi/player/data
  mv player_boot.xml /home/pi/player/data/
  echo "Deploy executed successfully!"
else
  echo "No deploy to do ..."
fi

if test -f /home/pi/player/start.sh
then 
  rm -rf /home/pi/player/tmp/
  mkdir -p /home/pi/player/tmp
  chmod ug+x /home/pi/player/*.sh
  chown -R pi:pi /home/pi/player/
fi

if test -f /etc/usbmount/usbmount.conf
then
  echo "usbmount package already installed."
else
  echo "Installing required usbmount package ..."
  apt-get -y install usbmount
fi
