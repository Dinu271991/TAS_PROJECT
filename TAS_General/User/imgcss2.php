 <html>
<head>
<style>
div.gallery {
	display: block
   image-align:center;
    border: 2px solid black;
    float: left;
    width: 180px;
overflow: hidden;
}



 .descr { 
	 
	 border:1px grey;
    width: 140px;
    height:100px;
}

div.desc {
    padding: 5px;
    text-align: center;
}
</style>
</head>
<body>


		

<div id="img" style='position:absolute;top:30%;left:50%;'>
<?php
require_once 'dbconfig.php';
$stmt1 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=2 and category_type='Descriptive'");
$stmt1->execute();
$j=0;
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
	echo "<a id=buttonId href=#>";
	echo "<img src=$imgCateg alt=Fjords width=300 height=200 hspace=20 data-toggle=modal data-target=$modalTarget id=$strReplace class='descr'>";
	echo "</a>";
	echo "<div class=desc><b>$strReplace</b></div>";
	echo "</div>";
	$j++;			
	} 	 
?>
</div>

	<?php
		
			require_once 'dbconfig.php';
			
			
        //$automation=array("ViewChoice.php","Program.php","Essay.php","HTML.php");
			$stmt1 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=2 and category_type='Descriptive'");
			$stmt1->execute();
			$j=0;	
			$n=20;
			while($row1=$stmt1->fetch(PDO::FETCH_ASSOC))
			{
				$n+=(30*5);
				$strReplace=str_replace("_"," ",$row1['category_name']);
				$deptPage1[$j]=$row1['category_name'].".php";
				$tempCateg3=$row1['category_name'].".php";
				$categName1[$j]=$row1['category_name'];
				$tempCateg=$row1['category_name'];
				$modalName=$row1['category_name']."0";
				$imgCateg="images/".$categName1[$j].".png";
				$modalTarget="#".$modalName;
				$j++;
				echo "<div class='modal fade' id=$modalName tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
	 
	?>
	
	 <div class="modal-dialog" role="document" style="position:absolute;top:15%;left:18%;width:80%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Descriptive Section</h4>
        </div>
       
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
         </div>
		 
		  <div class="modal-body">
		  
		  <?php
		  
				echo " <iframe src=$tempCateg3 class=demo2 scrolling=yes frameborder=0 style=border:none;top:30%;width:100%;height:100%; allowTransparency=true hidden></iframe>";
			
		 ?>
		  
		  		 
        </div>
      </div>
    </div>
  </div>
				
		<?php		
			
			}
			echo "</div>";
		?>			
		

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
	
	$('#imageDesc .img-thumbnail').hide();
	 document.cookie = "myJavascriptVar =12345";
	$('img').click(function(){
   $('.selected').removeClass('selected'); // removes the previous selected class
   $(this).addClass('selected'); // adds the class to the clicked image
});
	$('.demo2').hide();
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
		
		$('.demo2').show();
	})
	
	$('.modal-body4').click(function() {
		
		$('.demo4').show();
	})

	
	$('#mcq').click(function() {
		$('#imageDesc .img-thumbnail').hide();
		$('.descriptive').hide();
		$("iframe").hide();
		
		$('.aptitude').show();
	});
	$('#descriptive').click(function() {
		$('.aptitude').hide();
		$("iframe").hide();
		$('#imageDesc .img-thumbnail').show();
		$('.descriptive').show();
	});
	
	 var arrayFromPHP = <?php echo json_encode($categName1); ?>;
	 $.each(arrayFromPHP , function(index, value){
        $("#" + value).click(function() {
			//$("iframe").hide();	
			$('.aptitude').hide();
			selectedValue = value; 		
			
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

function finished()
{
	window.location.href="FinalSubmit.php";
}


</script>
</body>
<footer>
    <div class="navbar navbar-inverse navbar-fixed-bottom">
	<br/>
     <span style="color:white;position:absolute;right:42%;"> © 2017, Sun Technologies <sup> ®</sup> All Rights Reserved</span>
	 <span style="color:white;position:absolute;right:92%;">Recommended Resolution: 1600x900</span>
    </div>
	
</footer>
</html>