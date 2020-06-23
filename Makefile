SHELL := /bin/bash

start:
	composer install
    yarn install
    yarn encore dev
    symfony server:start -d
    symfony open:local

