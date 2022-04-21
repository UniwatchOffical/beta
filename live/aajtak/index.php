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
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    
    <title>AajTak | Uniwatch</title>
</head>
<body style="background: #030814;">

<style>

nav{
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          background: #030814;
      }

      .li-menu a{
          color: white;
      }
      .li-menu{
          margin-top:15px;
      }

      iframe{
          width: 100%;
          height: 420px;
          margin-top: 86px;
      }
      .detail{
          margin-left: 40px;
          margin-top: 8px;
      }
      .detail h1{
          color: white;
      }

      .recomend{
            margin-top: 30px;
            margin-bottom: 40px;
        }

        .recomend h1{
            color: white;
            margin: 40px;
            font-size: 37px;
        }

        .channel{
            display: inline-block;
            margin-left: 60px;
        }

        .channel img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .mob-footer{
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 60px;
            background: black;
            border-top: 2px solid white;
        }
         .mob-footer li{
             width: 55px;
             height:50px;
             border-radius: 50%;
             display: inline-block;
             margin-left: 20px;
             
         }
         .mob-footer li i{
             font-size: 35px;
             color: white;
             margin-top: 10px;
         }
         .mob-footer li img{
           
         }


        @media only screen and (max-width: 980px){

        iframe{
            width: 100%;
            height: 190px;
            margin-top: 0px;
      }
        
            .detail h1{
            color: white;
            font-size: 26px;
      }

      .detail{
          margin-left: 12px;
          margin-top: 0px;
      }
        
        .recomend{
            margin-top: 10px;
            margin-bottom: 80px;
        }

        .recomend h1{
            color: white;
            margin: 20px;
            font-size: 24px;
        }

        .channel{
            display: inline-block;
            margin-left: 16px;
        }

        .channel img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
    }

</style>

<!------------------------------ Nav-Bar --------------------------------------------------------->

<nav style="background:; box-shadow:4px 4px 4px 4px rgba(0,0,0,0.3); width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px;" class="ul-menu pc">
        <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a href="../../movies">Movies</a></li>
        <li class="li-menu"><a href="../">Live News</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
    </ul>

</nav>

<!-------------------------------------- Player ---------------------------------------->

<iframe src="https://www.youtube.com/embed/Cy_6-_XUW-c" title="AajTak | Uniwatch" frameborder="0" allow="accelerometer; autoplay; clipboard-write;  gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    <div class="detail">
        <h1>AajTak Live: Latest Hindi News</h1> <br>
        <a style="color: red;" href="../"><p><i class="fa fa-circle"> </i> <span> </span>Live News</p></a>
    </div>

    <hr>

    <div class="recomend">

    <h1>Recomended</h1> <br>
        
    <a href="../abp">
          <div class="channel">
              <img src="../../images/abp.jfif" alt="">
          </div>
        </a>
        
        <a href="../znews">
          <div class="channel">
              <img src="../../images/znews.jfif" alt="">
          </div>
        </a>

        <a href="../ndtv">
          <div class="channel">
              <img src="../../images/ndtv.png" alt="">
          </div>
        </a>

        <a href="../indiatv">
          <div class="channel">
              <img src="../../images/indiatv.jfif" alt="">
          </div>
        </a>
  </div>

    </div>

    <!---------------- Mobile-Footer -------------------------------------------------------->

  <div class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="#"><i style="color: #e5fd5e" class="fa fa-home"></i></a></li>
      <li><a href="#"><i  style="color: #fd5e5e;" class="fa fa-film"></i></a></li>
      <li><a href="#"><i style="color: #3d98ff;" class="fa fa-newspaper-o"></i></a></li>
      <li><a href="#"><i class="fa fa-user-circle"></i></a></li>
      </center>
  </div>

</body>
</html>