#!/usr/bin/env bash
export DEBIAN_FRONTEND=noninteractive

PASSWORD='root'
PROJECTFOLDER='vagrant'

# Update / Upgrade
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get -qqy update && apt-get -qqy upgrade

# install Apache and PHP
sudo apt-get install -y apache2
sudo apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-curl php7.2-mbstring php7.2-xml php7.2-zip

# mySQL
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $PASSWORD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $PASSWORD"
sudo apt-get -y install mysql-server
sudo apt-get install -y php7.2-mysql

# PHPmyAdmin
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2"
sudo apt-get -y install phpmyadmin

# setup hosts file
VHOST=$(cat <<EOF
<VirtualHost *:80>
    DocumentRoot "/${PROJECTFOLDER}/"
    <Directory "/${PROJECTFOLDER}/">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf

# enable mod_rewrite
sudo a2enmod rewrite

# restart apache
sudo service apache2 restart
