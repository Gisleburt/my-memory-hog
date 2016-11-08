<?php
/**
 * swallow-memory.php
 * @author    Daniel Mason <danielm@moo.com>
 * @copyright 2016 MOO
 * @license   proprietary
 * @see       https://www.moo.com
 */

$myArray = [];

ini_set('memory_limit', '1G');

// Exhausts memory quickly, watch out!
while(true) {
    echo human(memory_get_usage()).PHP_EOL;
    $rnd = mt_rand(1, 1000000);
    $myArray[] = range($rnd+1, $rnd+1000);
    usleep(500);
}

// From: https://secure.php.net/manual/en/function.memory-get-usage.php#96280
function human($size)
{
    $units=array('b','kb','mb','gb','tb','pb');
    $normalised=floor(log($size,1024));
    return @round($size/pow(1024,($normalised)),2).' '.$units[(int)$normalised];
}
