<?php
$myString = "9,admin@example.com,8";
$myArray = explode(',', $myString);
$i=0;
$arrLength=count($myArray);
echo "Array content is: ".$arrLength;
while($i<$arrLength)
{
	echo " ".$myArray[$i];
	$i++;
}
//print_r($myArray);
?>