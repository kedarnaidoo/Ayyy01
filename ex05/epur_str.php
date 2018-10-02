#!/usr/bin/php
<?PHP
$str = preg_replace("([ ]+)", " ", $argv[1]);
$str = trim ($str, " ");
$str = rtrim ($str, " ");
echo "$str\n";
?>
