<?php

require('../vendor/autoload.php');

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/','index.php');
Router::start();