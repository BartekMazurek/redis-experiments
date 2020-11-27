<?php

// SET VALUE FOR KEY
$redis->set('visitorCounter', 0);
echo $redis->get('visitorCounter') . PHP_EOL;

// INCREMENT VISITOR COUNTER TWICE
$redis->incr('visitorCounter');
$redis->incr('visitorCounter');

echo $redis->get('visitorCounter') . PHP_EOL;

// SUBTRACT -1 FROM VISITOR COUNTER
$redis->decr('visitorCounter');
echo $redis->get('visitorCounter') . PHP_EOL;

// ADD +4 INTO COUNTER
$redis->incrBy('visitorCounter', 4);
echo $redis->get('visitorCounter') . PHP_EOL;

// SUBTRACT -3 FROM COUNTER
$redis->decrBy('visitorCounter', 3);
echo $redis->get('visitorCounter') . PHP_EOL;