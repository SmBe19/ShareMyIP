# ShareMyIP
Simple utility to share the ip of a server with a dynamic address.

To setup, you need a server B with a known address, a server A you want to share the address and a client C.

On server B, upload the files in the directory `server`. Create a `.htuser` file with `htpasswd -c .htuser username` and enter some password. Edit the `config.php` file and add a secret random phrase.

On server A and client C, upload the files in the directory `client`. Enter the address of server B and the chosen username, password and secret phrase in the `config.sh`. On server A setup a cron job to run `set_ip.sh` in a regular interval. On the client C you can now query the current address of server B with `get_ip.sh`.
