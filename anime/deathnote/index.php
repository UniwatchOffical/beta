<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../../start");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../../images/icon..png">

    <!---------------------------- MyStyle ------------------------------>
    <link rel="stylesheet" href="../../MyStyle/v2.0.3/mystyle.css">
    <script src="../../MyStyle/v2.0.3/mystyle-icons.js"></script>

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=IBM+Plex+Sans&family=Lobster&family=Merienda+One&family=Montserrat:wght@500&family=Nunito:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,200&family=Reggae+One&display=swap" rel="stylesheet">

    
    <title>SpiderMan: No way home | Uniwatch</title>
</head>
<body style="background:#0c0335; font-family: 'Comfortaa', cursive;">

<style>

title{
        font-family: 'Reggae One', cursive;
        color: blue;
      }

nav{
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          background: #030814;
          z-index: 100;
      }

      .li-menu a{
          color: gold;
      }
      .li-menu{
          margin-top:15px;
      }

      .mob-menu{
          width: 90%;
          height: 50px;
          position: fixed;
          top: 15px;
          left: 17px;
          background: #162649;
          border-radius: 4px;
          z-index: 50;
          box-shadow: 4px 4px 8px 6px rgba(0,0,0,0.5);
      }
      .mob-menu h2{
          width: 70%;
          font-size: 30px;
          margin-top: 8px;
          color: #0099ff;
          font-family: 'Reggae One', cursive;
      }
      .mob-menu i{
          font-size: 30px;
          color: white;
      }
      .main-ban{
          background: black;
          background-repeat: no-repeat;
          width: 100%;
          height: 450px;
          margin-top: 65px;
          margin-bottom: 100px;
          box-shadow: 4px 4px 10px 10px rgba(0,0,0,0.8);
      }

      .main-ban img{
          width: 90%;
          height: 420px;
          margin-top: 10px;
          margin-left: 5%;
          box-shadow: 10px 5px 10px 10px  inset;
      }
      .main-box{
          width: 70%;
          background: black;
          height: 450px;
          box-shadow: 140px 0px 80px 90px rgba(0,0,0,0.9) inset;
          background: url(../../images/charlotte.webp);
          background-repeat: no-repeat;
          background-size: cover;
          margin-left: 80px;
          display: inline-block;
      }
      .main-btn{
          display: inline-block; 
          width: 20%; 
          margin-left: 50px;
      }
      .gold{
          background: gold;
      }
      
      .main-btn .btn{
          margin-bottom: 30px;
      }
      .main-btn .btn:hover{
          background: white;
          transition: 0.3s ease;
      }

      .space1{
          width: 180px;
          height: 100px;
      }
</style>


<!--------------------------- Nav Bar-------------------------------------------->$_COOKIE
<nav style="background:;width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
        <li class="li-menu"><a href="#">Home</a></li>
        <li class="li-menu"><a href="movies">Movies</a></li>
        <li class="li-menu"><a href="movies">Animes</a></li>
        <li class="li-menu"><a href="live_news">Live</a></li>
        <li class="li-menu"><a href="account">Account</a></li>
  </ul>

</nav>


<div class="main-ban">

<div class="main-btn">
    <a href="#"><button class="btn gold">Watch Now</button></a> <br>
    <a href="#"><button class="btn gold">Share</button></a> <br>
    <a href="#"><button class="btn gold">All Episods</button></a> <br>

    <div class="space1">. <br>. <br>. <br>. <br>. <br>. <br>.</div>
</div>

<div class="main-box"></div>

</div>

<!-------------------------- Episods----------------------------------------------->

<div class="movie-list">

    <h1 style="color: white;" id="mh">Latest Movies</h1>

   <center>
   
   <a href="ep-1"></a>


        
    </div>
    </center>



    <!------------ copy footer------------->
<div class="copyright lt-grey center">
    <p class="copyright-txt">&copy; Copyright: Uniwatch. | <a class="sslink" href="mailto:sarthaksharma750@gmail.com">by: Cybill Network.</a></p>
</div>
