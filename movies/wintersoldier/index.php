<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../../start");
}


?>



<?php

$anime_name = "Winter Soldier";
$next = "../civilwar";
$next_img="civilwar.jpg";
$next2 = "../doctorstrange";
$next2_img="drstrange.jpg";
$cat = "Movie";
$share = "https://www.facebook.com/sharer/sharer.php?u=uniwatch.ml/movies/wintersoldier";
$desc_1 = "Captain America: The Winter Soldier is a 2014 American superhero film based on the Marvel Comics character Captain America, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the sequel to Captain America: The First Avenger (2011) and the ninth film in the Marvel Cinematic Universe (MCU). ";
$desc_2 = "Two years after the Battle of New York,[N 1] Steve Rogers works in Washington, D.C., for the espionage agency S.H.I.E.L.D., while adjusting to contemporary society. During a mission alongside Agent Natasha Romanoff and S.H.I.E.L.D.'s counter-terrorism S.T.R.I.K.E. team, led by Agent Brock Rumlow, to free hostages aboard a S.H.I.E.L.D. vessel from pirates led by Georges Batroc, Rogers discovers Romanoff has another agenda: to extract data from the ship's computers. Returning to the Triskelion, S.H.I.E.L.D.'s headquarters, Rogers confronts Director Nick Fury and is briefed about Project Insight: three Helicarriers linked to spy satellites.";
$video_url = "https://drive.google.com/file/d/1bLF07hl8gflnY0Ou3eB0DpI-n4yT9hbE/preview";

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

    
    <title><?php echo "{$anime_name}"; ?> | Uniwatch</title>
</head>
<body style="background:#0c0335; font-family: 'Comfortaa', cursive;">


<style>

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
          font-size: 40px;
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

