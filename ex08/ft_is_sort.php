#!/usr/bin/php
<?PHP
function ft_is_sort($array)
{
	$sort = $array;
	$rsort = $array;
	sort($sort);
	rsort($rsort);
	if ($sort == $array || $rsort == $array)
		return true;
	return false;
}
?>
