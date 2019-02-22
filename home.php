<html>
<head>
  <title>Club</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    margin:0;


  }
  footer{
    height:40px;
    width: 100%;
    position: relative;
    bottom: 0;

    background-color:#dddbdb;

  }

  footer div i{
    float:left;
    color:black;
    font-size: 36px;
    padding-left: 17px;
    padding-right: 17px;
    background-color:#dddbdb;

  }

  div i:hover{
    color:#236693;
  }

  .social{
    padding-left: 40%;

    padding-top: 10px;
    background-color:#dddbdb;
    min-height: 10px;
    overflow: hidden;
  }

  .nav{
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color:#111214;
    height: 50px;
    }
    .banner{
      height:600px;
      width:800px;
      background-image: url();
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
  .slides{
    object-fit: cover;
    height: 600px;
    width:100%;

  }
  a{
    display: block;
    background-color: #111214;
    color: white;
    text-decoration: none;
    font-family:"Century Gothic";
    text-align: center;
    font-size: 20px;


   }
   li a:hover{
     color:#236693;

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
  .trophies{
    margin:3% 8% 0% 8%;
    height:100px;
  }
  .trophies img{
    float:left;
    width:10%;
    margin-left:2%;
    margin-right:2%;

  }
  .cupnames{
    margin:0% 8% 0% 8% ;
    height:100px;
    font-family:"Century Gothic";
  }
  .cupnames p{
    float: left;
    width:10%;
    margin:0% 2% 0% 2%;
    text-align: center;

  }
  .cupnum{
    margin:0% 8% 0% 8% ;
    height:50px;
    font-family:"Century Gothic";
    font-size: 30px;
    font-weight: 600;
  }
  .cupnum p{
    float: left;
    width:10%;
    margin:0% 2% 0% 2%;
    text-align: center;

  }
  .sponsors1{
    padding:1% 0% 0% 42%;
    height:100px;
    background-color:#dddbdb;
  }
  .sponsors1 img{
    padding:0% 5% 0% 0%;
    float: left;
    width:120px;
    min-height:100px;
    overflow: hidden;
  }
  .sponsors2{
    padding:0% 0% 0% 30%;
    min-height:100px;
    overflow: hidden;
    background-color:#dddbdb;
  }
  .sponsors2 img{
    padding:0% 2.5% 0% 0%;
    float: left;
    width:120;
    height:100px;
  }
  .fixture{
    width:100%;
    min-height:10px;
    overflow: hidden;
    padding-top:50px;
    padding-bottom: 50px;


  }
  .date{
    font-size: 25px;
    width: 95%;
    height:35px;
    margin-left:46%;
    padding-top: 10px;
      font-family:"Century Gothic";
  }
  .contenti{
    width:70%;
    min-height:170px;
    margin-left: 27%;
    overflow: hidden;

  }
  .contenti img{
    float: left;
  }
  .score{
    float:left;
    font-size:60px;
    padding-top: 45px;
    padding-left: 10px;
     padding-right: 10px;
     font-family:"Century Gothic";
  }
  .tname{
    float: left;
    font-size:30px;
    width:170px;
    padding-top:60px;
    margin: 0;
    padding-left: 15px;
    font-family:"Century Gothic";
  }
  .highs{

    float:left;
    padding-left:40%;
    font-family:"Century Gothic";
  }
  .highs img{
    height: 200px;
    width:200px;
    object-fit: contain;
  }
  .name{
    padding-top: 50px;
    float:left;
    font-size:38px;
    font-family:"Century Gothic";
  }
  .topno{
    float: left;
    font-size:65px;
    padding-top: 65px;
    padding-left:20px;
    font-family:"Century Gothic";
    font-weight: 600;
  }
  .stats{
    padding-left: 37%;
    font-size:35px;
      min-height:17px;
        overflow: hidden;

      color:black;
      font-family:"Century Gothic";


  }
  .stats div{
    width:15%;
    float: left;

    color:white;
    font-weight: 600;
  }
  .statspl{
      padding-left: 37%;
    font-size:60px;
      min-height:17px;
      overflow: hidden;
      padding-bottom: 50px;

      color:black;
      font-family:"Century Gothic";
  }
  .statspl div{
      width:15%;
      float: left;
      font-weight: 600;
      color:white;
  }
  .im{
    min-height: 10px;
    overflow:hidden;
    background-image: url('g.jpg');
    object-fit:scale-down;

  }
  </style>
  <script>

    var current_img=0;
    function slideshow(){
      var img=document.getElementsByClassName("slides");
      //console.log(current_img);
      //img[current_img].style.width="100%";
      //img[current_img].style.height="600px";
      console.log(img);
      img[current_img].style.display="block";
      for(var i=0;i<img.length;i++)
      {
        if(current_img!==i){
          img[i].style.display="none";
        }
      }
      current_img++;
      if(current_img==img.length){current_img=0;}
      setTimeout(slideshow,2500);
    }

  </script>
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

  <img class="slides" src="cl.jpg" >
<img class="slides" src="cr.jpg" >
<img class="slides" src="636550.jpg">
<script>slideshow();</script>
  <?php
  $con=mysqli_connect("localhost","root","summerslam","club");// Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM fixture WHERE date >= CURDATE();";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){

    ?>
  <div class="fixture" style="background-color: #111214;
  color:white;">
    <div class="date" style="margin-left:42%; font-size:40px; padding-bottom:25px; font-weight: 600; color:#236693;">Upcoming Match</div>
    <div class="date"><?php echo date('D, d F', strtotime($row['date']));?></div>
    <div class="contenti">
      <span class="tname"><?php echo $row["home"];?></span><img src="<?php echo $row['homei'] ;?>"><div class="score"> </div>
    <div class="score">  </div><img src="<?php echo $row['awayi'] ;?>"><span class="tname"><?php echo $row["away"];?></span>
    </div>
</div>

  <?php break; }?>
  <?php
  $sql="SELECT count(`sid`) AS sid, pfirst ,plast,image FROM rmscore, player WHERE player.pid=rmscore.pid GROUP BY rmscore.pid ORDER BY COUNT(sid) DESC;";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
  ?>
  <div class="fixture">
    <div class="date" style="margin-left:45.8%; font-size:40px; padding-bottom:25px; font-weight: 600; color:#236693;">Top Scorer</div>
    <div class="highs"><img src="<?php echo $row['image'] ;?>"></div>
    <div class="name"><?php echo $row['pfirst']?><br>
      <?php echo $row['plast']?>
    </div>
    <div class="topno"><?php  echo $row['sid']?></div>
  </div>
  <?php break ;}?>
  <div class="im">
  <div class="fixture" style="padding-bottom:25px; padding-top:0">
  <div class="date" style="margin-left:44%; font-size:40px; padding-bottom:25px; font-weight: 600; color:white">League Stats</div>
