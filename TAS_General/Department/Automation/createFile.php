<html>
<title>Create a file</title>
<body>
create a file
<?php

$content = "some text here";
echo "Root is: ".$_SERVER['DOCUMENT_ROOT'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/myText.txt","wb");
fwrite($fp,$content);
fclose($fp);

?>
</body>
</html>