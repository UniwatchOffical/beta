<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>
    <title>Document</title>
</head>
<body>

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
        }
        .search-box form{
            margin: 0px;
        }
        .search-box i{
            font-size: 28px;
            margin-top: 14px;
            color: rgba(0,0,0,0.6);
            
        }
        .trend{
            padding: 20px;
            padding-top: 5px;
        }
        .trend li{
            width: 90%;
            text-align: left;
            height: 55px;
            border-bottom: 1.5px solid lightgrey;
        }
        .trend li a{
            color: rgba(0,0,0,0.6);
            margin-top: 15px;
            display: inline-block;
        }


    </style>


    <div class="search">
       <center><div class="search-box">
            <form method="POST" action=" <?php echo "{$search_link}"; ?> ">
            <i style="margin-left: 20px;" class="fa fa-times"></i>
            <input placeholder="Search Movie, News..." name="word" type="text">
            <i type="submit" name="submit" style=" margin-left: 10px;margin-right: 20px;" class="fa fa-arrow-right"></i>
            </form>
        </div></center> 

        <div class="trend">
        <h3>Trending:</h3> <br>

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