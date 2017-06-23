<?php
session_start();

if(!isset($_SESSION['admin_session']))
{
	header("Location: ../User/index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['admin_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$dept=$row['department'];

if($dept=='Automation')
{
	$_SESSION['categoryDept']=2;
	
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Automation Admin Page</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Automation</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/no-image.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $row["admin_name"]; ?></div>
                                <div class="profile-data-title">Senior QA Engineer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
               <li class="xn-title">Menu</li>
                    <li>
                        <a href="index.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                       <li class="xn-openable active">
                          <a href=""><span class="fa fa-files-o"></span> <span class="xn-text">Admin Menus</span></a>
                         <ul>
							<!--<li><a href="home.php"><span class="fa fa-plus-square"></span> Add Questions</a></li>-->
							<li class="xn-openable">
                                <a href=""><span class="fa fa-clock-o"></span> Add Questions</a>
                                <ul>
                               
									<?php
									
										include_once 'dbconfig.php';
										$stmt4 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId='2'");
										$stmt4->execute();
										$countUsers=$stmt4->rowCount();
										while($row=$stmt4->fetch(PDO::FETCH_ASSOC))
										{
											$categoryName=$row["category_name"];
											echo "<li id='$categoryName'><a href='AddUpdate$categoryName.php'><span class='fa fa-align-center'></span> $categoryName</a></li>";
										}
									 ?>
                                   <!-- <li><a href="AddUpdateProgram.php"><span class="fa fa-align-center"></span> Programs</a></li>
                                    <li><a href="AddUpdateEssay.php"><span class="fa fa-align-justify"></span> Essay</a></li> -->
                                </ul>
                        
						   	<li><a href="AddUpdateScore.php"><span class="fa fa-pencil-square-o"></span> Evaluate Scores</a></li>
						   <li class="active"><a href="ResultsPage.php"><span class="fa fa-check-square"></span> Result Page</a></li>
								
							<li class="xn-openable">
							 <a href=""><span class="fa fa-clock-o"></span> Project Information</a>
							<ul>
							<li><a href="ProjectDetails.php"><span class="fa fa-info-circle"></span> Add Project Information</a></li>
							<li><a href="EditUpdateProjectDetails.php"><span class="fa fa-info-circle"></span> View/Edit Project Details</a></li>
						
					
							</ul>
							</li>
							
							<li class="xn-openable">
                                <a href=""><span class="fa fa-clock-o"></span> Job Requirements</a>
                             <ul>
								<li><a href="JobDetailsReq.php"><span class="fa fa-info-circle"></span> Add Job Requirements</a></li>
								<li><a href="ViewJobPosition.php"><span class='fa fa-align-center'></span> Edit Job Requirements</a></li>
							</ul>
							</li>
							<!--<li><a href="JobPosition.php"><span class="fa fa-search-plus"></span> Job Requirements</a></li>-->
							
							
							
							<li class="xn-openable">
							 <a href=""><span class="fa fa-file-pdf-o"></span> Reports</a>
							<ul>
								<li><a href=""><span class="fa fa-file-pdf-o"></span> Report1</a></li>
								<li><a href=""><span class="fa fa-file-pdf-o"></span> Report2</a></li>
								<li><a href=""><span class="fa fa-file-pdf-o"></span> Report3</a></li>
							
							</ul>
							</li>
							
                </ul>
			</li>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <!--<li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li> -->  
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
					</ul>
					
				</ul>
				
				<iframe src="Final_Results/index.php" height="1000px" width="1475px" style="position:relative;top:10%;"></iframe>
			</div>
					
	
					
      
       
       
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

               
    <!-- START SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#Programming').addClass("active");
		});
		</script>
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
		 <script type="text/javascript" src="js/assets/datatables.min.css"></script>
		
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






