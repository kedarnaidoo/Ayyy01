#!/usr/bin/php
<?PHP
$i = 0;

while ($i < 1000)
{
	if ($i % 100 == 0 && $i != 0)
		echo "\n"; 
	echo "x";
	$i++;
}
echo "\n";
?>