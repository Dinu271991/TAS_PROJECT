<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['btn-test']))
{
	$_SESSION['btn-test']=$_POST['btn-test'];
	header("Location: Demo.php");
	
	//$_SESSION['timer']=echo "<span id='timer'></span>";
	
}

if(isset($_SESSION['Done']))
{
	
	header("Location: FinalSubmit.php");
	
	//$_SESSION['timer']=echo "<span id='timer'></span>";
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
 
nav{
	 
	height:83px;
}
li{
	
}
 
 
</style>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	//obj.style.width = obj.contentWindow.document.body.scrollWidth + 'px';
  }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sections</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>
<link href="../style.css" rel="stylesheet" media="screen">

<link href="../StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<script>
     var c = 400;
        var t;
		var result;
        //timedCount();
		

        function timedCount() {

        	var hours = parseInt( c / 3600 ) % 24;
        	var minutes = parseInt( c / 60 ) % 60;
        	var seconds = c % 60;
			var x=0;
			
        	result = (hours < 10 ? "0" + hours : hours) + "h " + (minutes < 10 ? "0" + minutes : minutes) + "m " + (seconds  < 10 ? "0" + seconds : seconds) + "s";

           
        	$('#timer').html(result);
			
			x=(c/4);
			var with2Decimals = x.toString().match(/^-?\d+(?:\.\d{0,2})?/)[0]
			$('#ariavalue').html(with2Decimals+'%');
			//$('#ariavalue').html(result);
			if(x>(c/2))
			{
			 $('.progress-bar').css('width', x+'%').attr('aria-valuenow', x);
			 
			 
			 
			}
			else
			{
				 $('.progress-bar').attr('class','progress-bar progress-bar-danger');
				  $('.progress-bar').css('width', x+'%').attr('aria-valuenow', x);
			}
			
			if(minutes==6 && seconds==0){
				alert("Please save you answers in all sections by clicking Final Submit!! Time Left: "+result);
				$('#timer').css('color','red');
				
			}
			
			if(c == 0 ){
            	setConfirmUnload(false);
                $("#demo").submit();
            }
            c = c - 1;
			
            t = setTimeout(function(){ timedCount() }, 1000);	

					  var value = hours+" : "+minutes + " : " + seconds;
					    localStorage.setItem("time2", value);
						document.getElementById('checkTimer').innerHTML = localStorage.time2;
				
        }
	
	</script>
	
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
       // return false;
    });
});
</script>
<script>


function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
$(document).on("keydown", disableF5);
});

</script>


</head>

<body>


  
<form name="Demo" id="demo" method="POST" action="../logout.php"> 
</form>
<nav class="navbar navbar-default navbar-fixed-top">

      <div class="container">
        <div class="navbar-header">
		<img src="suntechlogo.jpg" width="110" height="70" alt="">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a> -->
		    
        </div>
        <!--<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>
          </ul> -->
		  <center><h2 id="talent">Talent Acquisition System</h2></center>
          <ul class="nav navbar-nav navbar-right">
            
             <li class="dropdown" style="position:fixed;top:0px;right:100px;" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			   
			  <span class="glyphicon glyphicon-user" ></span>&nbsp;Hi' <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
			 <span class="text-center text_underline" ><b> Time Left : <span id='timer'></span></b></span> 
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul> 
			  
            </li> 
			<!--<div align="center">
			<h5 class="text-center text_underline"> Timer : <span id='timer'></span></h3> 
			</div>-->
          </ul>
		 
      </div>
	
    </nav> 
	
	
   
  
<div class="body-container">


<div class="container">
<div class="first">
    <div class='alert alert-info'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to Sun Technologies.
			
    </div>
	</div>
</div>
<!--<div align="center">
 <h3 class="text-center text_underline"> Timer : <span id='timer'></span></h3> 
 </div>-->

 
<br/><br/>

  <!--<h2 align="center">Test for Development Department</h2><br/>
 <!--<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:50%;">
     <span id="ariavalue"></span>
    </div> -->
