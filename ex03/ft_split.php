#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$pattern = "([ ]+)";
	$replace = " ";
	$text = preg_replace($pattern, $replace, trim($str));
	$array = explode(" ", $text);
	sort($array, SORT_STRING);
	return($array);
}
?>