<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

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

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sections</title>

<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>
<link href="../style.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../media-query-test.css" rel="stylesheet" type="text/css">
  
<style>
 #talent{
	
	font-family: 'Tangerine', serif;
	text-shadow: 4px 4px 4px #aaa;
	font-weight: bold;
	color:#bf4040;
	text-align:center;
}
.SectionText
{
color:black;
position:fixed;
top:14%;
left:5%;
font-size:25px;
font-weight:bold;
}

#subSectionText
{
color:black;
position:fixed;
top:18%;
left:47%;
font-size:25px;
font-weight:bold;
}

body{
	 background: #50a3a2;
}

nav{
	
	height:83px;
}

.modal-dialog,
.modal-content,
.modal-body {
    /* 80% of window height */
    height: 85%;
}

.options{border:solid 0px; margin:10px;}
.selected{
   box-shadow:0px 3px 3px 3px #333;
}

.multiplechoice{
 
	 
	 border:1px grey;
    width: 200px;
    height:150px;
}


 .descr {
 
 
	 
	 border:1px grey;
    width: 200px;
    height:150px;
}

div.desc {
    padding: 5px;
    text-align: center;
}

.brightness {
    background-color: white;
    display: inline-block;

}
.brightness img:hover {
    opacity: .5;
}

 .descr,.multiplechoice { 
	 
	 border:1px grey;
    width: 200px;
    height:150px;
	background:#e1e1e1;
border:1px solid #ccc;
padding:10px;
}

div.desc {
    padding: 5px;
    text-align: center;
}

.options
{
background:#e1e1e1;
border:1px solid #ccc;
padding:10px;
}

.logo
{
position:absolute;
top:05px;
}
</style>

<script>

$('#modal').on('show', function () {
       $(this).find('.modal-body').css({
              width:'auto', //probably not needed
              height:'auto', //probably not needed 
              'max-height':'100%'
       });
});

</script>


<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

<script>
     var c = 400;
        var t;
		var result;
       // timedCount();
		

        function timedCount() {

        	var hours = parseInt( c / 3600 ) % 24;
        	var minutes = parseInt( c / 60 ) % 60;
        	var seconds = c % 60;
			var x=0;
			
        	result = (hours < 10 ? "0" + hours : hours) + "h " + (minutes < 10 ? "0" + minutes : minutes) + "m " + (seconds  < 10 ? "0" + seconds : seconds) +"s";

           
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
    //$("body").on("contextmenu",function(e){
      //  return false;
    //});
});
</script>
	

	
<script>


function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
$(document).on("keydown", disableF5);
});

</script>



</head>

<body onbeforeunload="return myFunction()" style="width:100%;height:100%;">


  
<form name="Demo" id="demo" method="POST" action="logout.php"> 
</form>
<nav class="navbar navbar-default navbar-fixed-top" style="background:#FFFAFA;">

      <div class="container">
        <div class="navbar-header">
		<img src="../suntechlogo.png" class="logo" width="110" height="70" alt="" style="left:1%;">
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
            
             <li class="dropdown" style="position:fixed;top:0px;right:100px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			   
			  <span class="glyphicon glyphicon-user"></span>&nbsp;<b>Hi' <?php echo $row['user_name']; ?></b>&nbsp;<span class="caret"></span></a>
			  <span class="text-center text_underline"><b> Time Left : <span id='timer'></span></b></span> 
              <ul class="dropdown-menu">
                <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>-->
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


<!--<div class="container">
<center>
<div class="first" style="position:absolute;top:20%;width:40%;left:30%;">
    <div class='alert alert-info'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to Talent Acquisition System.
			
    </div>
	</div>
</center>
</div>-->

<br/><br/>

<button id="Done" name="Done" class='btn btn-danger' style="position:fixed;top:17%;right:8%;" onClick="myFunction();">Abort Test</button>

<!--<div align="center">
 <h3 class="text-center text_underline"> Timer : <span id='timer'></span></h3> 
 </div>-->
   
 <!--<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:50%;">
     <span id="ariavalue"></span>
    </div> -->
