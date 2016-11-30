#!/bin/bash
set -x
# Build the site with Jekyll
grunt build

#compress html/css/js files (-n removes the timestamp)
find _site | egrep "\.(html|js|css)$" | xargs -I{} gzip -n -9 {}

#remove the .gz extension
find _site | egrep "\.(html|js|css)\.gz$" | xargs -I{} bash -c 'FILE="{}"; mv ${FILE} ${FILE%.*}'