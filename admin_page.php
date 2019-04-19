<?php
 $connection=mysqli_connect('localhost','root','','web_assign');
 $query="SELECT * FROM event_reg";
 $rslt=mysqli_query($connection,$query);
 ?>
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
    .detail{
      font-family: 'Raleway', sans-serif;
      font-size: 16px;
      padding: 2%;
      border:none;
      decoration:none;
      background: none;
      color: hsla(197, 100%, 29%, 0.8);
      size:auto;
      border-radius: 12px;
      font-weight: bold;
    }
    .tble{
      font-family:'Ubuntu','sans-serif';
      text-align: left;
    position: sticky;
    border-radius: 15px;
    background-color:  white;
    padding: 0.5%;
    }

    .area_right{
      font-family:'Ubuntu','sans-serif';
      padding: 2%;
      text-align: left;
      float:left;
      width: 50%;
      height: 90%;
      margin-left: 1%;
        background-color:  hsla(206, 57%, 90%, 0.5);
        border-radius: 15px;
    }
    .sort_btn{
      font-family: 'Raleway', sans-serif;
      font-size: 16px;
      padding: 0.5%;
      border:none;
      decoration:none;
      background: none;
      color: hsla(197, 100%, 29%, 0.8);
      size:auto;
      border-radius: 12px;
      font-weight: bold;
    }
    .delbtn{
      font-family: 'Raleway', sans-serif;
      font-size: 14px;
      padding: 1%;
      border:none;
      decoration:none;
      background: none;
      color: white;
      background-color: hsla(359, 74%, 36%, 0.96);
      size:auto;
      border-radius:16px;
      font-weight: bold;
    }
    .select_event{
      font-family: 'Raleway', sans-serif;
      font-size: 16px;
      padding: 0.5%;
      border:none;
      decoration:none;
      background: none;
      color: hsla(197, 100%, 29%, 0.8);
      size:auto;
      border-radius: 12px;
    }
    .veiwbtn{
      font-family: 'Raleway', sans-serif;
      font-size: 14px;
      padding: 1%;
      border:none;
      decoration:none;
      background: none;
      color: white;
      background-color:#315580;
      size:auto;
      border-radius:16px;
      font-weight: bold;

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
    <div class="area_right" >
      <div class="tble" height=10%>
        <section align='center' >
          <form class="" method="post">
            <label for="IdSelection" class="">Please Select Event</label>
            <select class="select_event" name="IdSelection">
              <?php
        $select=mysqli_query($connection,"SELECT no,event_name FROM event_reg");
        while($select_rst=mysqli_fetch_array($select))
        {
          echo '<option value="'.$select_rst['no'].'">'.$select_rst['event_name'].'</option>';
        }
               ?>
            </select>
            <button type="button" onclick="" class=veiwbtn>View Event Detail</button>&nbsp;&nbsp;
            <button type="submit" class=delbtn>Delete Event</button>
          </form>
        </section>
      </div><br>
      <div class="detail" height=10%>
        <?php
        while ($result=mysqli_fetch_array($rslt)) {
        $event_no=$result['no'];
        $event_name=$result['event_name'];
        $event_date=$result['event_date'];
        $event_time=$result['event_time'];
        $event_venue=$result['event_venue'];
        $faculty=$result['faculty'];
        $org_by=$result['org_by'];
        echo "$event_no&nbsp;&nbsp;$event_name&nbsp;&nbsp;$event_date&nbsp;&nbsp; $event_time&nbsp;&nbsp; $event_venue&nbsp;&nbsp; $faculty&nbsp;&nbsp; $org_by<br><br>";
      }
         ?>
      </div><br>

    </div>

<?php
 ?>
  </body>
</html>