<!-- <h3 class="text-center text_underline" style='postion:relative;margin-left:900px'> Timer : <span id='timer'></span> </h3> -->
<div class="container">

   <?php 
        require_once 'dbconfig.php';
		
        $automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
        $stmt = $db_con->prepare("SELECT category_name FROM tbl_mcq_category where DeptId=2");
        $stmt->execute();
		
		echo "<div align='center'>";
		?>
		<span class="SectionText"><u>Sections</u></span>
	<span id="subSectionText"><u>Sub Section</u></span>
		<div class="col-lg-2">
		 
			
			<div id="sections">
			
		<div class="brightness">
	<ul class="nav nav-pills nav-stacked" style="postion:fixed;color:green;"> 
  
    <!--<span style="position:fixed;top:12%;left:75px;font-size:1.9em;"><u>Sections</u></span>-->
  
  	<img src="../images1/mcq14.png" id="mcq" class="options" alt="Multiple Choice" border="0" height="220px" width="240px" style="position:fixed;top:24%;left:1%;"/></img>

<img src="../images1/descriptive.png" class="options" id="descriptive"  alt="Descriptive" border="0" height="220px" width="240px" style="position:fixed;left:1%;"/>	
  </ul>
  </div>

		<?php
		
		require_once 'dbconfig.php';
		
            //$automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
			$stmt1 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=1");
			$stmt1->execute();
			$j=0;	
			$nMCQ=12;
			$topMCQ=0;
			$nDesc=20;
			$topDesc=0;
			$countImg=0;
			$vspace=0;
			echo "<div id='imageDesc'>";
			while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
			{
				
				
				

				$strReplace=str_replace("_"," ",$row1['category_name']);
				$deptPage1[$j]=$row1['category_name'].".php";
				$tempCateg3=$row1['category_name'].".php";
				$categName1[$j]=$row1['category_name'];
				$tempCateg=$row1['category_name'];
				$modalName=$row1['category_name']."0";
				$imgCateg="images/".$categName1[$j].".png";
				$modalTarget="#".$modalName;
				echo "<div class=gallery>";
				if($row1["category_type"]=="Descriptive")
				{
					$nMCQ+=17;
					$topMCQ=34;
					if($countImg==4 || $countImg==8)
					{
											
						$vspace="250px";
						echo "<br/>";
						$topMCQ=34;
						$nMCQ=29;
						
					}
					
					echo "<img src=$imgCateg class='descr' data-toggle=modal data-target=$modalTarget id=$strReplace alt='Descriptive' border='0' height='150px' width='200px'  style='position:fixed;top:$topMCQ%;left:$nMCQ%;' vspace=$vspace/></img>";
					$countImg++;
					
			   }
				else
				{
					$nDesc+=25;
					$topDesc=30;
					echo "<img src=$imgCateg class='multiplechoice' data-toggle=modal data-target=$modalTarget id=$strReplace alt='Multiple Choice' border='0' height='150px' width='200px' style='position:fixed;top:$topDesc%;left:$nDesc%;'/></img>";
			
				}
				
				//echo "<div class=desc style='position:absolute;top:$textTop%;left:$n%;font-size:18px;'><b>$strReplace</b></div>";
				echo "</div>";
				$j++;
				echo "<div class='modal fade' id=$modalName tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
	 
	?>
	
	 <div class="modal-dialog" role="document" style="position:absolute;top:15%;left:18%;width:80%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Descriptive Section - <?php echo "<span style='color:blue;'>".$strReplace."</span>"; ?></h4>
        </div>
       
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
         </div>
		 
		  <div class="modal-body">
		   
		  <?php
		  
				echo " <iframe src=$tempCateg3 class=demo2 scrolling=yes frameborder=0 style=border:none;top:30%;width:100%;height:100%; allowTransparency=true></iframe>";
			
		 ?>
		  
		  		 
        </div>
      </div>
    </div>
  </div>
				
		<?php		
			
			}
			echo "</div>";			
		?>
	
  
  
  
	<!--<form method="post" action="FinalSubmit.php">
	<button id="Done" name="Done" class='btn btn-danger' style="position:absolute;top:13%;right:2%">Abort Test</button>
	</form>-->
	

