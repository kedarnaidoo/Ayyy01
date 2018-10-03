#!/usr/bin/php
<?PHP

function value($c1)
{
    $val = ord($c1);
    $val += ctype_lower($c1) ? -32 : 0;
    $val += ctype_alnum($c1) ? -1000 : 0;
    $val += ctype_alpha($c1) ? -1000 : 0;
    return($val);
}

function cmp($s1, $s2)
{
    $s1 .= "\0";
    $s2 .= "\0";
    $i = 0;
    while ($s1[$i] != "\0" && $s2[$i] != "\0")
    {
        if (!(strcasecmp($s1[$i], $s2[$i])))
            $i++;
        else
        {
            return value($s1[$i]) - value($s2[$i]);
        }
    }
    return value($s2[$i]) - value($s1[$i]);
}

function ft_split($str)
{	
	$text = preg_replace("([ ]+)", " ", trim($str));
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
	if (ctype_digit($array_list[$j][0]))
		array_push($digit, $array_list[$j]);
	else if (preg_match('/[a-zA-Z]/', $array_list[$j][0])) /*ctype_alnum($array_list[$j])*/
		array_push($alpha, $array_list[$j]);
	else 
		array_push($else, $array_list[$j]);
}

usort($alpha, "cmp");
usort($digit, "cmp");
usort($else, "cmp");

foreach($alpha as $elm)
	echo "$elm\n";
foreach($digit as $elm)
	echo "$elm\n";
foreach($else as $elm)
	echo "$elm\n";
?>
