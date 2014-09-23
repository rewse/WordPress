#!/bin/sh

echo "!\"#$%&'()-^\@[;:],./_=~|\`{+*}<>?" >> title.txt
echo "ABCDEFGHIJKLMNOPQRSTUVWXYZ" >> title.txt
echo "abcdefghijklmnopqrstuvwxyz" >> title.txt
echo "1234567890" >> title.txt

mysql -u wordpress -p -h db.rewse.jp \
  -e "SELECT post_title FROM fg_posts WHERE post_type = 'post'" wordpress \
  >> title.txt

mv title.txt /tmp
