#!/bin/bash

composer install --ignore-platform-reqs

npm install

npm run dev
