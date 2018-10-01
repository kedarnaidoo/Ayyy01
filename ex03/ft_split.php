#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$replace = eregi_replace("[ ]+", " ", $str);
	$array = explode(" ", $replace);
	sort($array, SORT_STRING);
	return($array);
}
print_r(ft_split("Hello     World AAA"));
?>