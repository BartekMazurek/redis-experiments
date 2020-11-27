<?php

// set does not have a specific order and each element may only appear once

// ADD SOME VALUES INTO SET
$redis->sAdd('testSet', 'value1');
$redis->sAdd('testSet', 'value1');
$redis->sAdd('testSet', 'value2');
$redis->sAdd('testSet', 'value3');

// REMOVE VALUE FROM SET
$redis->sRem('testSet', 'value2');

// LIST ALL SET VALUES
var_export($redis->sMembers('testSet'));

// ADD SOME VALUES INTO SECOND SET
$redis->sAdd('testSet_2', 'value4');
$redis->sAdd('testSet_2', 'value5');

// MERGE TWO SETS INTO ONE
$setUnion = $redis->sUnion('testSet', 'testSet_2');

var_export($setUnion);