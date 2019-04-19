<?php
$event_name=$_POST['event_name'];
$event_date=$_POST['event_date'];
$event_time=$_POST['event_time'];
$event_venue=$_POST['event_venue'];
$org_by=$_POST['org_by'];
$event_poster=$_FILES['event_image']['tmp_name'];
$event_poster=addslashes(file_get_contents($event_poster));
$event_desc=$_POST['event_desc'];
$connection = mysqli_connect('localhost','root','','web_assign');
if($connection){
  echo "Connection maded";
} else {
  echo "Error";
}
echo "<br>";
$query="INSERT INTO event_reg(event_name,event_date,event_time,event_venue,org_by,event_poster,event_desc) VALUES('$event_name','$event_date','$event_time','$event_venue','$org_by','$event_poster','$event_desc')";
$rst=mysqli_query($connection,$query);

if($rst){
  header("Location:adminPg.php");
} else {
  echo "No records entered";
}
 ?>
