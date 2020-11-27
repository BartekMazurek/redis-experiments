<?php

define('HOST', 'redis');
define('PORT', 6379);

$redis = new Redis();
$redis->connect(HOST,PORT);