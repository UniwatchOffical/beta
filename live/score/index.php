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

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    
    <title> Live Score | Uniwatch</title>
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

      .mob-footer{
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 60px;
            background: black;
            box-shadow: 4px -4px 6px 4px rgba(0,0,0,0.6);
        }
         .mob-footer li{
             width: 45px;
             height:30px;
             border-radius: 50%;
             display: inline-block;
             margin-left: 20px;
             
         }
         .mob-footer li i{
             font-size: 25px;
             color: white;
             margin-top: 17px;
         }
         .mob-footer li i:hover{
             color: gold;
         }

         .main-widget{
             width: 100%;
             margin-top: 88px;
             margin-bottom: 80px;
         }
         .main-widget iframe{
             width: 90%;
             height: 450px;
             border-radius: 25px;
             margin-top: 40px;
         }

         @media only screen and (max-width: 980px){

            .main-widget{
             width: 100%;
             margin-top: 50px;
         }

         }

      </style>

      <!--------------------------- Nav Bar-------------------------------------------->
<nav style="width: 100%;" class="pc">

<a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

<ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
<li class="li-menu"><a href="../../">Home</a></li>
    <li class="li-menu"><a href="../../movies">Movies</a></li>
    <li class="li-menu"><a href="../../anime">Animes</a></li>
    <li class="li-menu"><a style="color: white;" href="../">Live</a></li>
    <li class="li-menu"><a href="../../account">Account</a></li>
</ul>

</nav>

<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i  onclick="menu(1)" class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i onclick="search(1)" class="fa fa-search"></i>
</div></center>

<!------------------ Mobile Menu java code--------------------------------->

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


<!---------------- Mobile-Footer -------------------------------------------------------->

<div id="footer" class="mob-footer mobile">
  <center>
  <li style="margin-left: 0px;"><a href="../../"><i id="hicon" class="bi bi-house-door-fill"></i></a></li>
  <li><a href="../../movies"><i class="bi bi-film"></i></a></li>
  <li><a href="../../anime"><i class="fas fa-paw"></i></a></li>
  <li><a href="../"><i style="color: gold;" class="bi bi-tv-fill"></i></a></li>
  <li><a href="../../account"><i id="uicon" style="border-radius: 1px solid black; color: white;" class="fa fa-user-circle"></i></a></li>
  </center>
</div>

<!----------------- Main Widget ----------------------------------------------------------->

<div class="main-widget">
    <center><iframe src="https://widget.crictimes.org/" frameborder="0"></iframe></center>
</div>


<div style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); z-index: 70; position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
<button style="width: 30px; float: right; height: 30px; border-radius: 0px;" onclick="menu(0)"><i style="font-size: 25px;" class="fa fa-times"></i></button>
<center>
<li style="list-style: none; width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px; margin-top: 80px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="#">Hollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; margin-left: 0px; height: 70px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="movies">Bollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px;margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="live_news">News</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="account">Japanese</a></li>

</center>
</div>

<!------------------------ Search System ---------------------------------------------------------------->

<script>

function search(value) {
    var show;
    if (value == 0) {
        show = "none";
    } else {
        show = "inline-block";
    }

    document.getElementById('search').style.display = show;
}
</script>

<style>
    .search{
        position: fixed;
        width: 100%;
        left: 0px;
        top: 0px;
    }
.search-box{
            width: 100%;
            border-bottom: 2px solid rgba(255,255,255,0.7);
        }
        .search-box input{
            margin: 0px;
            width: 62%;
            height: 37px;
            border: none;
            margin-left: 18px;
            background: #030814;
            color: white;

        }
        .search-box form{
            margin: 0px;
        }
        .search-box i{
            font-size: 28px;
            margin-top: 14px;
            color: rgba(0,0,0,0.6);
            color: white;
        }
        .search-box button{
            background: none;
            border: none;
            color: white;
        }
        .trend{
            padding: 20px;
            padding-top: 5px;
        }
        .trend li{
            width: 90%;
            text-align: left;
            height: 55px;
            border-bottom: 1.5px solid rgba(255,255,255,0.7);
        }
        .trend li a{
            color: rgba(0,0,0,0.6);
            margin-top: 15px;
            display: inline-block;
            color: white;
        }


    </style>


    <div style="display: none; background:#030814; height: 100vh;" id="search" class="search">
       <center><div class="search-box">
            <form method="GET" action="search">
            <i onclick="search(0)" style="margin-left: 20px;" class="fa fa-times"></i>
            <input placeholder="Search Movie, News..." name="q" type="text">
           <button type="submit"  style=" margin-left: 10px;margin-right: 20px;"><i class="fa fa-arrow-right"></i>
            </form>
        </div></center> 

        <div class="trend">
        <h3 style="color: white;">Trending:</h3> <br>

        <center><li><a href="movies/nowayhome"><i class="fa fa-fire"> </i> No Way Home</a></li>
        <li><a href="movies/venom2"><i class="fa fa-fire"></i> Venom 2</a></li>
        <li><a href="movies/eternals"><i class="fa fa-fire"></i> Eternals</a></li>
        <li><a href="movies/notimetodie"><i class="fa fa-fire"></i> No Time To Die</a></li>
        <li><a href="movies/shangchi"><i class="fa fa-fire"></i> Shang-Chi</a></li>
        <li><a href="movies/f9"><i class="fa fa-fire"></i> Fast & Furious 9</a></li>
    </center>

    </div>
    </div>




    <!------------ copy footer------------->
<div class="copyright lt-grey center">
    <p class="copyright-txt">&copy; Copyright: Uniwatch. | <a class="sslink" href="mailto:sarthaksharma750@gmail.com">by: Cybill Network.</a></p>
</div>



    </body>
    </html>