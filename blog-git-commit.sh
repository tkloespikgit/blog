#!/bin/sh
#blog-chomd
#cd /var/www/html/blog
git add .
git commit -m 'tkloespik default commit'
git push
git fetch
git pull
echo 'well done'
