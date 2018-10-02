#!/usr/bin/php
<?PHP

function ft_split($str)
{	
	$text = preg_replace("([ ]+)", " ", $str);
	$array = explode(" ", $text);
	sort($array, SORT_STRING);
	return($array);
}
$array_list=array();
$i=0;
	foreach ($argv as $value)
	{
		if ($i++)
			$array_list = array_merge($array_list,ft_split($value));
	}
	sort($array_list, SORT_STRING);
	foreach($array_list as $value)
	{
		echo $value. "\n";
	}
?>
