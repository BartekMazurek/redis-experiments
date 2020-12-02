<?php

// ADD SOME VALUES AND SORT THEM BY SCORE
$redis->zAdd('testSortedSet', 100, 'testValue1');
$redis->zAdd('testSortedSet', 50, 'testValue2');
$redis->zAdd('testSortedSet', 210, 'testValue3');
$redis->zAdd('testSortedSet', 8, 'testValue4');

// SHOW ALL VALUES IN SET
var_export($redis->zRange('testSortedSet', 0, -1));