<!-- <h3 class="text-center text_underline" style='postion:relative;margin-left:900px'> Timer : <span id='timer'></span> </h3> -->
<div class="container">

   <?php 
   
		$dept=$_SESSION['Dept'];
        require_once '../dbconfig.php';
		
        $automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
        $stmt = $db_con->prepare("SELECT category_name FROM tbl_mcq_category where DeptId=$dept");
        $stmt->execute();
		$i=0;
		echo "<div align='center'>";
		?>
	
		<div class="col-lg-2">
		 
			
			<div id="sections">
		
	<ul class="nav nav-pills nav-stacked" style="postion:fixed;color:blue;"> 
  

		<?php
		
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<?php 
			
			//echo "<b><u>"."<a href='$automation[$i]' id='$automation[$i]'>";
			//echo "<h4>".$row['category_name']."</h1>"."</u></b>"."</a>"."<br/>"."<br/>"; 
			
			$strReplace=str_replace("_"," ",$row['category_name']);
			echo "<li><a href=# id=$row[category_name] class=devCateg>$strReplace</a></li>";
			//echo "<button class='btn btn-primary' id=$row[category_name] style='position:relative;top:-50px'>$row[category_name]</button>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			echo "<br/>";
			
			$categName[$i]=$row['category_name'];	
			$deptPage[$i]=$row['category_name'].".php";
			
			$i=$i+1;
			?>
			
			<?php
			
			
		}
		echo "</ul>";
		echo "</div>";
		/*echo "<form method=post action=FinalSubmit.php>";
		echo "<button class='btn btn-danger' id='Done' name='Done' style='position:relative;top:-85px;right:-400px;'>Done</button>";
		echo "</form>";*/
		
		?> 

		</div>
		
	<form method="post" action="FinalSubmit.php">
	<button id="Done" name="Done" class='btn btn-danger' style="position:absolute;top:13%;right:10%">Done</button>
	</form>

		<div id="iframeSections" style="position:absolute;left:30%;">
	<?php
		$k=0;
		while($k<$i)
		{
			?>
			 <iframe src="<?php echo "$deptPage[$k]";?>" class="sections" id="<?php echo "$categName[$k]"."0";?>"  frameborder="0" style="border:none;top:-100px;width:1000px;" scrolling="yes" allowTransparency="true" onload="resizeIframe(this)"></iframe>
			<?php 
			$k=$k+1;
		}
	
	?>
	
	 <!--<iframe src="" id="ViewChoice" scrolling="yes" frameborder="0" style="border:none;top:-100px;width:1000px;height:700px; allowTransparency=true"></iframe>
	<!-- <iframe src="ViewApti.php" id="ViewChoice" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:1000px;height:1000px;top:-800px;" allowTransparency="true"></iframe>-->
	<!-- <iframe src="" id="ViewProgram" scrolling="yes" frameborder="0" style="border:none;top:-100px;width:1000px;height:700px; allowTransparency=true"></iframe>
     <iframe src="" id="ViewHtml" scrolling="yes" frameborder="0" style="border:none;top:-100px;width:1000px;height:700px; allowTransparency=true"></iframe>
     <iframe src="" id="ViewEssay" scrolling="yes" frameborder="0" style="border:none;top:-100px;width:1000px;height:700px;allowTransparency=true"></iframe>-->
	</div>
	
<?php

/*
$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");


$rs =mysql_query("SELECT category_name FROM tbl_mcq_category");
$i=1;
$num=mysql_num_rows($rs)or die(mysql_error());

if($num<1)
{
	echo "<br><br><h2 class=head1> No Questions for this Section </h2>";
	exit;
}
else
{
	echo "<h3 class=head1> Select Category </h2><br/>";
	echo "<div align=center>";
	while($i<=$num)
	{
		$row= mysql_fetch_row($rs);
		//echo "<h4><a href='ViewChoice.php'>$row[0]</a></h4><br/>";
		$i++;
	}
	
	echo "<h4><a href='ViewChoice.php'>Aptitude</a></h4><br/>";
	echo "<h4><a href='Program.php'>Programs</a></h4><br/>";
	echo "<h4><a href='Essay.php'>Essay</a></h4><br/>";
	echo "<h4><a href='HTML.php'>HTML</a></h4><br/>";
	
	echo "</div>";
	
	
	
	
	
	
}


*/
echo "";


?>

<!--<form method="post" action="FinalSubmit.php">
		<button class='btn btn-danger' id='Done' name='Done' style='position:relative;top:-85px;right:-400px;'>Done</button>
</form>-->

    </div>
</div>

</div>
</div>
</div>

</div>
<script>
var flag=0;
$(document).ready(function(){
	$("iframe").hide();
	 $(".first").fadeIn(2000).fadeOut(2000);
	 
	    $('.devCateg').click(function() {
		 flag=flag+1;
		 if(flag==1)
		 {
			timedCount();
		 }
		$('li.active').removeClass('active');
		$(this).addClass('active');
		
	});
	 
	 var arrayFromPHP = <?php echo json_encode($categName); ?>;
	 var arrayFromPHP2 = <?php echo json_encode($deptPage); ?>;
	 var arrval=arrayFromPHP[0]
	 var apti='#'+arrval;
	 var selectedValue='';
	 
	 
	
	
	 
	  $.each(arrayFromPHP , function(index, value){
        $("#" + value).click(function() {
			$("iframe").hide();	
			selectedValue = value; 
			$("#"+selectedValue+"0").show(); 
			//alert(selectedValue);
			
			});
    });
	
    /*$("#Aptitude").click(function(){
        $("#ViewProgram").hide();
		$("#ViewEssay").hide();
		 $("#ViewHtml").hide();
		 
		$("#ViewChoice").show();
		
    });
	 $("#Programming").click(function(){
		$("#ViewChoice").hide();
		$("#ViewEssay").hide();
		 $("#ViewHtml").hide();
        $("#ViewProgram").show();
    });
	$("#Essay").click(function(){
		$("#ViewChoice").hide();
		$("#ViewHtml").hide();
        $("#ViewProgram").hide();
        $("#ViewEssay").show();
    });
	$("#Html").click(function(){
		$("#ViewChoice").hide();
		$("#ViewProgram").hide();
        $("#ViewEssay").hide();
        $("#ViewHtml").show();
    });
	*/
	
	
});
</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('input').on('click', function(){
  var valeur = 0;
  $('input:checked').each(function(){
       if ( $(this).attr('value') > valeur )
       {
           valeur =  $(this).attr('value');
       }
  });
  $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur);    
});

</script>
<script type="text/javascript">
    // Prevent accidental navigation away
    setConfirmUnload(true);
    function setConfirmUnload(on)
    {
        window.onbeforeunload = on ? unloadMessage : null;
    }
    function unloadMessage()
    {
        return 'Your Answered Questions are resetted zero, Please select stay on page to continue your Quiz';
    }

    $(document).on('click', 'button:submit',function(){
    	setConfirmUnload(false);
    });
</script>

<script type="text/javascript">

function finished()
{
	window.location.href="FinalSubmit.php";
}


</script>
</body>
</html>













