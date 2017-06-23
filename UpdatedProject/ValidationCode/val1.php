<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("val2.php",
        {
          name: "Donald Duck",
          city: "Duckburg"
        },
        function(data,status){
			
			if(data=="Success")
			{
				alert("Your answers have been saved successfully!!");
			}
			else
			{
				alert("Something went wrong: "+data);
			}
			
			
           // alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>