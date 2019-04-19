<?php $connection =mysqli_connect('localhost','root','','web_assign'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Event Registration</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Varela+Round" rel="stylesheet">
    <style media="screen">
    body{
      background-image: url(bg3.jpg);
            background-size: 100%;

    }
    .nav{
      background-size: 100% 100%;
      font-family:'Ubuntu','sans-serif';
      text-align: center;
      height: 90%;
      width: 20%;
      float: left;
      margin-left: 1%;
      margin-top: 2%;
      border-radius: 16px;
    }
    .nav_btn{
      font-family: 'Raleway', sans-serif;
      font-size: 20px;
      padding: 2%;
      font-weight: bold;
      border:none;
      decoration:none;
      background: none;
      color: white;
      size:auto;
      border-radius: 12px;
      padding: 3%;
    }
    .nav_btn:hover{
      font-weight: bold;
      color: white;
      background-color: #264C72;
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
      cursor: pointer;
    }
    #heading{
      margin-top: 30%;
      margin-bottom: 50%;
      font-family:'Ubuntu','sans-serif';
      font-size: 24px;
      color: hsl(209, 71%, 58%);
    }
    .area_left{
      float: left;
      width: 40%;
      height: 100%;
      margin-left: 1%;
      margin-top: 2%;
      margin-bottom: 2%;
    }

img {
border-radius: 15px;
}
td{
  background-color:none ;
  border-radius: 15px;
}
tr{
  background-color: none;
  border: none;
}

.nav_btn:focus{
  font-weight: bold;
  color: white;
  background-color: #264C72;
}
.main_news{
  margin-top: 40%;
  float:left;
padding: 2%;
  font-family:'Ubuntu','sans-serif';
font-size: 32px;
font-style: bold;
color:white;
text-align: center;
      background-color: hsla(268, 13%, 53%, 0.15);
transition: 0.8s;

}
.main_news:hover{
  margin-top: 30%;
  float:left;
padding: 2%;
  font-family:'Ubuntu','sans-serif';
font-size: 32px;
font-style: bold;
  color:hsl(198, 89%, 37%);
text-align: center;
    background-color: hsla(198, 0%, 97%, 0.93);
}
.heading{
  font-family: 'Raleway', sans-serif;
  color:#315580;
  font-size: 24px;
}
#form_area{
  float: left;
  font-family: 'Raleway', sans-serif;
  margin-left:25%;
  width: 100%;
  height: auto;
  margin-right: 12%;
  padding: 5%;
  border-radius: 15px;
  background-color: hsla(198, 0%, 97%, 0.93);
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
.nav a{
  font-size: 18px;
  color:white;
font-family: 'Raleway', sans-serif;
  text-decoration: none;
}
.text_box{
  border:2px solid #145D7A;
  padding:2%;
  border-radius: 12px;
  background-color: white;
  width: 50%;
}
::placeholder{
}
textarea{
  border:2px solid #145D7A;
  padding:2%;
  border-radius: 12px;
  background-color: white;
}
.form_btn{
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  border: none;
  decoration:none;
  background: none;
  color: white;
  size:auto;
  padding: 1.5%;
  border-radius: 12px;
  background-color: #315580;
}

.label_text{
  color: #315580;
  font-weight: bold;
  font-size: 20px;
}
    </style>
  </head>
  <body>
    <div class="nav" align=center>
      <div id="heading">
        <text>Unbox Events</text>
      </div>
      <a href="index.php"><button type="button" class=nav_btn>Home</button></a><br><br>
      <a href="aboutus.php"><button type="button" class=nav_btn>About Us</button></a><br><br>
      <a href="adminPg.php"><button type="button" class=nav_btn onclick="">Admin page</button></a><br><br>
    </div>

    <div class="area_left"  height=auto>
      <div id="form_area" >
        <form class="form" name=event_reg_form action="addEventdb.php" method="post" enctype="multipart/form-data">
          <fieldset class=fieldset>
              <legend align=left><text class="heading">
            <b>Event Registration </b>
            <text></legend>
            <table>
                <tr>
                  <td colspan="2" align=center>
                    <input class=text_box type="text" name="event_name" placeholder="Enter Event Name">
                  </td>
                </tr>
                <tr align=center><br>
                  <td><center><input class=text_box type="text" name="event_date" value="" placeholder="Date : YYYY-MM-DD"></center>
                  </td>
                  <td><center><input class=text_box type="text" name="event_time" value="" placeholder="Time : HH-MM [am/pm]"></center>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <input class=text_box type="text" name="event_venue" value="" placeholder="Event Venue">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <input class=text_box type="text" name="org_by" value="" placeholder="Organized By">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <label class=label_text for="event_image">Event Poster</label><br>
                    <input class=text_box type="file" name="event_image" value="" placeholder="Select the poster">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <label class=label_text for="event_desc">Event Description</label>
                    <textarea name="event_desc" rows="8" cols="70" placeholder="Please enter here.."></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <input type="reset" class="form_btn" name="" value="Cancel">
                &nbsp;&nbsp;&nbsp;
                  <input type="submit" class="form_btn" name="" value="Confirm">
                  </td>
                </tr>
      </table>
      </center>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
