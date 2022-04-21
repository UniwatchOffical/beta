<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../images/icon..png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title style="font-family: 'Reggae One', cursive;">Home | Uniwatch</title>

  </head>
  <body style="background: #030814;">

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
      }

      .li-menu a{
          color: white;
      }
      .li-menu{
          margin-top:15px;
      }

      .mob-menu{
          width: 90%;
          height: 40px;
          position: fixed;
          top: 17px;
          left: 17px;
          background: #162649;
          border-radius: 4px;
      }
      .mob-menu h2{
          width: 70%;
          font-size: 25px;
          margin-top: 5px;
          color: #0099ff;
          font-family: 'Reggae One', cursive;
      }
      .mob-menu i{
          font-size: 23px;
          color: white;
      }

      .slide-cont img{
            width:80%;
            height: 320px;
            border-radius: 15px;
            margin-top: 120px;
        }
        .slide-cont button{
            width: 30px;
            height: 30px;
            border-radius: 5px;
            background: blue;
            border: white;
            margin: 12px;
            color: white;
        }
        .movie-list h1{
            color: white;
            margin: 40px;
            display: inline-block;
            font-size: 37px;
        }

        .movie{
            width: 180px;
            display: inline-block;
            margin-left: 40px;
            margin-top: 10px;
        }

        .movie img{
            width: 160px;
            height: 220px;
            border-radius: 16px;
        }
        .movie img:hover{
            width: 180px;
            height: 220px;
            transition: 0.4s ease;
        }
        .movie img:hover .movie{
            margin-top: 0px;
        }

        .movie h2{
            font-size: 20px;
            color: white;
        }

        .live-news{
            margin-top: 60px;
            margin-bottom: 40px;
        }

        .live-news h1{
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
        .trail-list h1{
            color: white;
            margin: 40px;
            font-size: 37px;
        }
        .trail{
            display: inline-block;
            margin: 40px;
        }
        .trail iframe{
            width: 560px;
            height: 315px;
        }
        .m1{
            margin-left: 0px;
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

            .slide-cont img{
            width:90%;
            height: 180px;
            border-radius: 15px;
            margin-top: 80px;
        }
        .slide-cont button{
            width: 24px;
            height: 24px;
            border-radius: 5px;
            background: blue;
            border: white;
            margin: 8px;
            color: white;
        }

        .movie-list h1{
            color: white;
            margin: 20px;
            display: inline-block;
            font-size: 26px;
        }

        .movie{
            width: 120px;
            display: inline-block;
            margin-left: 30px;
            margin-top: 10px;
        }

        .movie img{
            width: 110px;
            height: 150px;
            border-radius: 12px;
        }

        .movie img:hover{
            width: 120px;
            height: 150px;
            transition: 0.4s ease;
        }
        

        .movie h2{
            font-size: 14px;
            color: white;
        }

        .live-news{
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .live-news h1{
            color: white;
            margin: 20px;
            font-size: 26px;
        }

        .channel{
            display: inline-block;
            margin-left: 16px;
        }

        .channel img{
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .trail-list{
            margin-bottom: 80px;
        }
        .trail-list h1{
            color: white;
            margin: 20px;
            font-size: 26px;
        }

        .trail{
            display: inline-block;
            margin: 20px;
        }

        .trail iframe{
            width: 280px;
            height: 155px;
        }
        .m2{
            margin-left: 0px;
        }

        }
      


  </style>

  <nav style="background:; box-shadow:4px 4px 4px 4px rgba(0,0,0,0.3); width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px;" class="ul-menu pc">
        <li class="li-menu"><a href="#">Home</a></li>
        <li class="li-menu"><a href="movies">Movies</a></li>
        <li class="li-menu"><a href="live_news">Live News</a></li>
        <li class="li-menu"><a href="account">Account</a></li>
    </ul>

</nav>



<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i class="fa fa-search"></i>
</div></center>



<!---------------------------------- Slider ------------------------------------------------>

<script>

        function slide(value) {
            var img;
            if (value == 0) {
                img = "../images/nowayhomeslide.jpg";
            }else if (value == 1) {
                img = "../images/notimetodie.jfif"
            }
             else {
                img = "../images/venom2.jpg";
            }
        
            document.getElementById('slideimg').src=img;
        }
        
        </script>

    <div class="slide-cont">
       <center>
            <img id="slideimg" src="../images/nowayhomeslide.jpg" alt="">
        <br>
        <button style="margin-top: -100px;" onclick="slide(0)">1</button> <button onclick="slide(1)">2</button> <button onclick="slide(2)">3</button></center>
    </div>


    <!------------------ Movies list 1 -------------------------------------------------->
    <div class="movie-list">

    <h1>Latest Movies</h1>

   <center>
        <a href="#"><div style="" class="movie m2 m1">
            <img src="../images/nowayhome.jfif" alt=""> <br>
            <h2>No Way Home</h2>
        </div></a>


        <a href="#"><div class="movie">
            <img src="../images/notimetodie.jpg" alt=""> <br>
            <h2>No Time To Die</h2>
        </div></a>


        <a href="#"><div class="movie m2">
            <img src="../images/venom2.jfif" alt=""> <br>
            <h2>Venom2</h2>
        </div></a>

        <a href="#"><div class="movie">
            <img src="../images/shangchi.jfif" alt=""> <br>
            <h2>Shang Chi</h2>
        </div></a>

        <a href="#"><div class="movie m2">
            <img src="../images/eternals.jfif" alt=""> <br>
            <h2>Eternals</h2>
        </div></a>


        <a href="#"><div class="movie">
            <img src="../images/blackwidow.jpg" alt=""> <br>
            <h2>Black Widow</h2>
        </div></a>
    </div>
    </center>

 <!------------------- Live News --------------------------------------------------------------->

  <div class="live-news">

  <h1>Live News</h1> <br>

      <a href="#">
          <div style="" class="channel">
              <img src="../images/aajtak.jfif" alt="">
          </div>
        </a>
        
        <a href="#">
          <div class="channel">
              <img src="../images/abp.jfif" alt="">
          </div>
        </a>
        
        <a href="#">
          <div class="channel">
              <img src="../images/znews.jfif" alt="">
          </div>
        </a>

        <a href="#">
          <div class="channel">
              <img src="../images/ndtv.png" alt="">
          </div>
        </a>

        <a href="#">
          <div class="channel">
              <img src="../images/indiatv.jfif" alt="">
          </div>
        </a>
  </div>

  <!------------------------- Trailers ------------------------------------------------------->

  <div class="trail-list">

      <h1>Trailers</h1> <br>

      <center>
          <a href="#">
              <div class="trail">
              <iframe  src="https://www.youtube.com/embed/Hi4ktzK9g0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </a>

          <a href="#">
              <div class="trail">
              <iframe  src="https://www.youtube.com/embed/hzerUSVFxlg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </a>
          
      </center>

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

    
