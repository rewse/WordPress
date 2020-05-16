#!/bin/sh

dir=/srv/www/wordpress

cat <<! > .htaccess
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /blog/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /blog/index.php [L]
</IfModule>
# END WordPress
!

chown -R tats:www-data $dir

chmod 02775 $dir
find $dir -type d -print0 | xargs -0 chmod 02755
find $dir -type f -print0 | xargs -0 chmod 644
find $dir -name \*.sh -print0 | xargs -0 chmod 755

chown root:root $dir/permset.sh
chown -R www-data:www-data $dir/wp-content/cache

chmod 664 $dir/.htaccess
chmod 640 $dir/wp-db-config.php

find $dir/wp-content -type d -print0 | xargs -0 chmod 02775
find $dir/wp-content -type f -print0 | xargs -0 chmod 664
find $dir/wp-content -name \*.sh -print0 | xargs -0 chmod 700
