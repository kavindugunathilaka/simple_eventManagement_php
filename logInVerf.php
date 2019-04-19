<?php
  $usern=$_POST['uname'];
  $code=$_POST['pcode'];
  $connection = mysqli_connect('localhost','root','','web_assign');
  if($connection){
    echo "Connection maded<br>";
  } else {
    echo "Error <br>";
  }
  echo "<br>";
  $query="SELECT * FROM user WHERE username='$usern'";
  $rst=mysqli_query($connection,$query);
  $no_entry=mysqli_num_rows($rst);
  if($no_entry==0){
        echo "Access Denied";
    header("Location:logIn.php");
  }
  $result=mysqli_fetch_array($rst);
  $un=$result['username'];
  $pc=$result['password'];
/*  echo "form -$usern<br>";
  echo "db - $un<br>";
  echo "form p -$code<br>";echo "db p -$pc<br>";
*/  if($code==$pc){
    header("Location:adminPg.php");
  } else {
    echo "Access Denied";
    header("Location:logIn.php");
  }
 ?>
