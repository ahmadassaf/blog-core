#!/usr/bin/bash

grunt build && echo "blog deployed via hook on: `git log -1`" >> deployment.txt