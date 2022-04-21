<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../start");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title style="font-family: 'Reggae One', cursive;">Live | Uniwatch</title>

  </head>
  <body style="background: #0c0335; color: black;" id="back" style="background: #030814; color: black;">

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

      .mob{
          display: none;
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
        .movie-list{
            margin-top: 120px;
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
        .news-list-A h1{
            margin: 40px;
            font-size: 37px;
        }
        .NL{
            display: inline-block;
            margin: 40px;
        }
        .NL iframe{
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
         .mlaa{
             margin-left: 40px;
         }
         .mlac{
             font-size: 18px;
         }

         .soon h1{
             margin-top: 60px;
             margin-bottom: 40px;
             font-size: 40px;
         }

         .score{
        width: 70%;
        margin: 100px;
    }
    .score img{
        width: 100%;
        height: 300px;
        border-radius: 30px;
        border: 6px solid gold;
        box-shadow: 4px 4px 10px 8px rgba(0,0,0,0.8);
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

        .movie-list{
            margin-top: 90px;
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
        .news-list-A{
            margin-bottom: 80px;
        }
        .news-list-A h1{
            color: #05bef7;
            margin: 20px;
            font-size: 26px;
        }

        .NL{
            display: inline-block;
            margin: 20px;
        }

        .NL iframe{
            width: 280px;
            height: 155px;
        }
        .m2{
            margin-left: 0px;
        }
        .mlaa{
             margin-left: 20px;
             font-size: 18px;
         }
         .mlac{
             font-size: 18px;
         }
         .soon h1{
             margin-top: 60px;
             margin-bottom: 40px;
             font-size: 34px;
         }
         .score{
        width: 90%;
        margin: 0px;
        margin-top: 80px;
        margin-bottom: 60px;
    }
    .score img{
        height: 200px;
    }

        }
      


  </style>

<nav style="background:;width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../">Home</a></li>
        <li class="li-menu"><a href="../movies">Movies</a></li>
        <li class="li-menu"><a href="../anime">Animes</a></li>
        <li class="li-menu"><a style="color: white;" href="#">Live</a></li>
        <li class="li-menu"><a href="../account">Account</a></li>
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

       <!------------------ Movies list 1 -------------------------------------------------->
    <div class="movie-list">
        <a class="mlaa" href="../">Home</a> <i id="mlab" style="color: white;" class="fa fa-angle-right"></i> <a class="mlac" href="#">Live</a> <br>

    <h1 style="color: white;" id="mh">Live Channels</h1>

   <center>
        <a href="aajtak"><div style="" class="movie m2 m1">
            <img src="../images/aajtak.jfif" alt=""> <br>
            <h2 style="color: white;" id="mha">Aaj Tak</h2>
        </div></a>


        <a href="abp"><div class="movie">
            <img src="../images/abp.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhb">ABP News</h2>
        </div></a>


        <a href="znewa"><div class="movie m2">
            <img src="../images/znews.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhc">Zee News</h2>
        </div></a>

        <a href="ndtv"><div class="movie">
            <img src="../images/ndtv.png" alt=""> <br>
            <h2 style="color: white;" id="mhd">NDTv</h2>
        </div></a>

        <a href="indiatv"><div class="movie m2">
            <img src="../images/indiatv.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhe">India Tv</h2>
        </div></a>

    </div>
    </center>

   <!--------------- Live Score -------------------------------------------------------->

  <center>
  <div class="score">
      <a href="score">
          <img src="../images/score.webp" alt="">
      </a>
  </div>
</center>
     <!------------------------- Trailers ------------------------------------------------------->

  
<div class="news-list-A">

<h1 style="color: white;" id="th">DNA Special</h1> <br>

<center>
    <a href="#">
        <div class="NL">
        <iframe src="https://www.youtube.com/embed/cPsb1th2Z8o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
        </div>
    </a>

    <a href="#">
        <div class="NL">
        <iframe src="https://www.youtube.com/embed/4z5v1tw7wSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </a>
    
</center>

</div>


 
  <!---------------- Mobile-Footer -------------------------------------------------------->

  <div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="../"><i id="hicon" class="bi bi-house-door-fill"></i></a></li>
      <li><a href="../movies"><i class="bi bi-film"></i></a></li>
      <li><a href="../anime"><i class="fas fa-paw"></i></a></li>
      <li><a href="#"><i style="color: gold;" class="bi bi-tv-fill"></i></a></li>
      <li><a href="../account"><i id="uicon" style="border-radius: 1px solid black; color: white;" class="fa fa-user-circle"></i></a></li>
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
        document.getElementById('mha').style.color = "white";
        document.getElementById('mhb').style.color = "white";
        document.getElementById('mhc').style.color = "white";
        document.getElementById('mhd').style.color = "white";
        document.getElementById('mhe').style.color = "white";
        document.getElementById('mhf').style.color = "white";
        document.getElementById('mlab').style.color = "white";
        document.getElementById('soon').style.color = "white";
        document.getElementById('footer').style.background = "black";
        document.getElementById('back').style.background = "black";
    } else {
        color = "white";
        document.getElementById('p').style.color = "white";
        document.getElementById('uicon').style.color = "green";
        document.getElementById('hicon').style.color = "black";
        document.getElementById('mh').style.color = "black";
        document.getElementById('mha').style.color = "black";
        document.getElementById('mhb').style.color = "black";
        document.getElementById('mhc').style.color = "black";
        document.getElementById('mhd').style.color = "black";
        document.getElementById('mhe').style.color = "black";
        document.getElementById('mhf').style.color = "black";
        document.getElementById('soon').style.color = "black";
        document.getElementById('footer').style.background = "white";
        document.getElementById('back').style.background = "white";

    }

    document.getElementById('back').style.background = color;
    
    
}

</script>


<div style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); z-index: 70; position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
<button style="width: 30px; float: right; height: 30px; border-radius: 0px;" onclick="menu(0)"><i style="font-size: 25px;" class="fa fa-times"></i></button>
<center>
<li style="list-style: none; width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px; margin-top: 80px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../movies">Hollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; margin-left: 0px; height: 70px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../movies">Bollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px;margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="#">News</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../anime">Japanese</a></li>
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




    


</body>
</html>

    
