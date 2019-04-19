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
      font-size: 22px;
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
    #scrolLparent{
      overflow: hidden;
    }
    .area_right{
      float:left;
      width: 35%;
      height: 100%;
      margin-left: 1%;
      margin-top: 2%;
      margin-bottom: 2%;

    }
    .cards::-webkit-scrollbar {
  display: none;
}
.event_card {
      margin-left: 10%;
      background-color: hsla(206, 57%, 90%, 0.5);
      box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
      transition: 0.5s;
      border-radius: 48px;
      overflow: auto;
      width: 90%;
}


.event_card:hover {
box-shadow: 12px 16px 16px 12px rgba(0,0,0,0.2);
border-radius: 15px;
margin-left: 3%;
}
img {
border-radius: 15px;
}
.event_img{
  width: 50%;
  height: auto;
  float: right;
}
.event_detail{
  float:left;
padding: 3%;
font-family: 'Raleway', sans-serif;
font-size: 14px;
font-weight: bold;
color: white;
width:auto;
}
.event_detail:hover{
  float:left;
padding: 3%;
font-family: 'Raleway', sans-serif;
font-size: 14px;
font-weight: bold;
color:white;
}

.cards{
  height: 95%;
overflow-y: auto;
margin-top: 1px;
}
.event_poster_img{
  background-size: 100% 100%;
  box-shadow: 2px 4px 4px 2px rgba(0,0,0,0.2);
  transition: 0.8s;
  border-radius: 50px;
  opacity: 0.9;
}
.event_poster_img:hover{
  box-shadow: 12px 16px 16px 12px rgba(0,0,0,0.2);
  border: none;
  border-radius: 30px;
  opacity: 1;
}
td{
  background-color:none ;
  border-radius: 15px;
}
tr{
  background-color: none;
  border: none;
}
.sort_btn:focus{
  color: white;
  background-color: #264C72;
  box-shadow: 2px 4px 8px 2px rgba(0,0,0,0.2);
}
.nav_btn:focus{
  font-weight: bold;
  color: white;
  background-color: #264C72;
}
.main_news{
display: run-in;
  float:left;
padding: 3%;
  font-family:'Ubuntu','sans-serif';
font-size: 32px;
font-style: bold;
color: white;
text-align: center;
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
      <a href="logIn.php"><button type="button" class=nav_btn onclick="">Admin page</button></a><br><br>
    </div>

    <div class="area_left" width=55% height=auto>
      <?php
      $query="SELECT * FROM event_reg ORDER BY event_date";
      $result=mysqli_query($connection,$query);
      $cards_no=mysqli_num_rows($result);
  $num=0;
  $cards=mysqli_fetch_array($result);
    $event_no=$cards['no'];
    $event_name=$cards['event_name'];
    $event_date=$cards['event_date'];
    $event_time=$cards['event_time'];
    $event_venue=$cards['event_venue'];
    $event_poster=$cards['event_poster'];
    $event_org=$cards['org_by'];
       ?>
      <table width=100% height=100%>
          <tr>
            <td width=100% height=40% >
              <?php echo '<img width=100% class="event_poster_img" src="data:image/jpeg;base64,'.base64_encode($event_poster).'">'; ?>
            </td>
          </tr>
          <tr>
            <td width=100% height=auto class=main_news>
              <?php
              echo "$event_name<br>";
              echo "$event_date<br>";
              echo "$event_time<br>";
              echo "$event_venue<br>";
              echo "$event_org<br>";
               ?>
            </td>
          </tr>
        </table>
    </div>
    <div class="area_right" >
        <div class="cards">
          <?php
          if($cards_no>0){
            while ($cards=mysqli_fetch_array($result)) {
              $event_no=$cards['no'];
              $event_no=array($event_no, );
               $event_no=base64_encode(serialize($event_no));
              $event_name=$cards['event_name'];
              $event_date=$cards['event_date'];
              $event_time=$cards['event_time'];
              $event_venue=$cards['event_venue'];
              $event_poster=$cards['event_poster'];
              $event_org=$cards['org_by'];
              echo '<a href="eventPg.php?e_num='.$event_no.'">';
              echo "<div class='event_card'>
                    <div class='event_detail'>
                      <h7>$event_name</h7><br><br>
                      <text>$event_date &nbsp;&nbsp;$event_time</text><br><br>
                      <text>$event_venue</text><br>
                      <text>$event_org</text>
                    </div>";
              echo "<div class='event_img'>
          <img src='data:image/jpeg;base64,".base64_encode($event_poster)."' style='width:100%; '>
              </div>
            </div><br>";
            echo "</a>";

            }
          }
           ?>
        </div>
      </div>

  </body>
</html>
