#!/usr/bin/php
<?PHP
function ft_asort($tab)
{
	$size = count($tab);
	for($i = 0; $i < $size - 1; $i++)
	{
		for($j = $i + 1; $j < $size; $j++)
		{
			if($tab[$i] > $tab[$j])
				return (false);
		}
	}
	return (true);
}
function ft_dsort($tab)
{
	$size = count($tab);
	for($i = 0; $i < $size - 1; $i++)
	{
		for($j = $i + 1; $j < $size; $j++)
		{
			if($tab[$i] < $tab[$j])
				return (false);
		}
	}
	return (true);
}

function ft_is_sort($tab)
{
	if (ft_asort($tab))
		return (true);
	return (ft_dsort($tab));
}
?>
