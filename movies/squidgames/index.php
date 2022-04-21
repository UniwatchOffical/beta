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

    
    <title>Squid Games| Uniwatch</title>
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

/*------------ Video Player ------------*/

         .player iframe{
             width: 100%;
             height: 480px;
             margin-top: 90px;
             background: black;
             box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.4);
             border:none;
         }
         .skp{
             position: fixed;
             right: 21%;
             top: 460px;
             width: 120px;
             height: 35px;
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
                width: 90%;
                margin-left: 40px;
                margin-top: 20px;
                margin-bottom: 80px;
            }
            .desc h1{
                font-size: 30px;
            }
            #dha{
                font-size: 25px;
            }


        @media only screen and (max-width: 980px){

        
        
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

        /*------------ Video Player ------------*/

        .player iframe{
             width: 100%;
             height: 202px;
             margin-top: 0px;
         }
         .skp{
             position: fixed;
             right: 10%;
             top: 110px;
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

    }

</style>

<!------------------------------ Nav-Bar --------------------------------------------------------->

<nav style="background:; box-shadow:4px 4px 4px 4px rgba(0,0,0,0.3); width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px;" class="ul-menu pc">
        <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a href="../../movies">Movies</a></li>
        <li class="li-menu"><a href="../../live_news">Live News</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
    </ul>

</nav>

<!-------------------------------------- Player ---------------------------------------->

<script>

function ads(value) {
    var url;
    if (value == 0) {
        url = "../videos/ad.mp4";
        document.getElementById('vid').src = "../../ads/ad1.html";
        document.getElementById('skip').style.display = "inline-block";
        document.getElementById('full').style.display = "none";
    } else {
        url = "../videos/video.mp4";
        document.getElementById('vid').src = "https://drive.google.com/file/d/18NtCUhMByuYftySZEgyO17RW1WVKMzjC/preview";
        document.getElementById('skip').style.display = "none";
        document.getElementById('full').style.display = "inline-block";
    }

    
}
</script>


<div class="player center">
<iframe id="vid" src="../../ads/ad1.html" allow="autoplay"></iframe>
<button style="display: inline-block;" onclick="ads(1)" id="skip" class="skp">Skip Ad</button>

</div>

<!----<div class="player center">
<video video-id="aklj-tdsc" id="vid" poster="../../images/nowayhomeslide.jpg" controls controlslist="nodownload" accelerometer autoplay>
    <source id="vid" type="video/mp4" src="https://s3.wasabisys.com/degoo-production-large-file-us-east1.degoo.info/gCbW8p/jrv8Dg/mp4/ChTcYEdUhJvIFckpHsImeUPR4GRj2hAA.mp4?AWSAccessKeyId=QCIW8NA9JUUC4PKQYZTJ&Expires=1641751316&Signature=r4MZqqXA1AHQ1QQXtO5g3M7zVh8%3D&ngsw-bypass=1">
</video>   
<button style="display: inline-block;" onclick="ads(1)" id="skip" class="skp">Skip Ad</button>

</div>--->


   
<!----------------------- details ------------------------------------------------------------->

   <div class="detail">
        <h1 style="color: white;" id="dha">Apex - Predatur</h1> <br>
        <a style="color: red;" href="../"><p><i class="fa fa-film"> </i> <span> </span>Movies</p></a>
        <p style="color: grey;">Uniwatch Rating: <i style="color: gold;" class="fa fa-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i></i></p>
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

    <div class="desc">
        <h1 style="color: white;" id="dhb">Description</h1> <br>
        <p id="dpa" style="color: white;">Apex is a 2021 American science fiction action film directed by Edward John Drake and written by John Drake and Corey William Large. It stars Neal McDonough and Bruce Willis and was released on November 12, 2021. <a style="display:inline-block;" onclick="des(1)" id="daa">Read More...</a></p>
        <p id="dpb" style="color: white; display: none;">Serving a life sentence for a crime he didn't commit, former cop Thomas Malone gets a chance to win his freedom if he can survive a twisted game. Six killers pay for the thrill of hunting Malone for sport on a remote island, but once he arrives, all hell breaks loose. Laying traps and playing mind games, he soon turns the tables on the goons who want him dead.</p>
    </div>


    <!----<div class="recomend">

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

    </div>------>

    <!---------------- Mobile-Footer -------------------------------------------------------->

    <div id="footer" class="mob-footer mobile">
    <center>
      <li style="margin-left: 0px;"><a href="../../"><i id="hicon" style="color: white;" class="fa fa-home"></i></a></li>
      <li><a href="../"><i  style="color: #fa0c0c;" class="fa fa-film"></i></a></li>
      <li><a href="../../live_news"><i style="color: #3d98ff;" class="fa fa-newspaper-o"></i></a></li>
      <li><a href="../../account"><i id="uicon" style="border-radius: 1px solid black; color: #00ff2a;" class="fa fa-user-circle"></i></a></li>
      </center>
  </div>




</body>
</html>