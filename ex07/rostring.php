#!/usr/bin/php
<?PHP

function ft_split($str)
{	
	$text = preg_replace("([ ]+)", " ", $str);
	$array = explode(" ", $text);
	return($array);
}

$words = ft_split($argv[1]);
$count = count($words, 0);
for($i = 1; $i < $count; $i++)
{
	echo $words[$i]." ";
}
echo "$words[0]\n";
?>
