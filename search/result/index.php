<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../../MyStyle/v2.0.3/mystyle.css">
    <script src="../../MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title>Search - Uniwatch</title>

</head>
<body id="back" style="background: #030814; color: black;">

<?php 

$q_input = $_GET['q'];
$q = strtoupper($q_input);
?>

 <style>

        body{
            margin: 0px;
            padding: 0px;
        }

        .search-box{
            width: 100%;
            border-bottom: 2px solid grey;
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
        .item{
            width: 100%;
            padding: 20px;
            padding-top: 30px;
        }
        .item-1{
            height: 200px;
        }
        .item-1 img{
            width: 90px;
            height: 100px;
            border-radius: 15px;
            margin-right: 20px;
        }
        .item-1 h1{
            color: white;
            font-size: 30px;
        }
        </style>

<div class="search">
       <center><div class="search-box">
            <form method="GET" action="">
            <i style="margin-left: 20px;" class="fa fa-times"></i>
            <input placeholder="Search Movie, News..." value=" <?php echo "{$q_input}"; ?> " name="q" type="text">
           <button type="submit"  style=" margin-left: 10px; margin-right: 20px;"><i class="fa fa-arrow-right"></i>
            </form>
        </div></center> 
</div>

<?php

if ($q == "NO WAY HOME") { ?>
   <style>
       .s1{
           display: inline-block;
       }
       .s2{
           display: none;
       }
       .s3{
           display: none;
       }
       .s4{
           display: none;
       }
       .s5{
           display: none;
       }
       .s6{
           display: none;
       }
       .s7{
           display: none;
       }
       .no{
            display: none;
        }
   </style>
   <?php
}elseif ($q == "SPIDERMAN NO WAY HOME") { ?>
    <style>
        .s1{
            display: inline-block;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
             display: none;
         }
    </style>
    <?php
 }elseif ($q == "SPIDERMAN") { ?>
    <style>
        .s1{
            display: inline-block;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
             display: none;
         }
    </style>
    <?php
 }
elseif ($q == "NO TIME TO DIE") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: inline-block;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
        
    </style>
    <?php
 }elseif ($q == "VENOM 2") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: inline-block;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "VENOM2") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: inline-block;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }
 elseif ($q == "ETERNALS") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: inline-block;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "SHANG CHI") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: inline-block;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "SHANGCHI") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: inline-block;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "SHANG-CHI") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: inline-block;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }
 elseif ($q == "FAST AND FURIOUS 9") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: inline-block;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "FAST AND FURIOUS9") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: inline-block;
        }
        .s7{
            display: none;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }
 elseif ($q == "AAJTAK") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: inline-block;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }elseif ($q == "AAJ TAK") { ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: inline-block;
        }
        .no{
            display: none;
        }
    </style>
    <?php
 }
 else{ ?>
    <style>
        .s1{
            display: none;
        }
        .s2{
            display: none;
        }
        .s3{
            display: none;
        }
        .s4{
            display: none;
        }
        .s5{
            display: none;
        }
        .s6{
            display: none;
        }
        .s7{
            display: none;
        }
        .no{
            display: inline-block;
        }

    </style>
    <?php
 }

?>

<div class="item">
    <div class="item-1 s1">
        <img src="../../images/nowayhome.jfif" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >No Way Home <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></i></p></h1>
    </div>

    <div class="item-1 s2">
        <img src="../../images/notimetodie.jpg" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >No Time To Die <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i></p></h1>
    </div>

    <div class="item-1 s3">
        <img src="../../images/venom2.jfif" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >Venom2 <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i></i></p></h1>
    </div>

    <div class="item-1 s4">
        <img src="../../images/eternals.jfif" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >Eternals <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i></i></p></h1>
    </div>

    <div class="item-1 s5">
        <img src="../../images/shangchi.jfif" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >Shang-Chi <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i></p></h1>
    </div>
    
    <div class="item-1 s6">
        <img src="../../images/f9.jpg" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >Fast & Furious 9 <br> <p style="color: red; margin-top:5px;">Movie <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></i></p></h1>
    </div>

    <div class="item-1 s7">
        <img src="../../images/aajtak.jfif" alt="">
        <h1 style="margin-top: 0px; margin-bottom: 40px; padding: 0px; display: inline-block;" >Aaj Tak <br> <p style="color: red; margin-top:5px;">Live News <br> <i style="margin-top:20px;color: gold;" class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></i></p></h1>
    </div>
</div>

    <center><h2 class="no" style="color: white;  font-size: 28px;" class="no">Oops, No result found...</h2></center>

</body>
</html>