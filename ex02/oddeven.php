#!/usr/bin/php
<?PHP
while (1)
{
echo "Enter a number: ";
$value = fgets(STDIN);
if ($value == FALSE)
	break;
$value = rtrim($value, "\n");
if (is_numeric($value))
{
	if ($value % 2 == 0)
		echo "The number $value is even \n";
	else
		echo "The number $value is odd \n";
}
else
	echo "'$value' is not a number\n";
}
?>
