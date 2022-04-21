<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: start");
}


?>

<!------------ View Tracker ----------------------------------->

<!-- Hitsteps TRACKING CODE - Manual 2022-04-06 - DO NOT CHANGE -->
<script type="text/javascript">(function(){var hstc=document.createElement('script'); hstc.src='https://log.hitsteps.net/track.php?code=cdc4654ca30ff26082fc30778133673b';hstc.async=true;var htssc = document.getElementsByTagName('script')[0];htssc.parentNode.insertBefore(hstc, htssc);})();
</script><noscript><a href="http://www.hitsteps.com/"><img src="//log.hitsteps.net/track.php?mode=img&amp;code=cdc4654ca30ff26082fc30778133673b" alt="visitor activity tracker" width="1" height="1" />website tracking</a></noscript>
<!-- Hitsteps TRACKING CODE - DO NOT CHANGE -->

<?php
include('view/Mobile_Detect.php');
include('view/BrowserDetection.php');
include('view/db.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}else{
	$os='Window';
}

$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
$sql="insert into visitor(browser_name,browser_version,type,os,url,ref) values('$browser_name','$browser_version','$type','$os','$url','$ref')";
mysqli_query($con,$sql);
?>

<!---------------------------- End of view tracker ----------------------------------------->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Uniwatch - Watch Latest Movies & News FREE">
<meta property="og:title" content="Uniwatch - Watch Latest Movies & News FREE " /> <! — Maximum 35 characters →
<meta property="og:url" content="http://www.uniwatch.ml" /> 
<meta property="og:description" content="Uniwatch is a streaming service for watching latest movies and Live news for Free, Developed by Acrobet Inc."> 
<meta property="og:image" content="images/icon3.png"> 
<meta property="og:type" content="website" />

    <link rel="shortcut icon" href="images/icon..png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!------------------------ Google Fonts ---------------------------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=IBM+Plex+Sans&family=Lobster&family=Merienda+One&family=Montserrat:wght@500&family=Nunito:ital,wght@1,300&family=Poppins:ital,wght@0,300;1,200&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="MyStyle/v2.0.3/mystyle.css">
    <script src="MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title style="font-family: 'Reggae One', cursive;">Home | Uniwatch</title>

    <meta name="theme-color" content="#0e2968">

  </head>

  <body id="back" style="background:#0c0335; color: black;  font-family: 'Comfortaa', cursive;">

  <SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "function disabled";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>





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
          background: #010311;
          z-index: 100;
      }

      .li-menu a{
          color: gold;
          font-family: 'Comfortaa', cursive;
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
        .movie-list{
            margin-top: 80px;
        }
        .movie-list h1{
            margin: 40px;
            display: inline-block;
            font-size: 37px;
            font-family: 'Comfortaa', cursive;
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
            box-shadow: 3px 3px 8px 5px rgba(0,0,0,0.5);
            background:#21174b;
        }
        .movie img:hover{
            width: 180px;
            height: 220px;
            transition: 0.4s ease;
            border: 4px solid gold;
        }
        .movie img:hover .movie{
            margin-top: 0px;
        }

        .movie h2{
            font-size: 20px;
            color: white;
            font-family: 'Comfortaa', cursive;
        }

        .live-news{
            margin-top: 60px;
            margin-bottom: 40px;
        }

        .live-news h1{
            margin: 40px;
            font-size: 37px;
            font-family: 'Comfortaa', cursive;
        }

        .channel{
            display: inline-block;
            margin-left: 60px;
        }

        .channel img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            box-shadow: 4px 4px 8px 6px rgba(0,0,0,0.6);
            transition: 0.2s ease;
        }
        .channel img:hover{
            border: 4px solid gold;
        }

        .trail-list h1{
            margin: 40px;
            font-size: 37px;
            font-family: 'Comfortaa', cursive;
        }
        .trail{
            display: inline-block;
            margin: 40px;
        }
        .trail iframe{
            width: 560px;
            height: 315px;
            border-radius: 20px;
            box-shadow: 3px 3px 6px 4px rgba(0,0,0,0.2);
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
         
         .sslink{
             display: inline-block;
             color: black;
             font-size: 18px;
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
    margin-left: 40px;
}

#hcg-slider-1 .hcg-slide-container {
      width: 72%;
      height: 390px;
      margin-top: 120px;
      border: none;
      box-shadow: 4px 4px 10px 8px rgba(0,0,0,0.4);
      border: 8px solid gold;
    }
    .hcg-slider {
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      border: none;
    }
    .hcg-slide-container {
      width: 100%;
      background-color: #21174b;
      border-radius: 21px;
      display: inline-block;
      position: relative;
    }
    .hcg-slides {
      display: none;
      text-align: center;
      overflow: hidden;
      width: 100%;
    }
    .hcg-slides img {
      width: 100%;
      height: 375px;
      display: inline-block;
      border-radius: 5px;
      vertical-align: middle;
      border-radius: 12px;
      
    }
    .hcg-slide-text {
      color: black;
      box-shadow: 3px 3px 8px 8px rgba(0,0,0,0.4);
      font-size: 18px;
      padding: 3px 5px;
      position: absolute;
      bottom: 0;
      border-radius: 5px;
      left: 50%;
      text-align: center;
      text-shadow: 0 0 2px #000;
      background-color: gold;
      display: inline-block;
      transform: translate(-50%, -15px);
    }
    .hcg-slide-dot-control {
      margin-top: 10px;
      text-align: center;
    }
    .hcg-slide-dot {
      cursor: pointer;
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
    }
    .hcg-slide-dot.dot-active {
      background-color: gold;
    }
    .hcg-slide-number {
      color: #ffffff;
      font-size: 12px;
      padding: 4px 7px;
      position: absolute;
      border-radius: 5px;
      top: 5px;
      left: 5px;
      background-color: rgba(255,255,255,0.30);
    }
    /************CSS Animation***********/
    
    .animated { 
      animation-name: fadeIn; 
      animation-duration: 1s;
    }
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    .fadeIn {
      animation-name: fadeIn;
    }

    .adblock1{
        width: 70%;
        height: 150px;
        border-radius: 20px;
        border: 4px solid gold;
        background: white;
        margin-top: 90px;
        margin-bottom: 60px;
    }
    .adblock1 h1{
        margin-top: 55px;
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

         #hcg-slider-1 .hcg-slide-container {
      width: 85%;
      height: 180px;
      margin-top: 90px;
      border: none;
      box-shadow: 4px 4px 10px 8px rgba(0,0,0,0.4);
      border: 4px solid gold;
    }
    .hcg-slides img {
      width: 100%;
      height: 172px;
      display: inline-block;
      border-radius: 5px;
      vertical-align: middle;
      border-radius: 15px;
      
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
        <li class="li-menu"><a style="color: white;" href="#">Home</a></li>
        <li class="li-menu"><a href="movies">Movies</a></li>
        <li class="li-menu"><a href="anime">Animes</a></li>
        <li class="li-menu"><a href="live">Live</a></li>
        <li class="li-menu"><a href="account">Account</a></li>
        <button id="moon" style="color: white; display: none; border: none; background: none; font-size: 25px; margin-left: 40px; " onclick="theme(0)"><i class="fa fa-moon"></i></button>
        <button id="sun" style="margin-left: 20px;  border: none; background: none; font-size: 25px; margin-left: 40px; color: white;" onclick="theme(1)"><i class="fa fa-sun"></i></button>
    </ul>

</nav>



<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i  onclick="menu(1)" class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i onclick="search(1)" class="fa fa-search"></i>
</div></center>



<!---------------------------------- Slider ------------------------------------------------>

<center><div id="hcg-slider-1" class="hcg-slider">
  <center><div class="hcg-slide-container">
    <div class="hcg-slider-body">
      <a class="hcg-slides animated" style="display:block">
        <span class="hcg-slide-number">1/5</span>
        <img src="https://www.html-code-generator.com/images/slider/1.png" alt="image 1">
        <span class="hcg-slide-text">image 1</span>
      </a>
    </div>
  </div></center>
  <div class="hcg-slide-dot-control"></div>
  </div>
</center>
  
  <script>
    (function(){
    //If you want to include more images, add the link name and URL of the image in the array list below.
      let images_list = [
        {"url":"images/kashmirefiles-slide.avif","name":"The Kashmir Files","link":"movies/kashmirfiles"},
        {"url":"images/moonknightbg.jpg","name":"Marvel's Moon Knight","link":"movies/moonknight"},
        {"url":"images/nowayhomeslide.jpg","name":"Spiderman: No Way Home","link":"movies/nowayhome"},
        {"url":"images/narutoslide.jpg","name":"Naruto Anime Movies","link":"anime/naruto"},
        {"url":"images/notimetodie.jfif","name":"James Bond: No Time To Die","link":"movies/notimetodie"},
      ];
    
      let slider_id = document.querySelector("#hcg-slider-1");
    
      // append all images
      let dots_div = "";
      let images_div = "";
      for (let i = 0; i < images_list.length; i++) {
        // if no link without href="" tag
        let href = (images_list[i].link == "" ? "":' href="'+images_list[i].link+'"');
        images_div += '<a'+href+' class="hcg-slides animated"'+(i === 0 ? ' style="display:block"':'')+'>'+
                '<span class="hcg-slide-number">'+(i+1)+'/'+images_list.length+'</span>'+
                '<img src="'+images_list[i].url+'" alt="'+images_list[i].name+'">'+
                '<span class="hcg-slide-text">'+images_list[i].name+'</span>'+
               '</a>';
        dots_div += '<span class="hcg-slide-dot'+(i === 0 ? ' dot-active':'')+'" data-id="'+i+'"></span>';
      }
      slider_id.querySelector(".hcg-slider-body").innerHTML = images_div;
      slider_id.querySelector(".hcg-slide-dot-control").innerHTML = dots_div;
    
      let slide_index = 0;
    
      let images = slider_id.querySelectorAll(".hcg-slides");
      let dots = slider_id.querySelectorAll(".hcg-slide-dot");
      function showSlides() {
        if (slide_index > images.length-1) {
          slide_index = 0;
        }
        if (slide_index < 0) {
          slide_index = images.length-1;
        }
        for (let i = 0; i < images.length; i++) {
          images[i].style.display = "none";
          dots[i].classList.remove("dot-active");
          if (i == slide_index) {
            images[i].style.display = "block";
            dots[i].classList.add("dot-active");
          }
        }
      }
    
      function dot_click(event) {
        slide_index = event.target.dataset.id;
        showSlides();
      }
    
      for (let i = 0; i < dots.length; i++) {
        dots[i].addEventListener("click", dot_click, false);
      }
      setInterval(function(){
        slide_index++;
        showSlides();
      }, 4000);
    
    })();
    </script>

    <!------------------ Movies list 1 -------------------------------------------------->
    <div class="movie-list">

    <h1 style="color: white;" id="mh">Latest Movies</h1>

   <center>
   <a href="movies/kashmirfiles"><div class="movie  m2 m1">
            <img src="images/kashmirfiles.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhf">Kashmir Files</h2>
        </div></a>

        <a href="movies/nowayhome/"><div style="" class="movie">
            <img src="images/nowayhome.jfif" alt=""> <br>
            <h2 style="color: white;" id="mha">No Way Home</h2>
        </div></a>


        <a href="movies/matrix"><div class="movie">
            <img src="images/matrix.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhd">Matrix</h2>
        </div></a>


        <a href="movies/notimetodie"><div class="movie">
            <img src="images/notimetodie.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhb">No Time To Die</h2>
        </div></a>


        <a href="movies/venom2"><div class="movie m2">
            <img src="images/venom2.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhc">Venom 2</h2>
        </div></a>


        <a href="movies/eternals"><div class="movie m2">
            <img src="images/eternals.jfif" alt=""> <br>
            <h2 style="color: white;" id="mhe">Eternals</h2>
        </div></a>


        
    </div>
    </center>

    <!------------------ Movies list 3 -------------------------------------------------->
    <div class="movie-list">

    <h1 style="color: white;" id="mh">Bollywood Movies</h1>

   <center>
   <a href="movies/rrr"><div class="movie  m2 m1">
            <img src="images/rrr2.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhf">RRR</h2>
        </div></a>

        <a href="movies/attack/"><div style="" class="movie">
            <img src="images/attack.jpg" alt=""> <br>
            <h2 style="color: white;" id="mha">Attack</h2>
        </div></a>


        <a href="movies/bachandey"><div class="movie">
            <img src="images/bachanpandey.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhd">Bachan Pandey</h2>
        </div></a>


        <a href="movies/pushpa"><div class="movie">
            <img src="images/pushpa.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhb">Pushpa</h2>
        </div></a>


        <a href="movies/83"><div class="movie m2">
            <img src="images/83.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhc">83</h2>
        </div></a>


        <a href="movies/kashmirfiles"><div class="movie m2">
            <img src="images/kashmirfiles.jpg" alt=""> <br>
            <h2 style="color: white;" id="mhe">Kashmir Files</h2>
        </div></a>


        
    </div>
    </center>


     <!------------------ Movies list 2 -------------------------------------------------->
     <div style="margin-top: 50px;" class="movie-list">

<h1 style="color: white;" id="mh">Hollywood Movies</h1>

<center>
    <a href="movies/freeguy"><div style="" class="movie m2 m1">
        <img src="images/freeguy.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Free Guy</h2>
    </div></a>


    <a href="movies/dune"><div class="movie">
        <img src="images/dune.png" alt=""> <br>
        <h2 style="color: white;" id="mhb">Dune</h2>
    </div></a>


    <a href="movies/apex"><div class="movie m2">
        <img src="images/apex.jfif" alt=""> <br>
        <h2 style="color: white;" id="mhc">Apex</h2>
    </div></a>

    <a href="movies/sucidesquad"><div class="movie">
        <img src="images/squidgames.jpg" alt=""> <br>
        <h2 style="color: white;" id="mhd">Sucide Squad</h2>
    </div></a>

    <a href="movies/blackwidow"><div class="movie m2">
        <img src="images/blackwidow.jfif" alt=""> <br>
        <h2 style="color: white;" id="mhe">Black Widow</h2>
    </div></a>


    <a href="movies/f9"><div class="movie">
        <img src="images/f9.jpg" alt=""> <br>
        <h2 style="color: white;" id="mhf">Fast & Furious</h2>
    </div></a>
</div>
</center>


<!-------------------------------- Ad-Block-1 -------------------------------------->

<center><div class="adblock1">
    <h1>This is an Ad</h1>
</div></center>

<!------------------------------- Anime ---------------------------------------------------------------->

    <div class="movie-list">

<h1 style="color: white;" id="mh">Top Animes</h1> <br>

<center>
    <a href="anime/joseetiger&fish"><div style="margin-left: 14px;" class="anime movie">
       <center> <img src="images/joseetigerandfish.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Josee, Tiger</h2></center>
    </div></a>
    <a href="anime/charlotte"><div style="" class="anime movie">
       <center> <img src="images/charlotteep.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Charlotte</h2></center>
    </div></a>
    <a href="anime/yourname"><div style="" class="anime movie">
       <center> <img src="images/yourname.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Your Name</h2></center>
    </div></a>
    <a href="anime/naruto"><div style="" class="anime movie">
       <center> <img src="images/naruto.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Naruto</h2></center>
    </div></a>
    <a href="anime/erased"><div style="" class="anime movie">
       <center> <img src="images/erased.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Erased</h2></center>
    </div></a>
    <a href="anime/weathringwithyou"><div style="" class="anime movie">
       <center> <img src="images/weathring.jpg" alt=""> <br>
        <h2 style="color: white;" id="mha">Weathring with...</h2></center>
    </div></a>
</center>

</div>
   
 <!------------------- Live News --------------------------------------------------------------->

  <div class="live-news">

  <h1 style="color: white;" id="nh">Live News</h1> <br>

      <a href="live/aajtak">
          <div style="" class="channel">
              <img src="images/aajtak.jfif" alt="">
          </div>
        </a>
        
        <a href="live/abp">
          <div class="channel">
              <img src="images/abp.jfif" alt="">
          </div>
        </a>
        
        <a href="live/znews">
          <div class="channel">
              <img src="images/znews.jfif" alt="">
          </div>
        </a>

        <a href="live/ndtv">
          <div class="channel">
              <img src="images/ndtv.png" alt="">
          </div>
        </a>

        <a href="live/indiatv">
          <div class="channel">
              <img src="images/indiatv.jfif" alt="">
          </div>
        </a>
  </div>


  <!--------------- Live Score -------------------------------------------------------->

  <center>
  <div class="score">
      <a href="live/score">
          <img src="images/score.webp" alt="">
      </a>
  </div>
</center>

  <!------------------------- Trailers ------------------------------------------------------->

  <div class="trail-list">

      <h1 style="color: white;" id="th">Trailers</h1> <br>

      <center>
          <a href="#">
              <div class="trail">
              <iframe  src="https://www.youtube.com/embed/-mjWrrKgwJM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </a>

          <a href="#">
              <div class="trail">
              <iframe  src="https://www.youtube.com/embed/JKa05nyUmuQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </a>
          
      </center>

  </div>

  <!---------------- Mobile-Footer -------------------------------------------------------->

  <div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="#"><i style="color: gold;" id="hicon" class="bi bi-house-door-fill"></i></a></li>
      <li><a href="movies"><i class="bi bi-film"></i></a></li>
      <li><a href="anime"><i class="fas fa-paw"></i></a></li>
      <li><a href="live"><i class="bi bi-tv-fill"></i></a></li>
      <li><a href="account"><i id="uicon" style="border-radius: 1px solid black; color: white;" class="fa fa-user-circle"></i></a></li>
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
        color = "#0c0335";
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
        document.getElementById('moon').style.display = "none";
        document.getElementById('sun').style.display = "inline-block";
    } else {
        color = "rgb(216, 232, 252)";
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
        document.getElementById('moon').style.display = "inline-block";
        document.getElementById('sun').style.display = "none";

    }

    document.getElementById('back').style.background = color;
    
    
}

</script>


<div style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); z-index: 70; position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
<button style="width: 30px; float: right; height: 30px; border-radius: 0px;" onclick="menu(0)"><i style="font-size: 25px;" class="fa fa-times"></i></button>
<center>
<li style="list-style: none; width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px; margin-top: 80px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="movies">Hollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; margin-left: 0px; height: 70px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="movies">Bollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px;margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="live">News</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="anime">Japanese</a></li>

<button style="background: none; margin: 5px; margin-top: 40px; font-size: 25px; display: inline-block; border: none; color: white;" id="sun" onclick="theme(1)"><i class="fa fa-sun"></i></button>
<button  style="background: none; margin: 5px; margin-top: 40px; font-size: 25px; display: inline-block; border: none; color: white;" id="moon" onclick="theme(0)"><i class="fa fa-moon"></i></button>
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

    
