#!/bin/sh

#
# Startup script for player service
#
# Copyright MBCRAFT © 2016
#
# Script version : 1.2
#

echo "Starting RegiaPN Player ..."
runuser -l pi './player/start.sh'
