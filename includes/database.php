<?php

$db = mysqli_connect('localhost', 'root', '', 'appSalon');

if(!$db) {
    echo "Hubo un error";
    exit;
}