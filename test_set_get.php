<?php

// SET VALUE FOR KEY
$redis->set('test', 'Hello world!');

echo $redis->get('test');