</div>

  <div class="stats">

    <div>M</div><div>W</div><div>L</div><div>D</div>
  </div>
  <div class="statspl">
    <div>
      <?php $sql="SELECT count(*) as val FROM fixture WHERE date < CURDATE();";
            $result = mysqli_query($con, $sql);
            $valu = mysqli_fetch_assoc($result);
            $numi=$valu['val'];
            echo $numi;
            ?>
   </div>
    <div>
      <?php $sql="SELECT count(*) as val FROM fixture WHERE date < CURDATE() and ((home='Real Madrid' and homes>aways) or (away='Real Madrid' and homes<aways));";
              $result = mysqli_query($con, $sql);
              $valu = mysqli_fetch_assoc($result);
              $numi=$valu['val'];
              echo $numi;
              ?>
    </div>
    <div>
      <?php $sql="SELECT count(*) as val FROM fixture WHERE date < CURDATE() and ((home='Real Madrid' and homes<aways) or (away='Real Madrid' and homes>aways));";
              $result = mysqli_query($con, $sql);
              $valu = mysqli_fetch_assoc($result);
              $numi=$valu['val'];
              echo $numi;
              ?>
    </div>
    <div>
      <?php $sql="SELECT count(*) as val FROM fixture WHERE date < CURDATE() and ( homes=aways);";
              $result = mysqli_query($con, $sql);
              $valu = mysqli_fetch_assoc($result);
              $numi=$valu['val'];
              echo $numi;
              ?>
    </div>
  </div>
</div>
  <div class="fixture" style="padding-bottom:25px; padding-top:0">
  <div class="date" style="margin-left:47%; font-size:40px; font-weight: 600;color:#236693;   ">Trophies</div>
  </div>
<div class="trophies">
  <img src="https://www.realmadrid.com/img/vertical_220px/copa-mundial-de-clubes_220-3.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/champions2017-10.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/liga_rm_220.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/uefa_220-3.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/copa-mundial-de-clubes_220-3.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/supercopas-de-espana_220-3.jpg">
  <img src="https://www.realmadrid.com/img/vertical_220px/copas-del-rey_220.jpg">
</div>
<div class="cupnames">
  <p>FIFA World Cup</p>
  <p>European Cups</p>
  <p>Ligas</p>
  <p>UFEA Cups</p>
  <p>Fifa World Cup</p>
  <p>Spanish Super Cups</p>
  <p>Copa Del Rey</p><br>
</div>
<div class="cupnum">
  <p>3</p>
  <p>3</p>
  <p>45</p>
  <p>12</p>
  <p>21</p>
  <p>1</p>
  <p>10</p>
</div>
<div class="fixture" style="padding-bottom:25px; padding-top:25px; background-color: #dddbdb;">
<div class="date" style="margin-left:45%; font-size:40px; background-color:#dddbdb;font-weight: 600; color:#236693;">Social Media</div>
</div>
<footer>
  <div class="social">
  <i class="fa fa-twitter" style="font-size:36px"></i>
  <i class="fa fa-youtube-play" style="font-size:36px"></i>
  <i class="fa fa-facebook-square" style="font-size:36px"></i>
  <i class="fa fa-instagram" style="font-size:36px"></i>
  <i class="fa fa-google-plus" style="font-size:36px"></i>

</div>
</footer>
<div class="fixture" style="padding-bottom:25px; padding-top:10px; background-color: #dddbdb;">
<div class="date" style="margin-left:47%; font-size:40px; background-color:#dddbdb;font-weight: 600; color:#236693;">Sponsors</div>
</div>
<div class="sponsors1">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Emirates/Emirates_byn.png">
  <img  src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Adidas/Adidas.png">
</div>
<div class="sponsors2">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Audi/Audi_byn.png">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Boss/Boss_byn.png">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/EA/EA_byn.png">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Mahou/mahou_byn.png">
  <img src="https://www.realmadrid.com/StaticFiles/RealMadrid/img/patrocinadores/Hankook/hankook_byn.png">
</div>

</body>
</html>
