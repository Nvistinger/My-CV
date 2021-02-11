#!/bin/sh
rsync -avP ./ lmpwybb@ssh-lmpwybb.alwaysdata.net:~/www --exclude-from=.gitignore --exclude=.git