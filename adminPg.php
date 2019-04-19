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
      font-size: 22px;
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
      background-color: hsla(198, 0%, 97%, 0.93);
        color:hsl(198, 89%, 37%);
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
    .event_poster_img{
      background-size: 100% 100%;
      box-shadow: 2px 4px 4px 2px rgba(0,0,0,0.2);
      transition: 0.8s;
      border-radius: 50px;
    }
    .addEventBtn{
        font-family: 'Raleway', sans-serif;
        font-size: 22px;
        padding: 2%;
        border:none;
        decoration:none;
        background: none;
        color: white;
        background-color:#315580;
        size:auto;
        border-radius:16px;
        font-weight: bold;
        float: right;
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
      <a href="eventReg.php"><button type="button" class=addEventBtn>Add Event</button></a>
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
            <button type="submit" formaction="adminPg.php" class=veiwbtn>View Event Detail</button>&nbsp;&nbsp;
            <button type="submit" formaction="delEventDb.php"class=delbtn>Delete Event</button>
          </form>
        </section>
      </div><br>
      <div class="detail" height=10%>
        <?php
        $ent_no_detail=$_POST["IdSelection"];
        $rslt=mysqli_query($connection,"SELECT * FROM event_reg WHERE No=$ent_no_detail");
        if($rslt){
          $result=mysqli_fetch_array($rslt);
          $event_no=$result['no'];
          $event_name=$result['event_name'];
          $event_date=$result['event_date'];
          $event_time=$result['event_time'];
          $event_venue=$result['event_venue'];
          $event_poster=$result['event_poster'];
          $org_by=$result['org_by'];
          echo "Entry Number -&nbsp; $event_no&nbsp;&nbsp; :&nbsp; $event_name&nbsp;&nbsp;$event_date&nbsp;&nbsp; $event_time&nbsp;&nbsp; $event_venue&nbsp;&nbsp; $org_by<br><br>";
      }
         ?>
      </div><br>
      <center>
          <?php
          echo "<img  class='event_poster_img' src='data:image/jpeg;base64,".base64_encode($event_poster)."' style='width:75%; '>";
           ?>
    </center>
    </div>

<?php
 ?>
  </body>
</html>
