<?php function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$number='1234567890';
    $pass = array(); //remember to declare $pass as an array
	$numLength=strlen($number) - 1;
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 4; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = strtolower($alphabet[$n]);
    }
	for($i=4;$i<8;$i++)
	{
		$n = rand(0, $numLength);
        $pass[] = $number[$n];
	}
    return implode($pass); //turn the array into a string
}
?>
<html>

<body>

<input type="text" name="password" value="<?php echo randomPassword(); ?>"></input>
<?php
$link = ldap_connect('suntechnologies.com'); 
if(!$link)
{
	echo "Connected successfully!!";
}
else
{
	echo "Cannot Connect!!";
}
?>

</body>

</html>