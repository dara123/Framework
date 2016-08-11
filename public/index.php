<?php
require '../vendor/autoload.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$app = new Xuexue\Application();
$app->get('/', function() {
    echo 'hello world';
});

$app->get('/about', function() {
    echo 'about me';
});

$app->run();