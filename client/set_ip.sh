#!/bin/bash
source `dirname $0`/config.sh
curl -4 -u $username:$password -d "phrase=$phrase" -X POST $server'set.php' 2> /dev/null
