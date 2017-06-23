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
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
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
										$stmt4 = $db_con->prepare("SELECT * FROM tbl_mcq_category where DeptId=:deptNo");
										$stmt4->bindParam(":deptNo",$_SESSION['categoryDept']);
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
                            </li>
							<li><a href="AddUpdateScore.php"><span class="fa fa-pencil-square-o"></span> Evaluate Scores</a></li>
						   <li><a href="ResultsPage.php"><span class="fa fa-check-square"></span> Result Page</a></li>
								
							<li class="xn-openable active">
							 <a href=""><span class="fa fa-clock-o"></span> Project Information</a>
							<ul>
							<li class="active"><a href="ProjectDetails.php"><span class="fa fa-info-circle"></span> Add Project Information</a></li>
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
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
         <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-globe"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-globe"></span> Notifications</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <!--<a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>-->
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="">Show all notifications</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                  <!--  <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <!--<ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms Stuff</a></li>
                    <li><a href="#">Form Layout</a></li>
                    <li class="active">One Column</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" name="projectForm" id="projectForm">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add Project Information</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                  
									<p>Existing and Pipeline Project Information can be added in this form</p>
								</div>
                                <div class="panel-body">                                                                        
                                    
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Project Id</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
												<?php
													include_once 'dbconfig.php';
													$stmt5 = $db_con->prepare("SELECT * FROM tbl_qaprojects");
													$stmt5->execute();
													$countRow=$stmt5->rowCount();
													$projId=0;
													if($countRow==0)
													{
														$projId=1;
													}
													else
													{
														$stmt5 = $db_con->prepare("SELECT max(Project_Id) FROM tbl_qaprojects");
														$stmt5->execute();
														$row=$stmt5->fetch(PDO::FETCH_ASSOC);
														$projId=$row['max(Project_Id)']+1;
													}
												?>
                                                <input type="text" class="form-control" id="projectId" name="projectId" value="<?php echo $projId;?>" readonly/>
                                            </div>                                            
                                            <span class="help-block">Project Id</span>
                                        </div>
                                    </div> 
									
									  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Project Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" id="projectName" name="projectName"/>
                                            </div>                                            
                                            <span class="help-block">Project Name</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Project Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control"rows="20" id="projectDesc" name="projectDesc"></textarea>
                                            <span class="help-block">Project Description</span>
                                        </div>
                                    </div>
									
									
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Project Status</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="projectStatus" id="projectStatus">
												
                                                <option value="1">Existing</option>
                                                <option value="0" selected>Pipeline</option>
                                             </select>
                                            <span class="help-block">Project Status</span>
                                        </div>
                                    </div>
									
                                    
                                   <!-- <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" class="form-control"/>
                                            </div>            
                                            <span class="help-block">Password field sample</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Datepicker</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-11-01">                                            
                                            </div>
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <input type="text" class="tagsinput" value="First,Second,Third"/>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>
                                    
                                 
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Checkbox</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                                            <span class="help-block">Checkbox sample, easy to use</span>
                                        </div>
                                    </div>

                                </div> -->
                                <div class="panel-footer">
                                    <button class="btn btn-default" id="clearForm">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" type="button" id="Save">Save Project Information</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
		<script type="text/javascript">
		$(document).ready(function(){
 
			$('#Save').click(function(){
				$.post("tempAddProject.php",$("#projectForm").serialize(),function(response,status){ // Required Callback Function
				alert("Project Information has been submitted successfully!!");
				$('#clearForm').click();

				});
			});
			
		});
		</script>
    <!-- END SCRIPTS -->                   
    </body>
</html>




