/*------------ Video Player ------------*/

         .player{
             height: 86vh;
         }         

         .player iframe{
             width: 100%;
             height: 86vh;
             margin-top: 86px;
             background: black;
             box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.4);
             border:none;
             margin-bottom: 0px;
         }
         .skp{
             position: relative;
             right: -320px;
             top: -80px;
             width: 180px;
             box-shadow: 4px 4px 8px 3px rgba(0,0,0,0.7);
             z-index: 20;
             height: 50px;
             border-radius: 10px;
             background: #030814;
             color: white;
             font-size: 18px;
             border: 5px solid #030814;
            }
            .full{
                position: fixed;
                right: 10px;
                top: 540px;
            }

            .desc{
                width: 85%;
                margin-left: 60px;
                margin-top: 60px;
                margin-bottom: 80px;
                border-radius: 20px;
                box-shadow: 4px 4px 8px 6px rgba(0,0,0,0.4);
                background:#403068;
                padding: 30px;
            }
            .desc h1{
                font-size: 30px;
            }.desc p{
                line-height: 30px;
            }

            .ep{
          width: 160px;
          height: 220px;
          border-radius: 20px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
          display: inline-block;
          margin: 30px;
          margin-top: 30px;
          margin-bottom: 120px;
      }
      .ep img{
          border-radius: 16px;
          height: 220px;
          width: 100%;
      }
     
      .ep:hover{
          border: 4px solid gold;
          transition: 0.4s ease;
          margin: 26px;
      }
      .ep h2{
          color: gold;
          margin-top: 10px;
          display: inline-block;
          font-size: 20px;
      }
      
      .gold{
          background: gold;
      }

      .mob-details .title{
          color: white;
          font-size: 32px;
          margin-left: 20px;
      }
      .mob-details h1 h2{
          font-size: 18px;
          color: rgba(255,255,255, 0.6);
          margin-top: 8px;
      }
      .mob-details button{
          width: 130px;
          height: 38px;
          font-size: 18px;
          box-shadow: 4px 4px 8px 4px rgba(0,0,0,0.4);
          margin-top: 20px;
      }
      .mob-details .ep{
          width: 110px;
          height: 180px;
      }


        @media only screen and (max-width: 980px){
        
            .detail h1{
            color: white;
            font-size: 26px;
      }

      .mob{
          display: inline-block;
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

        /*------------ Video Player ------------*/

        .player{
            margin-bottom: 20px;
            height: 202px;
        }

        .player iframe{
             width: 100%;
             height: 202px;
             margin-top: 0px;
             margin-bottom: 0px;
         }
         .skp{
             position: relative;
             right: -100px;
             top: -112px;
             width: 120px;
             height: 35px;
             background: #030814;
             color: white;
             font-size: 18px;
             border: 5px solid #030814;
            }
            .full{
                position: fixed;
                right: 15px;
                top: 170px;
            }

            .desc{
                width: 90%;
                margin-left: 12px;
                margin-top: 20px;
                margin-bottom: 80px;
            }
            .desc h1{
                font-size: 25px;
            }
            .desc p{
                font-size: 16px;
            }
            .desc p a{
                font-size: 19px;
            }
            .ep{
                width: 140px;
                margin: 15px;
                height: 200px;
            }
            .ep img{
                height: 200px;
            }
            .ep:hover{
                margin: 11px;
            }

            .movie-list button{
                width: 200px;
            }

    }

</style>

<!------------------------------ Nav-Bar --------------------------------------------------------->

<nav style="background:;width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a style="color: white;" href="../">Movies</a></li>
        <li class="li-menu"><a href="../../anime">Animes</a></li>
        <li class="li-menu"><a href="../../live">Live</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
  </ul>

</nav>

<!-------------------------------------- Player ---------------------------------------->

<script>

function ads(value) {
    var url;
    if (value == 0) {
        url = "../videos/ad.mp4";
        document.getElementById('vid').src = "./../videos/ad.mp4";
        document.getElementById('skip').style.display = "inline-block";
        document.getElementById('next').style.display = "none";
    } else {
        url = "../videos/video.mp4";
        document.getElementById('vid').src = "https://play.vidyard.com/tHH6z3D5CaXgAcCFtbRdXo";
        document.getElementById('skip').style.display = "none";
        
    }

    
}

</script>

<script>

function morefunc(value) {
    if (value == 0) {
        document.getElementById('moredetail').style.display = "none";
        document.getElementById('moreup').style.display = "none";
        document.getElementById('moredown').style.display = "inline-block";
    } else {
        document.getElementById('moredetail').style.display = "inline-block";
        document.getElementById('moreup').style.display = "inline-block";
        document.getElementById('moredown').style.display = "none";
    }

    
}

</script>

<script>

function ads(value) {
    var url;
    if (value == 0) {
        url = "../videos/ad.mp4";
        document.getElementById('vid').src = "../../ads/ad1.html";
        document.getElementById('skip').style.display = "inline-block";
        document.getElementById('full').style.display = "none";
        document.getElementById('nxt').style.display = "none";
    } else {
        url = "../videos/video.mp4";
        document.getElementById('vid').src = "<?php echo "{$video_url}"; ?>";
        document.getElementById('skip').style.display = "none";
        document.getElementById('full').style.display = "inline-block";
        document.getElementById('nxt').style.display = "inline-block";
    }

    
}
</script>


<div class="player center">
<iframe id="vid" src="https://www.dailymotion.com/embed/video/x87irrn?autoplay=1" allow="autoplay"></iframe>
<button style="display: inline-block;" onclick="ads(1)" id="skip" class="skp">Skip Ad</button>
<a class="" title="View Details" href="#moredetail"><button style=" color: black; border-radius: 50%; background: gold; width: 60px; height: 60px;" onclick="morefunc(1)" id="moredown" class="skp pc"><i class="fa fa-arrow-down"> </i> </button></a>
<button title="Hide Details" style="display: none; position: fixed; right:260px; top: 88%; color: black; border-radius: 50%; background: gold; width: 60px; height: 60px;" onclick="morefunc(0)" id="moreup" class="skp pc"><i class="fa fa-arrow-up"> </i> </button>
<a href=" <?php echo "{$next}"; ?> "><button style=" width: 200px; height: 50px; border-radius: 10px;" id="nxt" class="skp pc">Next movie <i class="fa fa-step-forward"> </i> </button></a>
</div>

<!----<div class="player center">
<video video-id="aklj-tdsc" id="vid" poster="../../images/nowayhomeslide.jpg" controls controlslist="nodownload" accelerometer autoplay>
    <source id="vid" type="video/mp4" src="https://s3.wasabisys.com/degoo-production-large-file-us-east1.degoo.info/gCbW8p/jrv8Dg/mp4/ChTcYEdUhJvIFckpHsImeUPR4GRj2hAA.mp4?AWSAccessKeyId=QCIW8NA9JUUC4PKQYZTJ&Expires=1641751316&Signature=r4MZqqXA1AHQ1QQXtO5g3M7zVh8%3D&ngsw-bypass=1">
</video>   
<button style="display: inline-block;" onclick="ads(1)" id="skip" class="skp">Skip Ad</button>

</div>--->


   <div class="pc" style="display: none;" id="moredetail">
<!----------------------- details ------------------------------------------------------------->

   <div style="margin-top: 140px;" id="detail" class="detail">
        <h1 style="color: white; display: inline-block;" id="dha"><?php echo "{$anime_name}"; ?></h1> <br>
        <a style="color: lightgreen;" href="../"><p><i class="fa fa-film"> </i> <span> </span><?php echo "{$cat}"; ?></p></a>
        <p style="color: grey;">Uniwatch Rating: <i style="color: gold;" class="fa fa-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></i></p>
    </div>

    <hr style="width: 90%; margin-top: 40px; background: lightgrey;">
    <!------------------ Description ----------------------->
    <script>

function des(value) {
    var show;
    if (value == 0) {
        show = "none";
    } else {
        show = "inline-block";
        document.getElementById('daa').style.display = "none";
    }
    document.getElementById('dpb').style.display = show;
}
</script>

<script>

function des2(value) {
    var show2;
    if (value == 0) {
        show2 = "none";
    } else {
        show2 = "inline-block";
        document.getElementById('daa2').style.display = "none";
    }
    document.getElementById('dpb2').style.display = show2;
}
</script>

    <div class="desc">
        <h1 style="color: white;" id="dhb">Description</h1> <br>
        <p id="dpa" style="color: white;"> <?php echo "{$desc_1}"; ?> <a style="display:inline-block;" onclick="des(1)" id="daa">Read More...</a></p>
        <p id="dpb" style="color: white; display: none;"><?php echo "{$desc_2}"; ?></p>
    </div>




<!-------------------------- suggested pc ----------------------------------------------->

<div style="margin-bottom: 40px;" id="episod" class="movie-list">

    <h1 style="color: white; margin-left: 20px;" id="mh">Suggested:</h1> <br>


    <a href="<?php echo "{$next}"; ?>">

<div class="ep">
     <img src="../../images/<?php echo "{$next_img}"; ?>" alt="">
 </div>

</a>

<a href="<?php echo "{$next2}"; ?>">

<div class="ep">
     <img src="../../images/<?php echo "{$next2_img}"; ?>" alt="">
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

<!------------ hide mobile episode script---------------------->

<script>

function hid2(value) {
    var showep2;
    if (value == 0) {
        showep2 = "none";
        document.getElementById('viewless2').style.display = "none";
        document.getElementById('viewall2').style.display = "inline-block";
    } else {
        showep2 = "inline-block";
        document.getElementById('viewall2').style.display = "none";
        document.getElementById('viewless2').style.display = "inline-block";
    }
    document.getElementById('hideepisode2').style.display = showep2;
}
</script>

        
    </div>


</div>



<!---//--//--//--//--//--//--//--Mobile Details------------//////////////////////---------------/////////////////////--------->

<div class="mob">

<div class="mob-details">

<h1 class="title"><b><?php echo "{$anime_name}"; ?></b>  <br>
<a style="color: lightgreen;" href="../../"><p style="display: inline-block;"><i style="" class="fa fa-film"> </i> <span> </span><?php echo "{$cat}"; ?></p></a>
<p style="color: grey;display: inline-block;"><i style="color: gold; font-size: 18px;display: inline-block;" class="fa fa-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></i></p> <br>
</h1>

<center>
<a href=" <?php echo "{$next}"; ?> "><button class="btn black">Next <i class="fa fa-step-forward"> </i> </button></a>
<a href="<?php echo "{$share}"; ?>" target="blank;"><button class="btn black">Share <i class="fa fa-share-alt"> </i> </button></a>
</center>
</div>
<center>
<div style="width: 82%; margin-left: 0px; padding: 15px;" class="desc">
        <h1 style="color: white;" id="dhb2">Description</h1> <br>
        <p id="dpa2" style="color: white;"><?php echo "{$desc_1}"; ?> <a style="display:inline-block;" onclick="des2(1)" id="daa2">Read More...</a></p>
        <p id="dpb2" style="color: white; display: none;"> <?php echo "{$desc_2}"; ?> </p>
    </div></center>

<!-------------------------- Suggested ---------------------------------------------->

<div style="margin-bottom: 80px;" id="episod" class="movie-list">

    <h1 style="color: white; margin-left: 20px;" id="mh">Suggested:</h1>

   <center>
   

   <a href="<?php echo "{$next}"; ?>">

      <div class="ep">
           <img src="../../images/<?php echo "{$next_img}"; ?>" alt="">
       </div>

   </a>

   <a href="<?php echo "{$next2}"; ?>">

   <div class="ep">
           <img src="../../images/<?php echo "{$next2_img}"; ?>" alt="">
       </div>

   </a>

   <!-------------------->

   <div style="display: none;" id="hideepisode2">


   <a href="../ep-4">

       <div class="ep">
           <h2>Episode: 4</h2>
       </div>

   </a>

   <a href="../ep-5">

       <div class="ep">
           <h2>Episode: 5</h2>
       </div>

   </a>

   <a href="../ep-6">

       <div class="ep">
           <h2>Episode: 6</h2>
       </div>

   </a>

   <a href="../ep-7">

       <div class="ep">
           <h2>Episode: 7</h2>
       </div>

   </a>

   <a href="../ep-8">

       <div class="ep">
           <h2>Episode: 8</h2>
       </div>

   </a>

   <a href="../ep-9">

       <div class="ep">
           <h2>Episode: 9</h2>
       </div>

   </a>

   <a href="../ep-10">

       <div class="ep">
           <h2>Episode: 10</h2>
       </div>

   </a>

   <a href="../ep-11">

       <div class="ep">
           <h2>Episode: 11</h2>
       </div>

   </a>

   <a href="../ep-12">

       <div class="ep">
           <h2>Episode: 12</h2>
       </div>

   </a>

   <a href="../ep-13">

       <div class="ep">
           <h2>Episode: 13</h2>
       </div>

   </a>


   </div>

   <br>


        
    </div>
    </center>


    <!------------ copy footer------------->
<div class="copyright lt-grey center">
    <p class="copyright-txt">&copy; Copyright: Uniwatch. | <a class="sslink" href="mailto:sarthaksharma750@gmail.com">by: Cybill Network.</a></p>
</div>

</div>

    <!---------------- Mobile-Footer -------------------------------------------------------->

    <div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="../../"><i id="hicon" class="bi bi-house-door-fill"></i></a></li>
      <li><a href="../"><i style="color: gold;" class="bi bi-film"></i></a></li>
      <li><a href="../../anime"><i class="fas fa-paw"></i></a></li>
      <li><a href="../../live"><i class="bi bi-tv-fill"></i></a></li>
      <li><a href="../../account"><i id="uicon" style="border-radius: 1px solid black; color: white;" class="fa fa-user-circle"></i></a></li>
      </center>
  </div>




</body>
</html>