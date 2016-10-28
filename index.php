<?php

print 'Hello I\'m ' . (isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : 'CLI script') . '.' . PHP_EOL;
