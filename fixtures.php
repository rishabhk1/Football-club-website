<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  body{
    margin:0;
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
       .fixture{
         width:100%;
         min-height:200px;
         overflow: hidden;

       }
       .date{
         font-size: 25px;
         width: 95%;
         height:35px;
         margin-left:5%;
         padding-top: 10px;
         font-weight:500;
       }
       .content{
         width:75%;
         min-height:170px;
         padding-left: 25%;
         overflow: hidden;


       }
       .contenti{
         width:70%;
         min-height:170px;
         margin-left: 27%;
         overflow: hidden;

       }
       .home{
         float: left;
       }
       .content img{
         float:left;
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
          font-weight: 600;
       }
       .tname{
         float: left;
         font-size:30px;
         width:170px;
         padding-top:60px;
         margin: 0;
         padding-left: 15px;
       }
       .scorecard{
         padding-left:40%;
         width:60%;
         min-height: 100px;
         overflow:hidden;
         display: none;
         background-color:#dddbdb;

       }
       .scorecard div{
         padding-top: 10px;
         min-height: 100px;
         overflow: hidden;
         width:30%;
         float: left;
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
.fa-soccer-ball-o{
    float:left;
    font-size:25px;
    display:block;
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
    <p>FIXTURES</p>
  </div>
  <div class="hr-sect">Results</div>
  <?php
  $con=mysqli_connect("localhost","root","summerslam","club");// Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT * FROM fixture WHERE date < CURDATE();";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
    ?>
  <div class="fixture">
    <div class="date"><?php echo date('d F-Y', strtotime($row['date']));?></div>
    <div class="content">
      <span class="tname"><?php echo $row["home"];?></span><img src="<?php echo $row['homei'] ;?>"><div class="score"><?php echo $row["homes"]; ?></div>
    <div class="score"><?php echo $row["aways"]; ?></div><img src="<?php echo $row['awayi'] ;?>"><span class="tname"><?php echo $row["away"];?></span>
    </div>
  </div>
  <div class="scorecard">
    <div>
  <?php
    $matchno=$row['fid'];
    $sql1="SELECT pfirst,min from rmscore, player where player.pid=rmscore.pid AND fid=$matchno ;";
  $result1 = mysqli_query($con, $sql1);
  while($row1 = mysqli_fetch_assoc($result1)){
  ?>

   <i class="fa fa-soccer-ball-o"></i><?php echo $row1["pfirst"]." ".$row1["min"]."'";?><br>
    <?php }?>
  </div>
  <div>
    <?php
      $matchno=$row['fid'];
      $sql2="SELECT name,min from ascore, awayplayer where awayplayer.pid=ascore.pid AND fid=$matchno ;";
    $result2 = mysqli_query($con, $sql2);
    while($row2 = mysqli_fetch_assoc($result2)){
    ?>

     <i class="fa fa-soccer-ball-o"></i><?php echo $row2["name"]." ".$row2["min"]."'";?><br>
      <?php }?>

</div>
<div>
<?php
$matchno=$row['fid'];
$sql1="SELECT pfirst,min from rmscore, player where player.pid=rmscore.pid AND fid=$matchno ;";
$result1 = mysqli_query($con, $sql1);
while($row1 = mysqli_fetch_assoc($result1)){
?>

 <i class="fa fa-soccer-ball-o"></i><?php echo $row1["pfirst"]." ".$row1["min"]."'";?><br>
<?php }?>
</div>
</div>

  <?php }?>
  <div class="hr-sect">To Be Played</div>
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
  <div class="fixture">
    <div class="date"><?php echo date('d F-Y', strtotime($row['date']));?></div>
    <div class="contenti">
      <span class="tname"><?php echo $row["home"];?></span><img src="<?php echo $row['homei'] ;?>"><div class="score"> </div>
    <div class="score">  </div><img src="<?php echo $row['awayi'] ;?>"><span class="tname"><?php echo $row["away"];?></span>
    </div>
  </div>

  <?php }?>
  <script>
      var open=false;
      var match=$(".content");
      var match_info=$(".scorecard");

      $(".fixture").on("click",function(){

        var index=($(this).index(".fixture"));
        console.log(index);
        if(open==false && ($(".score")[2*index].innerText!="0" || $(".score")[(2*index)+1].innerText!="0"))
        {
        $(match_info[index]).css("display","block");
        open=true;
          if($(".tname")[2*index].innerText!="Real Madrid"){
            console.log(4);
              $($( "div.scorecard div" )[(index*3)]).css("display","none");
          }
          else{
            $($( "div.scorecard div" )[index*3+2]).css("display","none");
          }
      }

      else {
        $(".scorecard").css("display","none");
        open=false;
      }


      });

  </script>
</body>
</html>
