#!/usr/bin/env bash
export DEBIAN_FRONTEND=noninteractive

# Projectfolder
PROJECTFOLDER='vagrant'

# Update / Upgrade
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get -qqy update && apt-get -qqy upgrade

# Install Apache and PHP
sudo apt-get install -y apache2
sudo apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-curl php7.2-mbstring php7.2-xml php7.2-zip

# Setup hosts file
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

# Enable mod_rewrite
sudo a2enmod rewrite

# Restart apache
sudo service apache2 restart
