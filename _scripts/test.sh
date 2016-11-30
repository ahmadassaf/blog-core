#!/bin/bash
set -x

timeout 30s bundle exec htmlproofer _site --external_only --only-4xx --http-status-ignore "403" --check-html --check-favicon
