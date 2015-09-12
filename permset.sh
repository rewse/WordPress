#!/bin/sh

. ./permset.conf

DIR=/srv/www/$DIRNAME

cat <<! > .htaccess
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /$LOCNAME/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /$LOCNAME/index.php [L]
</IfModule>
# END WordPress
!

chown -R tats:apache $DIR

chmod 02775 $DIR
find $DIR -type d -print0 | xargs -0 chmod 02755
find $DIR -type f -print0 | xargs -0 chmod 644
find $DIR -name \*.sh -print0 | xargs -0 chmod 755

chown root:root $DIR/permset.sh
chown root:root $DIR/permset.conf

chmod 664 $DIR/.htaccess
chmod 640 $DIR/wp-db-config.php

find $DIR/wp-content -type d -print0 | xargs -0 chmod 02775
find $DIR/wp-content -type f -print0 | xargs -0 chmod 664
find $DIR/wp-content -name \*.sh -print0 | xargs -0 chmod 700

chmod 775 $DIR/wp-content/ewww
chmod 755 $DIR/wp-content/ewww/*
chown -R apache:apache $DIR/wp-content/ewww

restorecon -R $DIR
