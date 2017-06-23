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
$dept=$row['department'];
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

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aladin" />
<link href="media-query-test.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
  
<style>
 #talent{
	
	font-family: 'arial';
	font-size:40px;
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
font-size:30px;
font-weight:bold;
}

#subSectionText
{
color:black;
position:fixed;
top:18%;
left:45%;
font-size:30px;
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

#mcq{border:solid 0px; margin:10px;}
.selected{
   box-shadow:0px 3px 3px 3px #333;
   
   
}

#descriptive{border:solid 0px; margin:10px;}
.selected{
   box-shadow:0px 3px 3px 3px #333;
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
     var c = 7200;
	 var temp=7200;
        var t;
		var result;
       // timedCount();
		var timeStop=0;
		var hours=0,minutes=0,seconds=0;
		
		
        function timedCount() {

        	
			 hours = parseInt( temp / 3600 ) % 24;
			 minutes = parseInt( temp / 60 ) % 60;
			 seconds = temp % 60;
			
			window.localStorage['hrs']=hours;
			window.localStorage['mins']=minutes;
			window.localStorage['sec']=seconds;
			
			
		    window.localStorage['timeRestart']=temp;
			
        	
			var x=0;
			
        	result = (hours < 10 ? "0" + hours : hours) + "h " + (minutes < 10 ? "0" + minutes : minutes) + "m " + (seconds  < 10 ? "0" + seconds : seconds) +"s";

          
		  
        	$('#timer').html(result);
			$('#refCount').html(window.sessionStorage['countRefresh']);
			
			
			x=(temp/72);
			var with2Decimals = x.toString().match(/^-?\d+(?:\.\d{0,2})?/)[0]
			$('#ariavalue').html(with2Decimals+'%');
			//$('#ariavalue').html(result);
			if(x>(temp/2))
			{
			 $('.progress-bar').css('width', x+'%').attr('aria-valuenow', x);
			 
			 
			 
			}
			else
			{
				 $('.progress-bar').attr('class','progress-bar progress-bar-danger');
				  $('.progress-bar').css('width', x+'%').attr('aria-valuenow', x);
			}
			
			if(minutes==5 && seconds==0){
				alert("Please Save your answers in all sections!! Time Left: "+result);
				$('#timer').css('color','red');
				
			}
			
			if(temp == 0 ){
            	setConfirmUnload(false);
                $("#demo").submit();
            }
            temp = temp - 1;
			
            t = setTimeout(function(){ timedCount(temp) }, 1000);	
			
					 
				
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


function disableF5(e) 
{ 
if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) 
{
e.preventDefault(); 
alert("Malpractice, Page got Refreshed!!");
$(document).ready(function(){
$(document).on("keydown", disableF5);
	//window.location.href="logout.php";
	alert("Malpractice, Page got Refreshed!!");
});

}}



</script>



</head>

<body onbeforeunload="return myFunction()" style="width:100%;height:100%;">


  
<form name="Demo" id="demo" method="POST" action="logout.php"> 
</form>
<nav class="navbar navbar-default navbar-fixed-top" style="background:#FFFAFA;">

      <div class="container">
        <div class="navbar-header">
		<img src="suntechlogo.png" width="110" height="70" alt="" style="position:absolute;left:1%;">
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
                <li><a onclick="confirmSignout();"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul> 
			  
            </li> 
			<!--<div align="center">
			<h5 class="text-center text_underline"> Timer : <span id='timer'></span></h3> 
			</div>-->
          </ul>
		 
      </div>
	
    </nav> 
	
	

  
<div class="body-container">

<span id='refCount' hidden></span>
<div class="container">
<center>
<!--<div class="first" style="position:absolute;top:20%;width:40%;left:30%;">
    <div class='alert alert-info'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['user_name']; ?></strong>  <b>Welcome to Talent Acquisition System.</b>
			
    </div>
	</div>
</center>
</div>-->

<br/><br/>
<button type='submit' name='finalSubmit' id='finalSubmit' value='Submit' class='btn btn-success' style="position:fixed;top:17%;right:17%;">Final Submit</button>
<button type="button" id="Done" name="Done" class='btn btn-danger' style="position:fixed;top:17%;right:7%;" onClick="myFunction();">Abort Test</button>

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
		$deptId=$_SESSION['Dept'];
		
        $automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
        $stmt = $db_con->prepare("SELECT category_name FROM tbl_mcq_category where DeptId=$deptId");
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
  
  	<img src="images1/mcq14.png" id="mcq" class="options" alt="Multiple Choice" border="0" height="220px" width="240px" style="position:fixed;top:24%;left:1%;"/></img>

<img src="images1/descriptive.png" class="options" id="descriptive"  alt="Descriptive" border="0" height="220px" width="240px" style="position:fixed;left:1%;"/>	
  </ul>
  </div>

		<?php
		
		
		
		require_once 'dbconfig.php';
		
        //$automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
        $stmt1 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=$deptId and category_type='MCQ'");
        $stmt1->execute();
		$totalMCQCategoryCount=$stmt1->rowCount();
		$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
		$deptPage=$row1['category_name'].".php";
		$categName=$row1['category_name'];
		if($totalMCQCategoryCount<2)
		{ 
						
			//$categName=$row1["category_type"];
			
	
		?>
	  <!-- <div id="iframeSections" style="position:absolute;left:90%">
				<iframe src="<?php echo "$deptPage";?>" class="aptitude" id="<?php echo "$categName";?>" scrolling="yes" frameborder="0" style="border:none;top:-100px;width:1000px;height:1000px; allowTransparency=true"></iframe>
		
		</div>-->
		<?php }
		?>
		
		<?php
		
			require_once 'dbconfig.php';
			
			echo "<div class=brightness>";
        //$automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
			$stmt1 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=$deptId");
			$stmt1->execute();
			
			$stmt2 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=$deptId and category_type='MCQ'");
			$stmt2->execute();
			$mcqCount=$stmt2->rowCount();
			
			$j=0;	
			$nMCQ=12;
			$topMCQ=0;
			$nDesc=12;
			$topDesc=0;
			$countImg=0;
			$vspace=0;
			echo "<div id='imageDesc'>";
			while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
			{
				
						

				$strReplace=str_replace("_"," ",$row1['category_name']);
				$deptPage1[$j]=$row1['category_name'].".php";
				$tempCateg3=$dept."/".$row1['category_name'].".php";
				$categName1[$j]=$row1['category_name'];
				$tempCateg=$row1['category_name'];
				$modalName=$row1['category_name']."0";
				$imgCateg=$dept."/".$categName1[$j].".png";
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
					
					echo "<img src=$imgCateg class='descr' data-toggle=modal data-target=$modalTarget id=$categName1[$j] alt='Descriptive' border='0' height='150px' width='200px'  style='position:fixed;top:$topMCQ%;left:$nMCQ%;' vspace=$vspace/></img>";
					$countImg++;
					
			   }
				else
				if($mcqCount==1)
				{
					$nDesc+=32;
					$topDesc=34;
					echo "<img src=$imgCateg class='multiplechoice' data-toggle=modal data-target=$modalTarget id=$strReplace alt='Multiple Choice' border='0' height='150px' width='200px' style='position:fixed;top:$topDesc%;left:$nDesc%;'/></img>";
				}
				else
				{
					$nDesc+=17;
					$topDesc=34;
					echo "<img src=$imgCateg class='multiplechoice' data-toggle=modal data-target=$modalTarget id=$strReplace alt='Multiple Choice' border='0' height='150px' width='200px' style='position:fixed;top:$topDesc%;left:$nDesc%;'/></img>";
			
				}
				
				//echo "<div class=desc style='position:absolute;top:$textTop%;left:$n%;font-size:18px;'><b>$strReplace</b></div>";
				echo "</div>";
				$j++;
				echo "<div class='modal fade' id=$modalName tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
				
	 
	?>
	<!--DF3713 1a1f1b-->
	 <div class="modal-dialog" role="document" style="position:absolute;top:7%;left:0%;width:100%;height:100%;">
      <div class="modal-content">
        <div class="modal-header" style="background-color:rgba(48, 149, 179, 0.97);">
          <button type="button" id="<?php echo $row1['category_name']."_";?>modal_close" class="close" aria-label="Close" style="color:white;"><i class="fa fa-times" aria-hidden="true"></i></button>
          <h4 class="modal-title" id="myModalLabel" style="color:white;"><?php echo $row1['category_type']; ?>  Section - <?php echo "<span style='font-family:arial;color:black;'><b>".$strReplace."</b></span>"; ?></h4>
        </div>
       
       
		 
		  <div class="modal-body">
		  
		  <?php
		  
				echo " <iframe src=$tempCateg3 name=$row1[category_name] class=demo2 scrolling=yes frameborder=0 style=border:none;top:30%;width:100%;height:100%; allowTransparency=true></iframe>";
			
		 ?>
		  
		  		 
        </div>
		 <div class="modal-footer" style="background-color:rgba(48, 149, 179, 0.97);">
		
          <button type="button" id="<?php echo $row1['category_name']."_";?>modal_close1" class="close" aria-label="Close" style="background-color:black;color:white;"><i class="fa fa-times" aria-hidden="true"></i></button>
         </div>
      </div>
    </div>
  </div>
				
		<?php		
			
			}
			echo "</div>";	
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
			$.post("enableAbort.php",{'abort':0},function(response,status){ // Required Callback Function
						window.setTimeout(function(){		


							window.location.href = "FinalSubmit.php";

						}, 1000); 

					});
		
		
		
		//window.location.href="FinalSubmit.php";
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
var refr=0;
</script>

<script>

var countFlag=0;
var countSub=0;
var selectedValue='Apti';
var setFinalSubmit=0;
var flag=0;
$(document).ready(function()
{
	
	flag=0;
	$('.multiplechoice').hide();
	$('.descr').hide();
	$('.subsections').hide();
	
	
	var countRef = sessionStorage.getItem('countRefresh');
	if(countRef==undefined)
	{
		window.sessionStorage['countRefresh']=0;
	}
	
	
	
	
	
	
	window.addEventListener("unload", function(){
  var count = parseInt(sessionStorage.getItem('countRefresh') || 0);

  sessionStorage.setItem('countRefresh', ++count)
}, false);

  

		 

	//alert("Last Timer: "+window.localStorage['hrs']+window.localStorage['mins']+window.localStorage['sec'] +"Refresh Count:"+window.sessionStorage['countRefresh']);
	//alert("Refresh Count: "+window.sessionStorage['countRefresh']);
	
	
	 var arrayFromPHP = <?php echo json_encode($categName1); ?>;
	 $.each(arrayFromPHP , function(index, value){
		 
		  $('#'+value+'0').modal({
			backdrop: 'static',
		keyboard: false
	}); 
		
	  $('#'+value+'0').modal('hide');
	  
	 
		 
	 });
	
	var countVal=0;
	var val=0;
	var tempVar=0;
	$.each(arrayFromPHP , function(index, value){
        $("#" + value +"_modal_close").on('click',function() {
			
			if(setFinalSubmit==0)
			{
			
			if(confirm("Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?"))
				 {
					  $(".close").attr('data-dismiss','modal');
					  
					  
				 }
				 else
				 {
					 $(".close").removeAttr("data-dismiss");
					
					 
				 }
			}
			else
			{
				alert("Your answers has been already submitted. Thank You!!");
				$(".close").attr('data-dismiss','modal');
			}
			
		});
	});
	
	$.each(arrayFromPHP , function(index, value){
        $("#" + value +"_modal_close1").on('click',function() {
			
			if(setFinalSubmit==0)
			{
			
			if(confirm("Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?"))
				 {
					  $(".close").attr('data-dismiss','modal');
					  
					  
				 }
				 else
				 {
					 $(".close").removeAttr("data-dismiss");
					
					 
				 }
			}
			else
			{
				alert("Your answers has been already submitted. Thank You!!");
				$(".close").attr('data-dismiss','modal');
			}
			
		});
	});
	
	
	/*$.each(arrayFromPHP , function(index, value){
        $("#" + value +"_modal_close").on('click',function() {
			if(tempVar==0)
			{
				alert("Entered tempvar!!");
				val=subSectionTest(value);
				tempVar=1;
			}
			
			});
			
	 }); */
		 
		 function subSectionTest(value)
		 {
			 alert("Entered subSectionTest!!");
			 			 
			 $.ajax({
          type:'POST',
          url:value+'_update.php',
         data: { value: '0'},
         success:function(response){
			 if(response==1)
			 {
				  alert("Success Response!!");
				 countFlag=1;
				
				alert(value+" is submitted successfully");
			    $(".close").attr('data-dismiss','modal');
				 $(".close").click();
				  tempVar=0;
				 $(".close").removeAttr("data-dismiss");
				
				 return 1;
				 				 			
			 }	
			 else
			 {
				  alert("Failure Response!!");
				 if(confirm("Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?"))
				 {
					  $(".close").attr('data-dismiss','modal');
					  $(".close").click();
					  tempVar=0;
					  
				 }
				 else
				 {
					 $(".close").removeAttr("data-dismiss");
					 tempVar=0;
					 
				 }
				  $(".close").removeAttr("data-dismiss");
				 
				 return 0;
			 }
			 
			}
			 
		});
			 
		
return 0;		
			 
				//alert("Entered into function!!:: "+countFlag);
				
			
		 }
		
		
		/*if(countFlag==0)
		{
			
			if (confirm('Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?')) 
				{
						$(".close").attr('data-dismiss','modal');
				
				} 
				else
				{
					$(".close").removeAttr("data-dismiss");
					alert("You chose to remain in Same page!");
				}
		}
		*/
		 
		 
		/*if(flag!=1)
		{
		 
		  if (confirm('Your data is temporarily available, but not saved until you click Save.Do you wish to Exit?')) 
		  {
				$(".close").attr('data-dismiss','modal');
				
		  } 
		  else
		  {
			  $(".close").removeAttr("data-dismiss");
				alert("You chose to remain in Same page!");
		  }
		}*/
		  
	 
	
	$('.aptitude').hide();
	$('.descr').hide();
	$('.subsections').hide();
	 document.cookie = "myJavascriptVar =12345";
	
	//$("iframe").hide();
	//$(".first").fadeIn(2000).fadeOut(6000);
	$('.descriptive').hide();
	$('.sections').hide();
	$('#imageDesc .img-thumbnail').hide();
	 $('.img-circle').click(function() {
		 //flag=flag+1;
		 if(flag==1)
		 {
			//timedCount();
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

	
	$('.descr').click(function(){
    // removes the previous selected class
    // adds the class to the clicked image
	
});
	
	$('#mcq').click(function() {
		$('.descr').removeClass('selected');
		$('#imageDesc .img-thumbnail').hide();
		$('.descriptive').hide();
		//$("iframe").hide();
		$('.subsections').hide();
		$('.descr').hide();
		$('.multiplechoice').show();
		$(this).addClass('selected');
		$('#descriptive').removeClass('selected');
	});
	$('#descriptive').click(function() {
		$(this).addClass('selected');
		$('#mcq').removeClass('selected');
		$('.multiplechoice').hide();
		//$("iframe").hide();
		$('.subsections').show();
		$('.descr').show();
		$('.descriptive').show();		
		
		
	});
	
	
	
	
	 $.each(arrayFromPHP , function(index, value){
        $("#" + value).on('click',function() {
			$('.multiplechoice').removeClass('selected');
			$('.descr').removeClass('selected');
			//$("iframe").hide();	
			selectedValue = value;
			
						
			$("#" + value).addClass('selected');
			$('.demo2').show();
			
					
			if(flag==1)
			{
				
				timedCount();
				
				
			}
			
			
			
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
	
	
	$('#finalSubmit').on('click',function(){
				
				if(confirm("Do you wish to submit all the sections?"))
				{
					setFinalSubmit=1;
						$i=0;
					while($i<arrayFromPHP.length)
					{
						window.frames[arrayFromPHP[$i]].document.forms["home"].submit();
						$i++;
					}
					
					$.post("tempRefCount.php",{'count':window.sessionStorage['countRefresh']},function(response,status){ // Required Callback Function
						window.setTimeout(function(){		


							window.location.href = "FinalSubmit.php";

						}, 10000); 

					});
					
					
				}
				else
				{
					alert("You chose not to submit all sections!");
				}
				
				
			
				//window.location.href = "FinalSubmit.php";
				
				
			});
	
	$('.options').click(function() {
		flag=flag+1;
	
		 //flag=flag+1;
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


<script src="bootstrap/js/bootstrap.min.js"></script>
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
function confirmSignout()
{
	 if (confirm('Do you want to Logout?')) 
		  {
				alert("You clicked on OK");
				window.location.href="logout.php";
				
		  } 
		  else
		  {
			   alert("You clicked on Cancel");
			    
		  }
	
}
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













