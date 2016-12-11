#!/usr/bin/php -q
<?php
if ($argc < 3) {
        echo "Usage: ${argv[0]} <word1> <word2>\n";
        exit(-1);
}
$w1 = $argv[1];
$w2 = $argv[2];
if (strlen($w1) != strlen($w2)) {
        echo "'$w1' and '$w2' are NOT anagrams\n";
        exit(0);
}

$wa1 = str_split($w1);
$wa2 = str_split($w2);
sort($wa1);
sort($wa2);

$ws1 = implode($wa1);
$ws2 = implode($wa2);

if ($ws1 == $ws2) {
        echo "'$w1' and '$w2' are anagrams\n";
} else {
        echo "'$w1' and '$w2' are NOT anagrams\n";
}
?>