<script>
function myFunction() {
    var txt;
    if (confirm("Do you wish to abort the Test?") == true) {
        txt = "You pressed OK!";
		alert(txt);
		window.location.href="FinalSubmit.php";
    } else {
        txt = "You pressed Cancel!";
		alert(txt);
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>


<script>

/*
$(document).ready(function(){
	$("iframe").hide();
	 $(".first").fadeIn(2000).fadeOut(2000);
	
    $("#Aptitude").click(function(){
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
	
	
	
}); */
</script>


<script>
var flag=0;
var selectedValue='Apti';
$(document).ready(function()
{
	
	 var arrayFromPHP = <?php echo json_encode($categName1); ?>;
	 $.each(arrayFromPHP , function(index, value){
		 
		  $('#'+value+'0').modal({
			backdrop: 'static',
		keyboard: false
	}); 
		
	  $('#'+value+'0').modal('hide');
	  
	 
		 
	 });
	
	
	 $(".close").click(function(){
		 var flag=0;
		  if (confirm('Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?')) 
		  {
				$(".close").attr('data-dismiss','modal');
				
		  } 
		  else
		  {
			  $(".close").removeAttr("data-dismiss");
				alert("You chose to remain in Same page!");
		  }
		  
	  });
	
	$('.multiplechoice').hide();
	$('.descr').hide();
	$('.subsections').hide();
	 document.cookie = "myJavascriptVar =12345";
	$('img').click(function(){
   $('.selected').removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
});
	//$("iframe").hide();
	$(".first").fadeIn(2000).fadeOut(6000);
	$('.descriptive').hide();
	$('.sections').hide();
	$('#imageDesc .img-thumbnail').hide();
	 $('.img-circle').click(function() {
		 flag=flag+1;
		 if(flag==1)
		 {
			timedCount();
		 }
		//$('li.active').removeClass('active');
		//$(this).addClass('active');
		
	});
	
	$('.modal-body').click(function() {
		
		//$('.demo2').show();
	})
	
	$('.modal-body4').click(function() {
		
		$('.demo4').show();
	})

	
	$('#mcq').click(function() {
		$('#imageDesc .img-thumbnail').hide();
		$('.descriptive').hide();
		$("iframe").hide();
		$('.subsections').hide();
		$('.descr').hide();
		$('.multiplechoice').show();
	});
	$('#descriptive').click(function() {
		$('.multiplechoice').hide();
		//$("iframe").hide();
		$('.subsections').show();
		$('.descr').show();
		$('.descriptive').show();
	});
	
	
	 $.each(arrayFromPHP , function(index, value){
        $("#" + value).on('click',function() {
			//$("iframe").hide();	
			
			selectedValue = value;		
			$('.demo2').show();
			// $("#myModal").attr("id",selectedValue+"0");
			// $(".demo2").attr("src",selectedValue+".php");
			 
			 //$(".demo2").show();
			//$("#"+selectedValue+"0").show(); 
			//alert(selectedValue);
			
			});
			
			
			
		
	 
	 
	/* $('.autoCateg').click(function() {
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
			
			});*/
    });
	$('.options').click(function() {
		 flag=flag+1;
		 if(flag==1)
		 {
			timedCount();
		 }
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

function tempSave()
{
//	alert("You can again modify the contents");
}


</script>
</body>
<footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
	<br/>
     <span style="color:white;position:absolute;right:40%;"> © 2017, Sun Technologies <sup> ®</sup> All Rights Reserved</span>
	 <span style="color:white;position:absolute;right:80%;">Recommended Resolution: 1600x900</span>
    </div>
	
</footer>
</html>













