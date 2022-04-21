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

    <title style="font-family: 'Reggae One', cursive;">Movies | Uniwatch</title>

  </head>
  <body id="back" style="background: #0c0335; color: black;">

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


      .blue:hover{
          background: white;
          color: black;
          transition: 0.4s ease;
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

      .profile{
          margin-top: 180px;
      }
      .profile img{
          width: 160px;
          height: 160px;
           border-radius: 50%;
      }
      .profile h1 i{
          font-size: 160px;
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

</style>

<nav style="background:;width: 100%;" class="pc">
    <a style="font-family: 'Reggae One', cursive; color:#94c6ff;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../">Home</a></li>
        <li class="li-menu"><a href="../movies">Movies</a></li>
        <li class="li-menu"><a href="../anime">Animes</a></li>
        <li class="li-menu"><a href="../live">Live</a></li>
        <li class="li-menu"><a style="color: white;" href="#">Account</a></li>
  </ul>

</nav>




<!------------------ Mobile Menu--------------------------------->

<center><div class="mob-menu mobile">
    <i  onclick="menu(1)" class="fa fa-bars"></i>
    <h2>Uniwatch</h2>
    <i class="fa fa-search"></i>
</div></center>


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

<center>
    <div class="profile">
        <img src="../images/user.png" alt=""> <br>
    <h1 style="color: white;"> Hi, <?php echo " ". $_SESSION['username']?></h1> <br>
    <a href="../logout"><button class="btn-xl blue">Logout</button></a>
    </div>
</center>

<!---------------- Mobile-Footer -------------------------------------------------------->

<div id="footer" class="mob-footer mobile">
      <center>
      <li style="margin-left: 0px;"><a href="../"><i id="hicon" class="bi bi-house-door-fill"></i></a></li>
      <li><a href="../movies"><i class="bi bi-film"></i></a></li>
      <li><a href="../anime"><i class="fas fa-paw"></i></a></li>
      <li><a href="../live"><i class="bi bi-tv-fill"></i></a></li>
      <li><a href="#"><i id="uicon" style="border-radius: 1px solid black; color: gold;" class="fa fa-user-circle"></i></a></li>
      </center>
  </div>

  <div style="display: none; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.4); z-index: 70; position: fixed; left: 0px;top: 0px; width: 68%; height: 100vh; float: right; background: #162649; margin: 0px; " id="ul-menu">
<button style="width: 30px; float: right; height: 30px; border-radius: 0px;" onclick="menu(0)"><i style="font-size: 25px;" class="fa fa-times"></i></button>
<center>
<li style="list-style: none; width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px; margin-top: 80px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../movies">Hollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; margin-left: 0px; height: 70px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../movies">Bollywood</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px;margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../live">News</a></li>
<li style="list-style: none;  width: 85%; border-bottom: 1px solid white; height: 70px; margin-left: 0px;"><a style="margin-left: 0px;color: white; text-decoration: none; margin-top: 20px; display: inline-block; font-size: 25px;" href="../anime">Japanese</a></li>
</center>
</div>


 </body>
</html>