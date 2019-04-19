<?php
//$event_no=$_POST['event_no'];
$evnt_num=$_GET['e_num'];
$evnt_num=unserialize(base64_decode($evnt_num));
$n=$evnt_num[0];
$n=(int)$n;
$connection =mysqli_connect('localhost','root','','web_assign');
$query="SELECT * FROM event_reg WHERE No=$n";
$result=mysqli_query($connection,$query);
$result=mysqli_fetch_array($result);
$event_name=$result['event_name'];
$event_date=$result['event_date'];
$event_time=$result['event_time'];
$event_venue=$result['event_venue'];
$faculty=$result['faculty'];
$org_by=$result['org_by'];
$event_poster=$result['event_poster'];
$event_desc=$result['event_desc'];
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Event Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rubik|Ubuntu|Varela+Round" rel="stylesheet">
    <style media="screen">
    body{

            background-size: 100%;
    }
    .nav{
      /*background-color: hsla(206, 57%, 88%, 0.28);*/
      background-image: url(main2_panel.png);
      background-size: 100% 100%;
      font-family:'Ubuntu','sans-serif';
      text-align: center;
      height: 100%;
      width: 20%;
      float: left;
      margin-left: 1%;
      border-radius: 16px;
    }
    .nav_btn{
      font-family: 'Raleway', sans-serif;
      font-size: 18px;
      padding: 2%;
      font-weight: bold;
      border:none;
      decoration:none;
      background: none;
      color: #0B86AC;
      size:auto;
      border-radius: 12px;
      padding: 3%;
    }
    .nav_btn_admin{
      font-family: 'Raleway', sans-serif;
      font-size: 18px;
      border:1% solid #264C72;
      decoration:none;
      background: none;
      color: #264C72;
      size:auto;
      border-radius: 12px;
    }
    .nav_btn_admin:hover{

      font-weight: bold;
      color: white;
      background-color: #264C72;
    }
    .nav_btn:hover{
      font-weight: bold;
      color: white;
      background-color: #264C72;
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
    }
    #heading{
      font-family:'Ubuntu','sans-serif';
      font-size: 24px;
      color: #19334C;
    }
    .event_poster{
      float: left;
      width: 100%;
      height: 50%;
      margin-left: 2%;
      border-radius: 16px;
      background-size: 100% 100%;
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
      transition: 0.5s;
    }
    .event_reg{
      float: left;
      width: 90%;
      height: auto;
      margin-left: 2%;
      margin-top: 2%;
      border-radius: 15px;
      background-color: hsla(206, 57%, 90%, 0.5);
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
      transition: 0.5s;
      font-family: 'Raleway', sans-serif;
      padding: 4%;
    }
    .event_detail{
      float:left;
      width: 30%;
      height: auto;
      margin-top: 2%;
      margin-left:2%;
      border-radius: 16px;
      background-color: hsla(206, 57%, 90%, 0.5);
      overflow: auto;
      padding: 1%;
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
      transition: 0.5s;
    }
.event_detail:hover{
  box-shadow: 5px 8px 16px 5px rgba(0,0,0,0.2);
}
.event_poster_img{
  border-radius: 16px;
  width: 100%;
  height: 100%;
}
.evnt_name {
  font-family: 'Raleway', sans-serif;
  font-size: 32px;
  font-weight: bold;
  color: #0B86AC;
  padding: 2%;
  margin-top: 5%;
}
.evnt_detail{
  font-family: 'Rubik', sans-serif;
  font-size: 18px;
  color: #094560;
  margin-top: 0.5%;
  padding: 2%;
  margin-left: 3%;
  margin-right: 3%;
}
hr.evnt{
  border: 1px solid #0B86AC;
  width: 95%;
}
.mid_div{
  float: left;
  width: 40%;
  margin-left: 1%;
}
.form{
  font-family: 'Raleway', sans-serif;
  color:white;
}
.fieldset{
  border-color:#315580;
  border-style:solid;
  border-radius: 8px;
  border-width: medium;
}

.text_box{
  border:2px solid #145D7A;
  padding:5%;
  border-radius: 12px;
  background-color: white;
  width: 70%;
}
::placeholder{
}
.form_btn{
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  border: none;
  decoration:none;
  background: none;
  color: white;
  size:auto;
  padding: 3%;
  border-radius: 12px;
  background-color: #315580;
}

.label_text{
  color: #315580;
  font-weight: bold;
  font-size: 20px;
}
.faculty{
  color: #0B86AC;
}
#fieldset_heading{
  color: #315580;
  font-size: 24px;
}
    </style>
  </head>
  <body>
    <div class="nav" align=center><br><br>
      <img src="2.jpg" alt="" style="border-radius:20%;" width="40%" align=center><br><br>
      <text id="heading">University Events Management System</text><br><br><br>
      <a href="main_page.php"><button type="button" class=nav_btn>Events Home</button></a><br><br>
      <a href=""><button type="button" class=nav_btn>About Us</button></a><br><br>
      <a href="event_reg.php"><button type="button" class=nav_btn onclick="">Organize Event</button></a><br><br>
      <a href=""><button type="button" class=nav_btn>Login</button></a><br><br>
      <a href=""><button type="button" class=nav_btn style="float:left;">Admin page</button></a>
    </div>
<div class="mid_div">
  <div class="event_poster">
      <?php
       echo '<img class=event_poster_img src="data:image/jpeg;base64,'.base64_encode($event_poster).'">';
       ?>
  </div>
  <div class="event_reg">
      <form class="form" name=event_reg_form action="" method="post" enctype="multipart/form-data">
        <fieldset class=fieldset>
            <legend align=left><text id="fieldset_heading">
          <b>Join the Event</b>
          <text></legend>
          <table>
              <tr>
                <td align=center><br>
                  <input class=text_box type="text" name="student_fname" placeholder="Enter First Name">
                </td>
                <td align=center><br>
                  <input class=text_box type="text" name="student_lname" placeholder="Enter Last Name">
                </td>
              </tr>
              <tr>
                <td colspan="2" align=center><br>
                  <input class=text_box type="text" name="email_add" value="" placeholder="Enter Student Email Address">
                </td>
              </tr>
              <tr>
                <td colspan="2" align=center><br>
                <input type="submit" class="form_btn" name="" value="Join Event">
                </td>
              </tr>
    </table>
        </fieldset>
      </form>
  </div>
</div>
    <div class="event_detail" >
      <div class="evnt_name">
        <?php
        echo "<text>$event_name</text>";
        echo "<hr class=evnt>";
         ?>
      </div>
      <div class="evnt_detail">
        <?php
        echo "<text>Date :&nbsp; $event_date</text><br>";
        echo "<text>Time :&nbsp; $event_time</text><br>";
        echo "<text>Venue :&nbsp;$event_venue</text><br>";
        echo "<text>Organized By :&nbsp; $org_by</text><br><br>";
        echo "<p> $event_desc</p><br>";
         ?>
      </div>
    </div>
  </body>
</html>
