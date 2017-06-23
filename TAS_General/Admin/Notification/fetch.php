<?php
//fetch.php;
if(isset($_POST["view"]))
{
 include("connect.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE jobrequirement SET AdminReminder=1 WHERE HRReview=1 AND AdminReminder=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM jobrequirement where HRReview=1 ORDER BY HRReviewDate DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
   
    <a href="#">
     <strong>'.$row["Department"].'</strong><br />
	 <small><em>Below Job Status can be closed</em></small>
     <small><em>Job Id#'.$row["JobId"].'</em></small>
	  <small><em>'.$row["PostName"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM jobrequirement WHERE HRReview=1 AND AdminReminder=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>