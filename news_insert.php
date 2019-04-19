
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organize Event</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Varela+Round" rel="stylesheet">
    <style media="screen">
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
    .heading{
      font-family: 'Raleway', sans-serif;
      color:#315580;
      font-size: 24px;
    }
    #form_area{
      float: left;
      font-family: 'Raleway', sans-serif;
      margin-left:5%;
      width: 50%;
      height: auto;
      margin-right: 12%;
      padding: 1%;
      border-radius: 15px;
      background-color: hsla(206, 57%, 90%, 0.5);
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
    text{
      color: grey;
    }
    .label_text{
      color: #315580;
      font-weight: bold;
      font-size: 20px;
    }
    .faculty{
      color: #0B86AC;
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
    <div id="form_area" width=60% height=100% >
      <form class="form" name=event_reg_form action="event_reg_dbcon.php" method="post" enctype="multipart/form-data">
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
                  <label class=label_text for="faculty_name">Select Faculty</label><br>
                  <text class=faculty>Computing</text><input type=radio name=faculty_name value=Computing>
                  <text class=faculty>Engineering</text><input type=radio name=faculty_name value=Engineering>
                  <text class=faculty>Business</text><input type=radio name=faculty_name value=Business>
                <text class=faculty>Arts</text><input type=radio name=faculty_name value=Arts>
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
<?php
 ?>
  </body>
</html>
