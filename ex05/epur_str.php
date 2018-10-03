#!/usr/bin/php
<?PHP
printf("%s\n",preg_replace("([ ]+)", " ", trim($argv[1]," ")));
?>
