#!/bin/bash


sudo /opt/lampp/lampp start
code .
gnome-terminal -- bash -c "php artisan serve"




