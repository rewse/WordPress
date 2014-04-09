#!/bin/sh

DIR=/srv/www/wpdev

chown -R tats:apache $DIR

chmod 02755 $DIR
find $DIR -type d -print0 | xargs -0 chmod 02755
find $DIR -type f -print0 | xargs -0 chmod 644
find $DIR -name \*.sh -print0 | xargs -0 chmod 755

chown root:root $DIR/permset.sh

chmod 640 $DIR/wp-db-config.php
chmod 02775 $DIR/wp-content/plugins
chmod 02775 $DIR/wp-content/themes
chmod 02775 $DIR/wp-content/upgrade

restorecon -R $DIR
