<?php
$d_e_n=$_POST["IdSelection"];
$connection = mysqli_connect('localhost','root','','web_assign');
if($connection){
  echo "Connection maded";
} else {
  echo "Error";
}
echo "<br>";
$query="DELETE FROM event_reg WHERE No=$d_e_n";
$rst=mysqli_query($connection,$query);

if($rst){
  header("Location:adminPg.php");
} else {
  echo "No records entered";
}
 ?>
