#!/bin/bash
set -x

# Initialize a new git repo in _site, and push it to our server.
cd _site
git init

git remote add deploy "ssh://hal@178.62.50.198:8028/var/www/blog"
git config user.name "Travis CI"
git config user.email "ahmad.a.assaf+travisCI@gmail.com"

git add .
git commit -m "Deploy"
git push --force deploy master


