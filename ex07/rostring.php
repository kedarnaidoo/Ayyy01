#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$replace = eregi_replace("[ ]+", " ", $str);
	$array = explode(" ", $replace);
	return($array);
}
$words = ft_split($argv[1]);
$size = count($words, 0);
for($i = 1; $i < $size; $i++)
{
	echo $words[$i]." ";
}
echo "$words[0]\n";
?>
