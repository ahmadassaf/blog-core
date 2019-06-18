#!/bin/bash
set -x
# Build the site with Jekyll
npm rebuild node-sass
grunt build