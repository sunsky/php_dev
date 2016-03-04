#!/usr/bin/php
<?php
#receive args in console mode

var_dump($argc, $argv);

#fwrite(STDIN,'plz input str:');
echo fgets(STDIN);
#echo readline('plz input: %s %d');

#$arg='a:b::c';
#var_dump(getopt($arg));
