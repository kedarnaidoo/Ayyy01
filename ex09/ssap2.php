#!/usr/bin/php
<?PHP

function ft_swap($arg1, $arg2)
{
	$temp = $arg1;
	$arg1 = $arg2;
	$arg2 = $temp;
	echo "swap $arg1 $arg2\n";
}

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
$size = count($array_list);
$alpha = array();
$digit = array();
$else = array();
	
for ($j = 0; $j < $size; $j++)
{
	if (ctype_digit($array_list[$j]))
		array_push($digit, $array_list[$j]);
	else if (ctype_alnum($array_list[$j]))
		array_push($alpha, $array_list[$j]);
	else 
		array_push($else, $array_list[$j]);
}

sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
sort($digit, SORT_STRING);
sort($else, SORT_REGULAR);

foreach($alpha as $elm)
	echo "$elm\n";
foreach($digit as $elm)
	echo "$elm\n";
foreach($else as $elm)
	echo "$elm\n";
?>
