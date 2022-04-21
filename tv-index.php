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

    <meta name="description" content="Uniwatch - Watch Latest Movies & News FREE">
<meta property="og:title" content="Uniwatch - Watch Latest Movies & News FREE "" /> <! — Maximum 35 characters →
<meta property="og:url" content="http://www.uniwatch.ml" /> 
<meta property="og:description" content="Uniwatch is a streaming service for watching latest movies and Live news for Free, Developed by Acrobet Inc."> 
<meta property="og:image" content="images/icon3.png"> 
<meta property="og:type" content="website" />

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

  <SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "function disabled";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>

  <!----------------- fire work ------------------------>
<div class="firework f1" id="firework1">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>
<div class="firework f2" id="firework2">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>
<div class="firework f3" id="firework3">
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
	<div class="explosion"></div>
</div>


  <style>

      title{
        font-family: 'Reggae One', cursive;
        color: blue;
      }
      .logo-txt{
          margin-left: 100px;
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
            margin-top: 130px;
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
            width: 460px;
            height: 245px;
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
         
         .sslink{
             display: inline-block;
             color: black;
             font-size: 18px;
         }

         /*------- Fire work style-------------------------*/

         .firework {
	position: absolute;
}
.explosion {
	position: absolute;
	left: -2px;
	bottom: 0;
	width: 4px;
	height: 80px;
	transform-origin: 50% 100%;
	/* background-color: rgba(0,0,0,.2); */
	overflow: hidden;
}
.explosion:nth-child(1) {
	transform: rotate(0deg) translateY(-15px);
}
.explosion:nth-child(2) {
	transform: rotate(30deg) translateY(-15px);
}
.explosion:nth-child(3) {
	transform: rotate(60deg) translateY(-15px);
}
.explosion:nth-child(4) {
	transform: rotate(90deg) translateY(-15px);
}
.explosion:nth-child(5) {
	transform: rotate(120deg) translateY(-15px);
}
.explosion:nth-child(6) {
	transform: rotate(150deg) translateY(-15px);
}
.explosion:nth-child(7) {
	transform: rotate(180deg) translateY(-15px);
}
.explosion:nth-child(8) {
	transform: rotate(210deg) translateY(-15px);
}
.explosion:nth-child(9) {
	transform: rotate(240deg) translateY(-15px);
}
.explosion:nth-child(10) {
	transform: rotate(270deg) translateY(-15px);
}
.explosion:nth-child(11) {
	transform: rotate(300deg) translateY(-15px);
}
.explosion:nth-child(12) {
	transform: rotate(330deg) translateY(-15px);
}

.firework{
    position: fixed;
}
 .firework .explosion::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	top: 100%;
	height: 40px;
}
.f1 .explosion::before{
	background-color: #ff0000;
}
.f2 .explosion::before {
	background-color: blue;
}
.f3 .explosion::before {
	background-color: green;
}
@keyframes explosion {
	0% {
		top: 100%;
	}
	33%, 100% {
		top: -50%;
	}
}

#firework1 {
	left: 50%;
	top: 50%;
	transform: scale(2);
}
#firework1 .explosion::before {
	animation: explosion 2s ease-in-out infinite;
}

#firework2 {
	left: 40%;
	top: 45%;
	transform: scale(1.5);
}
#firework2 .explosion::before {
	animation: explosion 2s .6s ease-in-out infinite;
}

#firework3 {
	left: 60%;
	top: 65%;
	transform: scale(1);
}
#firework3 .explosion::before {
	animation: explosion 2s .4s ease-in-out infinite;
}

.youtube-link {
	position: fixed;
	left: 20px;
	bottom: 20px;
	color: #fff;
	text-decoration: none;
	font-size: 12px;
}
.anime{
    margin-left: 100px;
}

.tv{
    margin-left: 80px;
}

.tv-menu{
    position: fixed;
    height: 100vh;
    box-shadow: 6px 6px 6px 6px rgba(0,0,0,0.3);
    display: inline-block;
}
.tv-menu li{
    width: 90%;
    height: 50px;
    margin-bottom: 20px;
    background: none;
}
.tv-menu li a{
    font-size: 30px;
    margin-left: 30px;
}
.tv-menu li button{
    background: none;
    border: none;
    color: white;
    margin-left: 30px;
    font-size: 30px;
}
.tv-menu li h3{
    color: white;
    margin-left: 15px;
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

        .sslink{
             color: blue;
             display: none;
         }
        .tv-menu{
             display: none;
         }
        .tv{
            margin-left: 0px;
        }

        }

        @media only screen and (min-width : 1224px){

        }
      


  </style>

  <nav  style="background:; box-shadow:4px 4px 4px 4px rgba(0,0,0,0.3); width: 100%;" class="pc">
  
    <center><a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i style="margin-right: 100px;">Uniwatch Tv</i></a></center>

    

</nav>

<!----------------------------- Tv Menu ------------------------------>

<div style="width: 80px; background: linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0.4)); " id="tvmenucont" class="tv-menu">
    <li style="margin-top: 100px;"><button id="tvbutton" onclick="tvmenu(1)" ><i class="fa fa-bars"></i></button> <h3 style="display: none;" id="tvm">Menu</h3></li>
    <li><a href="#"><i class="fa fa-home"></i> <h3 style="display: none;" id="tvhome">Home</h3></a></li>
    <li><a href="movies"><i class="fa fa-film"></i> <h3 style="display: none;" id="tvmovies">Movies</h3></a></li>
    <li><a href="live_news"><i class="fa fa-newspaper-o"></i> <h3 style="display: none;" id="tvnews">Live News</h3></a></li>
    <li><a href="#"><i onclick="search(1)" class="fa fa-search"></i> <h3 style="display: none;" id="tvsearch">Search</h3></a></li>
    <li><a href="account"><i class="fa fa-user-circle"></i> <h3 style="display: none;" id="tvuser">Account</h3></a></li>
</div>

<script>

function tvmenu(value) {
    var tvsize;
    var tvshow;
    if (value == 0) {
        tvsize = "80px";
        tvshow = "none";
        tvback = "linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0.4))"
    } else {
        tvsize = "240px";
        tvshow = "inline-block";
        tvback = "black"
    }

    document.getElementById('tvmenucont').style.width = tvsize;
    document.getElementById('tvmenucont').style.background = tvback;
    document.getElementById('tvm').style.display = tvshow;
    document.getElementById('tvhome').style.display = tvshow;
    document.getElementById('tvmovies').style.display = tvshow;
    document.getElementById('tvnews').style.display = tvshow;
    document.getElementById('tvsearch').style.display = tvshow;
    document.getElementById('tvuser').style.display = tvshow;
}
</script>

<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i  onclick="menu(1)" class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i onclick="search(1)" class="fa fa-search"></i>
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

<div onclick="tvmenu(0)" class="tv">
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


        
    </div>
    </center>

<!------------------------------- Anime ---------------------------------------------------------------->

    <div class="movie-list">

<h1 style="color: white;" id="mh">Top Animes</h1> <br>


    <a href="anime/joseetiger&fish"><div style="" class="anime movie m2 m1">
       <center> <img src="images/joseetigerandfish.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Josee, Tiger & fish</h2></center>
    </div></a>


   
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
        document.getElementById('p').style.color = "white";
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


<div style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
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
    <p class="copyright-txt">&copy; Copyright: Acrobet Inc. | <a class="sslink" href="mailto:sarthaksharma750@gmail.com">created by: Sarthak Sharma</a></p>
</div>

</div>

</body>
</html>

    
