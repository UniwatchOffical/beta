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

    
    <title>Dashboard | Uniwatch</title>

</head>

<body>

<style>

nav{
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          z-index: 100;
          height: 72px;
      }

      .mob{
          display: none;
      }

      .li-menu a{
          color: rgba(0,0,0,0.8);
      }
      .li-menu{
          margin-top:10px;
      }
      .li-menu:hover{
          margin-top: 0px;
      }
      .li-menu:hover a{
          color: blue;
      }
      .main{
          margin-top: 100px;
      }



</style>

<!------------------------------ Nav-Bar --------------------------------------------------------->

<nav style="width: 100%; background: rgb(237, 240, 250); box-shadow: 4px 4px 12px 4px rgba(0,0,0,0.2);" class="pc">
    <a style="font-family: 'Reggae One', cursive; line-height: 20px; font-size: 28px; color:blue;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i> <br> <i style="color: rgba(0,0,0,0.5); font-size:20px;margin-left: 120px; margin-top: -20px; line-height: 10px; display: inline-block;">Dashboard</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a href="../">Movies</a></li>
        <li class="li-menu"><a href="../../anime">Animes</a></li>
        <li class="li-menu"><a href="../../live">Live</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
  </ul>

</nav>

<!----------------- Main ---------------------------------------------------------->
<div class="main">

<center>
<div style="padding: 40px; width: 45%; background:rgb(237, 240, 250); box-shadow: 4px 4px 15px 6px rgba(0,0,0,0.4);" class="cont-3">

<h1 style="font-size: 50px; color: red; font-family: 'Reggae One', cursive;">Upload Movie</h1> <br>
    <form action="config.php" method="POST">
    <label>File Name</label> <br>
        <input type="text" name="file"> <br>

        <label>Movie Name</label> <br>
        <input type="text" name="name"> <br>

        <label>Next Movie</label> <br>
        <input type="text" name="next"> <br>

        <label>Next Movie image</label> <br>
        <input type="text" name="next_img"> <br>

        <label>Second Next Movie</label> <br>
        <input type="text" name="next2"> <br>

        <label>Second Next Movie Imange</label> <br>
        <input type="text" name="next2_img"> <br>

        <label>Share link</label> <br>
        <input type="text" name="share"> <br>
        
        <label>Description 1</label> <br>
        <input type="text" name="desc_1"> <br>

        <label>Description 2</label> <br>
        <input type="text" name="desc_2"> <br>

        <label>Video Url</label> <br>
        <input type="text" name="video_url"> <br>

        <button class="btn-xl red" type="submit" name="submit"> Continue</button>
    </form>
</div>
</center>

</div>

</body>
</html>