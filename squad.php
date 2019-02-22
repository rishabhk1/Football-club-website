<html>
<head>
  <style>

  body{
    margin:0;
    height:260%;
      font-family:"Century Gothic";
  }
  .clubname{
            width:170px;
            font-weight: 900;
        }
    .clogo{
      position: relative;
      bottom: 11px;
      padding-left: 20px;
    }
    .nav{
      list-style-type: none;
      margin: 0;
      padding: 0;
      background-color:black;
      height: 50px;
      }
      li{
        float:left;
        display:inline;
        width:75px;
        height:inherit;
        padding-top: 12px;
        box-sizing: border-box;
        font-weight: 500;
      }
      a{
        display: block;
        background-color: black;
        color: white;
        text-decoration: none;
        font-family:"Century Gothic";
        text-align: center;
        font-size: 20px;


       }
       li a:hover{
         color:#236693;

       }
       .squad_banner{
         height:150px;
         width:100%;
         background-color:#dddbdb;
         margin:0
       }
       .squad_banner p{
         font-size: 100px;
         padding: 20px 0 20px 5%;
         margin:0
       }
       .squad{
         margin:5% 5% 0% 4.5%;
         overflow: hidden;
         width:92%;
         min-height: 100px;

       }
       .pimg{
         height:15%;
         width:25%;
         float: left;
         object-fit:contain;



       }
       .squad p{
         float:left;
       }
       .player_name{
         width:24%;
         height:50px;
         background: linear-gradient(to left, #000000, #434343);
         color: white;
         font-size:35px;
         margin: 0;
         text-align:center;
         margin-right: 1%;
         padding-top:5px


       }
       .player_name span{
         font-size:35px
       }
       .player_info{

         width:70%;
         height:13%;
         background-color: white;
         color:#236693;
         display:none;
         float:left;

       }
       .player_info{
         line-height: 33px;
         padding-top: 45px;
         background-color:#dddbdb;
       }

       .done{
         display: none

       }
       .player_info strong{
         font-size: 20px;
         margin-left: 10%;

       }
       .player_info span{
         font-size: 25px;

       }
       .hr-sect {
	display: flex;
	flex-basis: 100%;
	align-items: center;
	color: rgba(35, 102, 147, 0.52);
	font-size: 35px;
	margin: 8px 0px;
}
.hr-sect::before,
.hr-sect::after {
	content: "";
	flex-grow: 1;
	 background: rgba(35, 102, 147, 0.52);
	height: 1px;
	font-size: 0px;
	line-height: 0px;
	margin: 0px 16px;
}

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

  <div class="nav">
          <li><img class="clogo" src="https://www.realmadrid.com/StaticFiles/RealMadrid/directo/statics/primera/Rm_peq.png"></li>
          <li class="clubname"><a href="home.php">Real Madrid</a></li>
          <li><a href="home.php">Home</a></li>
          <li><a href="squad.php">Squad</a></li>
          <li><a href="fixtures.php">Fixtures</a></li>
          <li><a href="about.html">About</a></li>

  </div>
  <div class="squad_banner">
    <p>SQUAD</p>
  </div>
  <div class="hr-sect">Players</div>
  <?php
  $con=mysqli_connect("localhost","root","summerslam","club");
  // Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM player;";
    $c="SELECT * FROM coach;";
    $result = mysqli_query($con, $sql);
    $resultc=mysqli_query($con, $c);
    $first = array();
    $last = array();
    $nation = array();
    $weight=array();
    $height=array();
    $dob =array();
    $firstc=array();
    $lastc=array();
    $special=array();

    while($row = mysqli_fetch_assoc($result)){
      array_push($first,$row["pfirst"]);
      array_push($last,$row["plast"]);
      array_push($nation,$row["pnation"]);
      array_push($dob,$row["dob"]);
      array_push($height,$row["height"]);
      array_push($weight,$row["weight"]);
    }
      while($rowc = mysqli_fetch_assoc($resultc)){
        array_push($firstc,$rowc["first"]);
        array_push($lastc,$rowc["last"]);
        array_push($special,$rowc["special"]);
      }
    ?>


<div class="squad">
    <div>
        <img class="pimg" src="squad/kelyor.jpg">
        <div class="player_info" >
          <div style="width:300px; float:left">
          <strong>Name:</strong>
          <span><?php echo $first[0]." ".$last[0] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[0];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[0]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[0]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[0]."kg";?></span></div>
          <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
        </div>
        <img class="pimg" src="squad/kiko.jpg">
        <div class="player_info">
          <div style="width:300px; float:left">
          <strong>Name:</strong>
          <span><?php echo $first[1]." ".$last[1] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[1];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[1]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[1]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[1]."kg";?></span></div>
          <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
        </div>
        <img class="pimg" src="squad/chelsea.jpg">
        <div class="player_info">
          <div style="width:300px; float:left">
          <strong>Name:</strong>
          <span><?php echo $first[2]." ".$last[2] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[2];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[2]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[2]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[2]."kg";?></span></div>
          <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
          </div>
        <img class="pimg" src="squad/luca.jpg">
        <div class="player_info">
          <div style="width:300px; float:left">
          <strong>Name:</strong>
          <span><?php echo $first[3]." ".$last[3] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[3];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[3]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[3]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[3]."kg";?></span></div>
          <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
    </div>
  </div>

    <p class="player_name"><?php echo $first[0]." ".$last[0] ;?></p>
    <p class="player_name"><?php echo $first[1]." ".$last[1] ;?></p>
    <p class="player_name"><?php echo $first[2]." ".$last[2] ;?></p>
    <p class="player_name"><?php echo $first[3]." ".$last[3] ;?></p>



    <div>

        <img class="pimg" src="squad/carvahal.jpg">
        <div class="player_info">
          <div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[4]." ".$last[4] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[4];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[4]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[4]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[4]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
      </div>
        <img class="pimg" src="squad/vallenjo.jpg">
        <div class="player_info">
          <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[5]." ".$last[5] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[5];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[5]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[5]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[5]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/ramos.jpg">
        <div class="player_info">
          <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[6]." ".$last[6] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[6];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[6]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[6]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[6]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/varane.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[7]." ".$last[7] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[7];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[7]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[7]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[7]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
    </div>
    <p class="player_name"><?php echo $first[4]." ".$last[4] ;?></p>
    <p class="player_name"><?php echo $first[5]." ".$last[5] ;?></p>
    <p class="player_name"><?php echo $first[6]." ".$last[6] ;?></p>
    <p class="player_name"><?php echo $first[7]." ".$last[7] ;?></p>



    <div>
        <img class="pimg" src="squad/nacho.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[8]." ".$last[8] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[8];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[8]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[8]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[8]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/marcelo.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[9]." ".$last[9] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[9];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[9]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[9]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[9]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/odrio.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[10]." ".$last[10] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[10];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[10]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[10]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[10]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/reg.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[11]." ".$last[11] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[11];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[11]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[11]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[11]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
    </div>
    <p class="player_name"><?php echo $first[8]." ".$last[8] ;?></p>
    <p class="player_name"><?php echo $first[9]." ".$last[9] ;?></p>
    <p class="player_name"><?php echo $first[10]." ".$last[10] ;?></p>
    <p class="player_name"><?php echo $first[11]." ".$last[11] ;?></p>



    <div>
        <img class="pimg" src="squad/kroos.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[12]." ".$last[12] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[12];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[12]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[12]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[12]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/modric.jpg">
        <div class="player_info">  <div style="width:300px; float:left"><strong>Name:</strong>
          <span><?php echo $first[13]." ".$last[13] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[13];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[13]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[13]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[13]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/casemiro.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[14]." ".$last[14] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[14];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[14]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[14]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[14]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/valve.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[15]." ".$last[15] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[15];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[15]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[15]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[15]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
    </div>
    <p class="player_name"><?php echo $first[12]." ".$last[12] ;?></p>
    <p class="player_name"><?php echo $first[13]." ".$last[13] ;?></p>
    <p class="player_name"><?php echo $first[14]." ".$last[14] ;?></p>
    <p class="player_name"><?php echo $first[15]." ".$last[15] ;?></p>

    <div>
        <img class="pimg" src="squad/lloore.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[16]." ".$last[16] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[16];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[16]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[16]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[16]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/asensio.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[17]." ".$last[17] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[17];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[17]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[17]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[17]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/isco.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[18]." ".$last[18] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[18];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[18]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[18]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[18]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/ceballs.jpg">
        <div class="player_info"><div style="width:300px; float:left">  <strong>Name:</strong>
          <span><?php echo $first[19]." ".$last[19] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[19];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[19]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[19]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[19]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
    </div>
    <p class="player_name"><?php echo $first[16]." ".$last[16] ;?></p>
    <p class="player_name"><?php echo $first[17]." ".$last[17] ;?></p>
    <p class="player_name"><?php echo $first[18]." ".$last[18] ;?></p>
    <p class="player_name"><?php echo $first[19]." ".$last[19] ;?></p>



    <div>
        <img class="pimg" src="squad/mariano.jpg">
        <div class="player_info">  <div style="width:300px; float:left"><strong>Name:</strong>
          <span><?php echo $first[20]." ".$last[20] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[20];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[20]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[20]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[20]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/benxema.jpg">
        <div class="player_info"><div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[21]." ".$last[21] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[21];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[21]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[21]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[21]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/bale.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[22]." ".$last[22] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[22];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[22]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[22]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[22]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
        <img class="pimg" src="squad/lucas.jpg">
        <div class="player_info"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $first[23]." ".$last[23] ;?></span><br>
          <strong>Nationality:</strong>
          <span><?php echo $nation[23];?></span><br>
          <strong>Date of birth:</strong>
          <span><?php echo date('d/m/Y', strtotime($dob[23]));?></span><br>
          <strong>Height:</strong>
          <span><?php echo $height[23]."m";?></span><br>
          <strong>Weight:</strong>
          <span><?php echo $weight[23]."kg";?></span></div>
        <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>
    </div>
    <p class="player_name"><?php echo $first[20]." ".$last[20] ;?></p>
    <p class="player_name"><?php echo $first[21]." ".$last[21] ;?></p>
    <p class="player_name"><?php echo $first[22]." ".$last[22] ;?></p>
    <p class="player_name"><?php echo $first[23]." ".$last[23] ;?></p>
</div>
<div class="hr-sect">Coaches</div>
  <div style="margin-top:1%; margin-bottom:0.5%;"class="squad">
    <div>
        <img class="pimg" src="squad/1.jpg">
        <div class="player_info" style="height:15%">  <div style="width:300px; float:left"><strong>Name:</strong>
          <span><?php echo $firstc[0]." ".$lastc[0] ;?></span><br>
          <strong>Area:</strong>
          <span><?php echo $special[0];?></span><br>
          <strong>Trains:</strong><br>
        <?php $q="SELECT pfirst,plast FROM player WHERE cid=1;";
              $pl=mysqli_query($con, $q);
                while($plrow = mysqli_fetch_assoc($pl)){?>
                  <span style="margin-left:10%; font-size:20px; line-height:24px;" ><?php echo $plrow["pfirst"]." ".$plrow["plast"] ;?></span><br>
                  <?php
                }
        ?>
      </div>
    <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div>
        </div>

        <img class="pimg" src="squad/2.jpg">
        <div class="player_info" style="height:15%"><div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $firstc[1]." ".$lastc[1] ;?></span><br>
          <strong>Area:</strong>
          <span><?php echo $special[1];?></span><br>
          <strong>Trains:</strong><br>
        <?php $q="SELECT pfirst,plast FROM player WHERE cid=2;";
              $pl=mysqli_query($con, $q);
                while($plrow = mysqli_fetch_assoc($pl)){?>
                  <span style="margin-left:10%; font-size:20px; line-height:24px"><?php echo $plrow["pfirst"]." ".$plrow["plast"] ;?></span><br>
                  <?php
                }
        ?></div>
      <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>

        <img class="pimg" src="squad/3.jpg">
        <div class="player_info" style="height:15%"><div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $firstc[2]." ".$lastc[2] ;?></span><br>
          <strong>Area:</strong>
          <span><?php echo $special[2];?></span><br>
          <strong>Trains:</strong><br>
        <?php $q="SELECT pfirst,plast FROM player WHERE cid=3;";
              $pl=mysqli_query($con, $q);
                while($plrow = mysqli_fetch_assoc($pl)){?>
                  <span style="margin-left:10%; font-size:20px; line-height:24px;"><?php echo $plrow["pfirst"]." ".$plrow["plast"] ;?></span><br>
                  <?php
                }
        ?></div>
      <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>

        <img class="pimg" src="squad/4.jpg">
        <div class="player_info" style="height:15%"> <div style="width:300px; float:left"> <strong>Name:</strong>
          <span><?php echo $firstc[3]." ".$lastc[3] ;?></span><br>
          <strong>Area:</strong>
          <span><?php echo $special[3];?></span><br>
          <strong>Trains:</strong><br>
        <?php $q="SELECT pfirst,plast FROM player WHERE cid=4;";
              $pl=mysqli_query($con, $q);
                while($plrow = mysqli_fetch_assoc($pl)){?>
                  <span style="margin-left:10%; font-size:20px; line-height:24px;"><?php echo $plrow["pfirst"]." ".$plrow["plast"] ;?></span><br>
                  <?php
                }
        ?></div>
      <div style=" float:left"><img style="width:75px; height:100px; padding-left:100px; padding-top:35px;opacity:1;" src="squad/en.png.png"></div></div>

    </div>
    <p class="player_name"><?php echo $firstc[0]." ".$lastc[0] ;?></p>
    <p class="player_name"><?php echo $firstc[1]." ".$lastc[1] ;?></p>
    <p class="player_name"><?php echo $firstc[2]." ".$lastc[2] ;?></p>
    <p class="player_name"><?php echo $firstc[3]." ".$lastc[3] ;?></p>
  </div>
</body>
<script>
      var open=false;
      var squadimg=$(".pimg");
      var player_info=$(".player_info");
      var  player_name=$(".player_name");
      $(".pimg").on("click",function(){

          var index=($(this).index(".pimg"))+1;
          console.log(index);
          var decide=Math.floor(index/4);
          if(index%4==0){ decide--;}
          var uplimit=(decide*4)+3;
          var lolimit=uplimit-3;
          if(lolimit<0){lolimit=0;}
          if(open==false){
              for(var i=lolimit;i<=uplimit;i++){
                if(i!=index-1){
                    $(squadimg[i]).css("display","none");

                    $(player_name).css("display","none");
                }
                $(".pimg").css("opacity","0.3");
                $(squadimg[index-1]).css("opacity","1.0");

                $(player_info[index-1]).css("display","block");

                $(player_name[index-1]).css("display","none");
                open=true;
              }
          }
          else{
            $(".pimg").css("opacity",1.0);
            $(".pimg").css("display","block");
            $(".player_info").css("display","none");
            $(".player_name").css("display","block");
            open=false;
          }
      });

</script>
</html>
