<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: start");
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/icon..png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="MyStyle/v2.0.3/mystyle.css">
    <script src="MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title style="font-family: 'Reggae One', cursive;">Home | Uniwatch</title>

  </head>
  <body id="back" style="background: #030814; color: black;">

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
          height: 50px;
          position: fixed;
          top: 15px;
          left: 17px;
          background: #162649;
          border-radius: 4px;
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

      .slide-cont img{
            width:80%;
            height: 340px;
            border-radius: 15px;
            margin-top: 110px;
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
            border-top: 3px solid grey;
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
            margin-top: 90px;
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
            color: #05bef7;
            margin: 20px;
            display: inline-block;
            font-size: 26px;
        }

        .movie{
            width: 160px;
            display: inline-block;
            margin-left: 10px;
            margin-top: 10px;
        }

        .movie img{
            width: 150px;
            height: 210px;
            border-radius: 12px;
        }

        .movie img:hover{
            width: 160px;
            height: 220px;
            transition: 0.4s ease;
        }
        

        .movie h2{
            font-size: 14px;
            color: #05bef7;
        }
        .live-news{
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .live-news h1{
            color: #05bef7;
            margin: 20px;
            font-size: 26px;
        }

        .channel{
            display: inline-block;
            margin-left: 5px;
        }

        .channel img{
            width: 58px;
            height: 58px;
            border-radius: 50%;
        }
        .trail-list{
            margin-bottom: 80px;
        }
        .trail-list h1{
            color: #05bef7;
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
        <button onclick="theme(0)">Dark</button>
<button onclick="theme(1)">Light</button>
    </ul>

</nav>



<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i  onclick="menu(1)" class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i class="fa fa-search"></i>
</div></center>



<!---------------------------------- Slider ------------------------------------------------>

<script>

        function slide(value) {
            var img;
            if (value == 0) {
                img = "images/nowayhomeslide.jpg";
            }else if (value == 1) {
                img = "images/notimetodie.jfif"
            }
             else {
                img = "images/venom2.jpg";
            }
        
            document.getElementById('slideimg').src=img;
        }
        
        </script>

    <div class="slide-cont">
       <center>
            <img id="slideimg" src="images/nowayhomeslide.jpg" alt="">
        <br>
        <button style="margin-top: -100px;" onclick="slide(0)">1</button> <button onclick="slide(1)">2</button> <button onclick="slide(2)">3</button></center>
    </div>


    <!------------------ Movies list 1 -------------------------------------------------->
    <div class="movie-list">

    <h1 style="color: white;" id="mh">Latest Movies</h1>

   <center>
        <a href="movies/nowayhome/"><div style="" class="movie m2 m1">
            <img src="images/nowayhome.jfif" alt=""> <br>
            <h2 style="color: white;" id="mha">No Way Home</h2>
        </div></a>


        <a href="movies/notimetodie"><div class="movie">
            <img src="images/notimetodie.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhb">No Time To Die</h2>
        </div></a>


        <a href="movies/venom2"><div class="movie m2">
            <img src="images/venom2.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhc">Venom2</h2>
        </div></a>

        <a href="movies/shangchi"><div class="movie">
            <img src="images/shangchi.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhd">Shang Chi</h2>
        </div></a>

        <a href="movies/eternals"><div class="movie m2">
            <img src="images/eternals.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhe">Eternals</h2>
        </div></a>


        <a href="movies/f9"><div class="movie">
            <img src="images/f9.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhf">Fast & Furious</h2>
        </div></a>
    </div>
    </center>

 <!------------------- Live News --------------------------------------------------------------->

  <div class="live-news">

  <h1 style="color: white;" id="nh">Live News</h1> <br>

      <a href="live_news/aajtak">
          <div style="" class="channel">
              <img src="images/aajtak.jfif" alt="">
          </div>
        </a>
        
        <a href="live_news/abp">
          <div class="channel">
              <img src="images/abp.jfif" alt="">
          </div>
        </a>
        
        <a href="live_news/znews">
          <div class="channel">
              <img src="images/znews.jfif" alt="">
          </div>
        </a>

        <a href="live_news/ndtv">
          <div class="channel">
              <img src="images/ndtv.png" alt="">
          </div>
        </a>

        <a href="live_news/indiatv">
          <div class="channel">
              <img src="images/indiatv.jfif" alt="">
          </div>
        </a>
  </div>

  <!------------------------- Trailers ------------------------------------------------------->

  <div class="trail-list">

      <h1 style="color: white;" id="th">Trailers</h1> <br>

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

  <div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="#"><i id="hicon" style="color: white;" class="fa fa-home"></i></a></li>
      <li><a href="movies"><i  style="color: #fa0c0c;" class="fa fa-film"></i></a></li>
      <li><a href="live_news"><i style="color: #3d98ff;" class="fa fa-newspaper-o"></i></a></li>
      <li><a href="account"><i id="uicon" style="border-radius: 1px solid black; color: #00ff2a;" class="fa fa-user-circle"></i></a></li>
      </center>
  </div>

  <!------------------ Mobile Menu--------------------------------->

<script>

function menu(value) {
    var show;
    if (value == 0) {
        show = "none";
    } else {
        show = "inline-block";
    }

    document.getElementById('ul-menu').style.display = show;
}

</script>

<!------------------------- Theme ----------------------------------->

<script>

function theme(value) {
    var color;
    var black = "black";
    if (value == 0) {
        color = "#030814";
        document.getElementById('p').style.color = "white";
        document.getElementById('uicon').style.color = "#00ff2a";
        document.getElementById('hicon').style.color = "white";
        document.getElementById('mh').style.color = "white";
        document.getElementById('nh').style.color = "white";
        document.getElementById('th').style.color = "white";
        document.getElementById('mha').style.color = "white";
        document.getElementById('mhb').style.color = "white";
        document.getElementById('mhc').style.color = "white";
        document.getElementById('mhd').style.color = "white";
        document.getElementById('mhe').style.color = "white";
        document.getElementById('mhf').style.color = "white";
        document.getElementById('footer').style.background = "black";
    } else {
        color = "white";
        document.getElementById('p').style.color = "black";
        document.getElementById('uicon').style.color = "green";
        document.getElementById('hicon').style.color = "black";
        document.getElementById('mh').style.color = "black";
        document.getElementById('nh').style.color = "black";
        document.getElementById('th').style.color = "black";
        document.getElementById('mha').style.color = "black";
        document.getElementById('mhb').style.color = "black";
        document.getElementById('mhc').style.color = "black";
        document.getElementById('mhd').style.color = "black";
        document.getElementById('mhe').style.color = "black";
        document.getElementById('mhf').style.color = "black";
        document.getElementById('footer').style.background = "white";

    }

    document.getElementById('back').style.background = color;
    
    
}

</script>


<ul style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
<button style="width: 30px; float: right; height: 30px; border-radius: 0px;" onclick="menu(0)"><i style="font-size: 25px;" class="fa fa-times"></i></button>
<center>
<li style="list-style: none; width: 98%;  height: 50px; margin-left: 0px; margin-top: 80px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="#">Home</a></li>
<li style="list-style: none;  width: 98%;  margin-left: 0px; height: 50px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="movies">Movies</a></li>
<li style="list-style: none;  width: 98%;  height: 50px;margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="live_news">Live News</a></li>
<li style="list-style: none;  width: 98%;  height: 50px; margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="account">Account</a></li>
<p id="p" style="color: white; margin-top: 40px; font-size: 30px;">Theme</p>
<button onclick="theme(0)">Dark</button>
<button onclick="theme(1)">Light</button>
</center>
</ul>


    


</body>
</html>

    
