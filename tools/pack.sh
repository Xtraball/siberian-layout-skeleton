#!/usr/bin/env bash

# Clean-up
rm -f ./layout.zip

# Zip
zip -r -9 -x@./tools/exclude.list ./layout.zip ./