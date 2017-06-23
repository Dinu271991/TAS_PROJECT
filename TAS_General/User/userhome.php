<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: index.php?err=2');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
.clock{
   zoom: 0.5;
   -moz-transform: scale(0.5)
  
}


</style>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="flipclock.css">
	<script src="jquery-1.11.3-jquery.min.js"></script>
		<script src="flipclock.min.js"></script>
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
     <a class="navbar-brand" href="http://techyari.in">	Sun Tech    </a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
		
      </div>
    </div>
	

    <div class="container homepage" align="right">
      <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6 welcome-page">
              <h2>This is User area.</h2>
            </div>
          <div class="col-md-3"></div>
        </div>
		<center>
		<div class="clock" align="center"></div></center>
		<script type="text/javascript">
		var clock = $('.clock').FlipClock(30*24*10, {
    countdown: true
});
	</script>
    </div>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
    </body>
</html>
