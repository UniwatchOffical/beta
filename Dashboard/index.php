<!----------------- Total no of Users --------------------->

<?php
  
$con = mysqli_connect("localhost","root","","login");
  
    $sql = "SELECT * from users";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
}
  
mysqli_close($con);
  
?>

<!-------------------- Total no of Movies ------------------------>
<?php

$directory = getcwd()."../../movies";
$files1 = scandir($directory);
$num_movies = count($files1) - 2;
$movies = $num_movies - 1;

?>

<!---------------------- Total no of Animes ------------------------>
<?php

$directory = getcwd()."../../anime";  
$files1 = scandir($directory);
$num_anime = count($files1) - 2;
$anime = $num_anime - 1;


?>

<!-------------------- Total no of Live Channels ---------------->
<?php

$directory = getcwd()."../../live";
$files1 = scandir($directory);
$num_live = count($files1) - 2;
$live = $num_live - 1;

?>

<!---------------- Total no of web series---------------->
<?php

$directory = getcwd()."../../web-series";
$files1 = scandir($directory);
$web = count($files1) - 2;

?>

<!--------------------- Website Disk Space ---------------------------->

<?php

$path = "../";
  
  function foldersize($path)
{
    $size = 0;
    if ($handle = @opendir($path)) {
        while (($file = readdir($handle)) !== false) {
            if (is_file($path . "/" . $file)) {
                $size += filesize($path . "/" . $file);
            }
            if (is_dir($path . "/" . $file)) {
                if ($file != "." && $file != "..") {
                    $size += foldersize($path . "/" . $file);
                }
            }
        }
    }
    return $size;
}

$mbsize = foldersize($path) / 1000000 | 0;
$disksize = $mbsize . ' ' . ' MB';
  
?>

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!------------------------------------ Main HTML Website Start here ------------------------------------------------->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/icon..png">

    <!---------------------------- MyStyle ------------------------------>
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>

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
      .add{
          position: fixed;
          right: 60px;
          bottom: 60px;
      }
      .add button{
          width: 55px;
          height: 55px;
          border-radius: 8px;
          background: rgb(237, 240, 250);
          box-shadow: 3px 3px 14px 2px rgba(0,0,0,0.3);
          border: none;
          font-size: 25px;
          margin: 10px;
      }
      .main{
          margin-top: 80px;
          width: 100%;
      }
      .box{
          width: 250px;
          height: 200px;
          border-radius: 15px;
          box-shadow: 4px 4px 14px 4px rgba(0,0,0,0.2);
          display: inline-block;
          margin: 40px;
          background: #f6ffff;
      }
      .box h1{
          color: rgba(0,0,0,0.6);
          margin-top: 40px;
          line-height: 40px;
      }
      .box h1 i{
          font-size: 25px;
      }
      .add-title{
          position: fixed;
          bottom: 145px;
          right: 160px;
          display: none;
      }
      .add-title li{
          width: 180px;
          height: 60px;
          box-shadow: 3px 3px 12px 3px rgba(0,0,0,0.2);
          border-radius: 8px;
          margin: -3px;
          background: white;
      }
      .add-title li i{
          margin-top: 18px;
          display: inline-block;
      }

</style>

<!------------------------------ Nav-Bar --------------------------------------------------------->

<nav style="width: 100%; background: #f6ffff; box-shadow: 4px 4px 12px 4px rgba(0,0,0,0.2);" class="pc">
    <a style="font-family: 'Reggae One', cursive; line-height: 20px; font-size: 28px; color:blue;" href="#" class="logo-txt"><i style=" margin-right: 15px;" class="fa fa-film"></i><i>Uniwatch</i> <br> <i style="color: rgba(0,0,0,0.5); font-size:20px;margin-left: 120px; margin-top: -20px; line-height: 10px; display: inline-block;">Dashboard</i></a>

    <ul style="margin-top: 12px; width: 800px;" class="ul-menu pc">
    <li class="li-menu"><a href="../../">Home</a></li>
        <li class="li-menu"><a href="../">Movies</a></li>
        <li class="li-menu"><a href="../../anime">Animes</a></li>
        <li class="li-menu"><a href="../../live">Live</a></li>
        <li class="li-menu"><a href="../../account">Account</a></li>
  </ul>

</nav>


<div class="main">

<center>
<div class="box">
    <h1>Total No. of <br> <i style="color: red;"><i class="bi bi-film"> </i> Movies</i> <br> 
    <i> <?php echo "{$movies}"; ?> </i></h1>
</div>

<div class="box">
<h1>Total No. of <br> <i style="color: orange;"><i class="bi bi-cast"> </i> Web Series</i> <br> 
    <i> <?php echo "{$web}"; ?> </i></h1>
</div>

<div class="box">
<h1>Total No. of <br> <i style="color: green;"> <i class="fa fa-paw"> </i> Anime</i> <br> 
    <i> <?php echo "{$anime}"; ?> </i></h1>
</div>                                              <br>

<div class="box">
<h1>Total No. of <br> <i style="color: purple;"><i class="bi bi-tv"> </i> Live </i> <br> 
    <i> <?php echo "{$live}"; ?> </i></h1>
</div>

<div class="box">
<h1>Total No. of <br> <i style="color: blue;"><i class="fa fa-user"> </i> Users</i> <br> 
    <i> <?php echo "{$rowcount}"; ?> </i></h1>
</div>

<div class="box">
<h1>Total Website <br> <i style="color: brown;"><i class="bi bi-film"> </i> Disk Space</i> <br> 
    <i> <?php echo $disksize ?> </i></h1>
</div>
</center>

</div>



<div class="add">
<a style="display: none;" id="a1" href="movies"><button class="a1"><i style="color: red;" class="bi bi-film"></i></button></a> <br>
<a style="display: none;" id="a2" href="webseries"><button><i style="color: orange;" class="bi bi-cast"></i></button></a> <br>
<a style="display: none;" id="a3" href="anime"><button><i style="color: green;" class="fa fa-paw"></i></button></a> <br>
<a style="display: none;" id="a4" href="animeseries"><button><i style="color: purple;" class="bi bi-collection-fill"></i></button></a> <br>
<a style="display: none;" id="a5" href="#"><button onclick="add(0)"><i class="fa fa-times"></i></button></a> <br>
<a id="a6" href="#"><button onclick="add(1)"><i class="fa fa-plus"></i></button></a>
</div>

<div id="title" class="add-title"> 
    <a href="movies"><li class="t1"><center><i>Movies</i></center></li></a> <br>
    <a href="webseries"><li class="t2"><center><i>Web Series</i></center></li></a> <br>
    <a href="anime"><li class="t3"><center><i>Anime</i></center></li></a> <br>
    <a href="animeseries"><li class="t4"><center><i>Anime Series</i></center></li></a>

</div>


<script>

function add(value) {
    var show1;
    if (value == 0) {
        document.getElementById("a1").style.display = "none";
        document.getElementById("a2").style.display = "none";
        document.getElementById("a3").style.display = "none";
        document.getElementById("a4").style.display = "none";
        document.getElementById("a5").style.display = "none";
        document.getElementById("title").style.display = "none";
        document.getElementById("a6").style.display = "inline-block";
    } else {
        document.getElementById("a1").style.display = "inline-block";
        document.getElementById("a2").style.display = "inline-block";
        document.getElementById("a3").style.display = "inline-block";
        document.getElementById("a4").style.display = "inline-block";
        document.getElementById("a5").style.display = "inline-block";
        document.getElementById("a6").style.display = "none";
        document.getElementById("title").style.display = "block";
        
    }

    
}

</script>


</body>