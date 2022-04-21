<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../../start");
}


?>



<?php 

$cover = "narutobg.jpg";
$ep_img = "naruto.jpg";
$anime_name = "Naruto"

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

    
    <title> <?php echo "{$anime_name}"; ?> Anime Series | Uniwatch</title>
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
          height: 86vh;
          margin-top: 65px;
          margin-bottom: 60px;
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
          height: 86vh;
          box-shadow: 60px 0px 100px 120px rgba(0,0,0,0.98) inset;
          background: url(../../images/<?php echo "{$cover}";?>);
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
      .main-btn i{
          margin-right: 12px;
      }
      .gold{
          background: gold;
      }
      
      .main-btn .btn{
          margin-bottom: 30px;
          box-shadow: 4px 4px 10px 6px rgba(0,0,0,0.5);
      }
      .main-btn .btn:hover{
          background: white;
          transition: 0.3s ease;
      }

      .space1{
          width: 180px;
          height: 100px;
      }


      .ep{
          width: 160px;
          height: 220px;
          border-radius: 20px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
          margin: 25px;
          display: inline-block;
      }
      .ep img{
          width: 160px;
          height: 220px;
          border-radius: 20px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
      }
      .ep:hover{
          border: 4px solid gold;
          transition: 0.4s ease;
          margin: 21px;
          background: url(../../images/erased.jpg);
      }
      .ep h2{
          color: gold;
          margin-top: 10px;
          display: inline-block;
          font-size: 20px;
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

/*-----//////////////////////////--------------////////////////////////////-----------------////////////////////------*/


         @media only screen and (max-width: 980px){

        .main-ban{
          background-repeat: no-repeat;
          background-size: cover;
          width: 100%;
          height: 90vh;
          margin-top: 0px;
          margin-bottom: 60px;
          box-shadow: 20px 20px 60px 60px rgba(0,0,0,0.8) inset;
      }
      .main-box{
          display: none;
      }
      .main-btn .btn{
          margin-left: 26px;
      }
      .btn1{
          margin-top: 250px;
      }

      .ep{
          width: 140px;
          height: 200px;
          border-radius: 20px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
          margin: 15px;
          display: inline-block;
      }
      .ep img{
          width: 140px;
          height: 200px;
          border-radius: 20px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
      }
      .ep:hover{
          border: 4px solid gold;
          transition: 0.4s ease;
          margin: 11px;
      }
      .ep h2{
          color: gold;
          margin-top: 10px;
          display: inline-block;
          font-size: 18px;
      }

      #viewall, #viewless{
          width: 200px;
      }


         }


</style>


<!--------------------------- Nav Bar-------------------------------------------->
<nav style="width: 100%;" class="pc">

    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a href="../../movies">Movies</a></li>
        <li class="li-menu"><a style="color: white;" href="../anime">Animes</a></li>
        <li class="li-menu"><a href="../../live">Live</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
  </ul>

</nav>

<!---------------- Mobile-Footer -------------------------------------------------------->

<div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="../../"><i id="hicon" class="bi bi-house-door-fill"></i></a></li>
      <li><a href="../../movies"><i class="bi bi-film"></i></a></li>
      <li><a href="../anime"><i style="color: gold;" class="fas fa-paw"></i></a></li>
      <li><a href="../../live"><i class="bi bi-tv-fill"></i></a></li>
      <li><a href="../../account"><i id="uicon" style="border-radius: 1px solid black; color: white;" class="fa fa-user-circle"></i></a></li>
      </center>
  </div>

<!------------------- Main Code begin here----------------------------------------------------->

<div class="main-ban">

<div class="main-btn">
    <a href="thelast"><button class="btn btn1 gold"><i class="fa fa-play"> </i> Watch Now</button></a> <br>
    <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=uniwatch.ml/anime/naruto"><button class="btn gold"><i class="fa fa-share-alt"> </i> Share</button></a> <br>
    <a href="#episod"><button onclick="hid(1)" class="btn gold"><i class="fa fa-th-large"> </i> All Movies</button></a> <br>

    <div class="space1">. <br>. <br>. <br>. <br>. <br>. <br>.</div>
</div>

<div class="main-box"></div>

</div>

<!-------------------------- Episods----------------------------------------------->

<div id="episod" style=" margin-bottom: 100px;" class="movie-list">

    <h1 style="color: white; margin-left: 20px;" id="mh">All Movies</h1>

   <center>
   
   <a href="thelast">

       <div class="ep">
           <img src="../../images/last.jpg" alt="">
           <h2>The Last</h2>
       </div>

   </a>

   <a href="thelosttower">

   <div class="ep">
           <img src="../../images/losttower.jpg" alt="">
           <h2>The Lost Tower</h2>
       </div>

   </a>

   <a href="willoffire">

   <div class="ep">
           <img src="../../images/willoffire.jpg" alt="">
           <h2>Will of fire</h2>
       </div>

   </a>

   
  


   </div>

   <br>

   <!------------ hide episode script---------------------->

   <script>

function hid(value) {
    var showep;
    if (value == 0) {
        showep = "none";
        document.getElementById('viewless').style.display = "none";
        document.getElementById('viewall').style.display = "inline-block";
    } else {
        showep = "inline-block";
        document.getElementById('viewall').style.display = "none";
        document.getElementById('viewless').style.display = "inline-block";
    }
    document.getElementById('hideepisode').style.display = showep;
}
</script>

        
    </div>
    </center>



    <!------------ copy footer------------->
<div class="copyright lt-grey center">
    <p class="copyright-txt">&copy; Copyright: Uniwatch. | <a class="sslink" href="mailto:sarthaksharma750@gmail.com">by: Cybill Network.</a></p>
</div>
