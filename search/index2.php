<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>
    <title>Search - Uniwatch</title>
</head>
<body id="back" style="background: #030814; color: black;">

    <style>

        body{
            margin: 0px;
            padding: 0px;
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


    <div class="search">
       <center><div class="search-box">
            <form method="GET" action="result">
            <i style="margin-left: 20px;" class="fa fa-times"></i>
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

   

</body>
</html>