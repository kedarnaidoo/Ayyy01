#!/usr/bin/php
<?PHP
$return = eregi_replace("[ ]+", " ", $argv[1]);
$return = trim ($return, " ");
$return = rtrim ($return, " ");
echo "$return\n";
?>
