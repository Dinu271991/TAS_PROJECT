<html>
<title>Create a file</title>
<body>
create a file

<form method="post" action="createCategory.php">
<input type="text" name="category_type" id="category_type" />
<button type="submit" onclick="category();">Create</button>
</form>
<script>
function category()
{
	alert("Category: "+document.getElementById('category').value);
}
</script>


</body>
</html>