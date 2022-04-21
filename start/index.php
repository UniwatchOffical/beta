<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/icon..png">

    <link rel="stylesheet" href="../CSS/style.css">

    <!--------------------------- Google Fonts -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>

    <title>Uniwatch</title>

</head>
<body>

    <style>

        .main{
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(../images/bg.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
            position: fixed;
            left: 0px;
            top: 0px;
            /*box-shadow: 45px 45px 45px 45px rgba(0,0,0,0.7) inset;*/
            -webkit-box-shadow: 0 0 5px 2px rgba(0,0,0,0.7);
    -moz-box-shadow: 0 0 45px 25px rgba(0,0,0,0.7);
    box-shadow: 0 0 140px 100px rgba(0,0,0,0.8) inset;
        }
        .main h1{
            color: white;
            margin-top: 11%;
            font-size: 60px;
            font-family: "Gill Sans Extrabold", sans-serif;
        }
        .txt-1 h1{
            color: white;
            margin-top: 12%;
            font-size: 60px;
            font-family: "Gill Sans Extrabold", sans-serif;
        }

        .main p{
            font-size: 22px;
        }

        .btn-xl:hover{
            background: royalblue;
            transition: 0.3s ease;
        }

       @media only screen and (max-width: 980px) {
        .main h1{
            color: white;
            margin-top: 31%;
            font-size: 30px;
            font-family: "Gill Sans Extrabold", sans-serif;
        }
        .main p{
            font-size: 16px;
        }
        .btn-xl{
            width: 200px;
            height: 39px;
            font-size: 22px;
        }
        .logo-txt{
            margin-left: 60px;
        }

       }

    </style>

    <div class="main">

        <a style="font-family: 'Reggae One', cursive;" href="#" class="logo-txt"><i style="color: lightskyblue;font-family: 'Reggae One', cursive;">Uniwatch</i></a>

        <center>
        <h1>Latest Movies, <br> Live News and More</h1> <br>
        <p style="margin-bottom: 10px;" class="txt-yellow">Watch Anytime and Anywhere for FREE</p>
        <a href="../register"><button class="btn-xl br-white blue">SignUp</button></a>
        <a href="../login"><button class="btn-xl br-white blue">Login</button></a>
        </center>

    </div>

    


    
</body>
</html>