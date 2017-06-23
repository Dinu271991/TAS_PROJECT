<?php
$dept="Automation";
$category_name=$_POST['category_type'];
//$category_name="Selenium";
$content = basename(__FILE__ );
$upOne = basename(__DIR__ );
$page_directory = dirname(__FILE__);
//echo "Root is: ".$_SERVER['DOCUMENT_ROOT'];
if (!file_exists($page_directory.'/'.$category_name)) {
    mkdir($page_directory.'/'.$category_name, 0777, true);
}
require_once 'RequiredFiles/dbconfig.php';


$sql = "CREATE TABLE IF NOT EXISTS tbl_".$dept."_".$category_name."(".$category_name."_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".$category_name."_desc Text NOT NULL,".$category_name."_score INT(6) NOT NULL)";
		
$stmt = $db_con->prepare($sql);
$stmt->execute();

$sql = "CREATE TABLE IF NOT EXISTS tbl_user_".$dept."_".$category_name."(uid INT(6),".$category_name."_id INT(6),".$category_name."_desc Text,".$category_name."_score INT(6) DEFAULT 0)";
		
$stmt = $db_con->prepare($sql);
$stmt->execute();


copy('RequiredFiles/create.php', $page_directory.'/'.$category_name.'/create.php');
copy('RequiredFiles/add_form.php', $page_directory.'/'.$category_name.'/add_form.php');
copy('RequiredFiles/index.php', $page_directory.'/'.$category_name.'/index.php');
copy('RequiredFiles/edit_form.php', $page_directory.'/'.$category_name.'/edit_form.php');
copy('RequiredFiles/update.php', $page_directory.'/'.$category_name.'/update.php');



echo "Category Created Successfully!!<br/>";

echo $category_name."/index.php";

//$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/TAS_General/Template/$category_name/index.php","wb");
///fwrite($fp,$content.$upOne.$page_directory);
//fclose($fp);

?>