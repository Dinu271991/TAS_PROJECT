<html>
<head>
<link href="" type="text/css">

</head>

<?php
/* Create some objects */
$category="Selenium_MCQ";
$category1="Category";
$category2="Name";
/*
$categName = explode("_", $category1);
$result = count($categName);

echo "Count of words in Category: ".$result; */

$input = array("red", "green", "blue", "gray", "white");
$rand_keys = array_rand($input, 1);
$colorPick=$input[$rand_keys];

$image = new Imagick();
$draw = new ImagickDraw();
$pixel = new ImagickPixel($colorPick);

/* New image  */
$image->newImage(180, 180, $pixel);

/* Black text*/
$draw->setFillColor('white');

/* Font properties */
$draw->setFont('Arial');
$draw->setFontSize( 30 );

$categName = explode("_", $category);
$result = count($categName);
$i=0;
$j=90;

while($i<$result)
{
	$image->annotateImage($draw, 40, $j, 0, $categName[$i]);
	$j=$j+40;
	$i++;
}


/* Give image a format */
$image->setImageFormat('png');

/* Output the image with headers*/
header('Content-type: image/png');
echo $image;
 
?>
</body>
</html>