<?php

// INSERT TWO USERS AT THE END OF LIST
$redis->rPush('users', 'user1');
$redis->rPush('users', 'user2');

// RETRIEVE USERS FROM LIST
var_export($redis->lRange('users', 0, 1));

// INSERT USER AT THE BEGINNING OF LIST
$redis->lPush('users', 'user0');

var_export($redis->lRange('users', 0, 2));

// REMOVE LIST LAST ELEMENT
$redis->rPop('users');

var_export($redis->lRange('users', 0, 1));

// REMOVE LIST FIRST ELEMENT
$redis->lPop('users');
var_export($redis->lRange('users', 0, -1));