#!/bin/sh

DIR=/srv/www/wpdev

chown -R apache:tats $DIR

chmod 02775 $DIR
find $DIR -type d -print0 | xargs -0 chmod 02775
find $DIR -type f -print0 | xargs -0 chmod 664
find $DIR -name \*.sh -print0 | xargs -0 chmod 775
chmod 660 $DIR/wp-db-config.php

restorecon -R $DIR
