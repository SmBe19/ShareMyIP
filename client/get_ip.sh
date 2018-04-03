#!/bin/bash
source `dirname $0`/config.sh
curl -u $username:$password $server'get.php'
