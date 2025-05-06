# minimal setup
```bash
sudo apt install git
sudo apt install php-cgi && sudo apt install php
sudo apt install openssl ca-certificates
~composer and to /usr/local/bin
sudo apt install mariadb-server php-mysql php-mcrypt php-curl

# prepare for secrets
cp config/main-local.php.dist config/main-local.php

composer install
```
