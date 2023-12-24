<?php

// Set the memory limit to 300MB
ini_set('memory_limit', '300M');

$data = str_repeat('a', 1024 * 1024 * 100); 

// it shows the current memory usage
echo "Current memory usage: " . memory_get_usage(true) / (1024 * 1024) . " MB\n";

// this line reduce the memory limit to 10MB
ini_set('memory_limit', '-1');

// this line Attempt to allocate more memory
$moreData = str_repeat('b', 1024 * 1024 * 11); // 11MB string

// if the memory limit is exceeded then This line will not reach , or it will not get executed.
echo "This line will not be executed.\n";

?>
