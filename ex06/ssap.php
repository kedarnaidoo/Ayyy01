#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$replace = eregi_replace("[ ]+", " ", $str);
	$array = explode(" ", $replace);
	sort($array, SORT_STRING);
	return($array);
}
$list=array();
$i=0;
	foreach ($argv as $elem)
	{
		if ($i)
			$list = array_merge($list,ft_split($elem));
		else
			$i++;
	}
	sort($list, SORT_STRING);
	foreach($list as $elem)
	{
		echo $elem. "\n";
	}
?>
