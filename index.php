<?php
#echo "Hi there";
require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'AdminController');
Router::get('projects', 'BoardController');
Router::post('login', 'SecurityController');

Router::post('register', 'SecurityController');
Router::get('like', 'BoardController');
Router::get('dislike', 'BoardController');

Router::run($path);