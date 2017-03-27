#!/bin/bash
set -x

timeout 30s bundle exec htmlproofer _site --check-html
