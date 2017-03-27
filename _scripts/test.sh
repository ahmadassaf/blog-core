#!/bin/bash
set -x

bundle exec htmlproofer _site --url-ignore "/ahmadassaf.com|github.com/" --only-4xx --http-status-ignore "403" --check-html

