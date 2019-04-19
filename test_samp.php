<?php $connection =mysqli_connect('localhost','root','','web_assign'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web-Based Plateform</title>
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
      margin-left: 1%;
      margin-top: 2%;
      margin-bottom: 2%;
      font-family: 'Raleway', sans-serif;
      margin-left:5%;
      height: auto;
      padding: 2%;
      border-radius: 15px;
      background-color: hsla(198, 0%, 97%, 0.93);
    }
.heading{
  font-family: 'Raleway', sans-serif;
  color:#315580;
  font-size: 20px;
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
  width: 100%;
  font-size: 24px;
}
.form_btn{
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  border: none;
  decoration:none;
  background: none;
  color: white;
  size:auto;
  padding: 5%;
  border-radius: 12px;
  background-color: #315580;
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
        <form class="form" name=login action="logInVerf.php" method="post" >
          <fieldset class=fieldset align="center">
              <legend align=center><text class="heading">
            <b>Login</b>
            <text></legend>
            <table align=center>
                <tr><br>
                  <td colspan="2" align=center>
                    <input class=text_box type="text" name="uname" placeholder="Enter Username">
                    <br><br>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <input class=text_box type="password" name="pcode" placeholder="Enter Password">
<br><br>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" align=center>
                    <input type="reset" class="form_btn" name="" value="Cancel">
                &nbsp;&nbsp;&nbsp;
                  <input type="submit" class="form_btn" name="" value="Login">
                  </td>
                </tr>
      </table>
      </center>
          </fieldset>
        </form>
    </div>


  </body>
</html>
