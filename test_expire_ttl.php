<?php

// VALUE IN REDIS NEVER EXPIRES BY DEFAULT
$redis->set('valueThatNeverExpire', 'This value will never expire');
echo $redis->ttl('valueThatNeverExpire') . PHP_EOL;

// SET VALUE TO EXPIRE AFTER 2 SECONDS
$redis->set('valueToExpire', 'This value will expire in 2 seconds');
$redis->expire('valueToExpire', 2);
echo $redis->get('valueToExpire') . PHP_EOL;

sleep(3);

$expiredValue = $redis->get('valueToExpire');

echo isset($expiredValue) && !empty($expiredValue) ? $expiredValue : 'Value has expired';