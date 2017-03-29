#!/bin/bash
set -x

bundle exec htmlproofer _site --url-ignore "/ahmadassaf.com|github.com|travis-ci.org/" --only-4xx --http-status-ignore "403" --check-html

