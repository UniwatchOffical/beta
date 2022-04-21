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
<body>

<?php 

$q = $GET_['q'];

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
        }
        .search-box form{
            margin: 0px;
        }
        .search-box i{
            font-size: 28px;
            margin-top: 14px;
            color: rgba(0,0,0,0.6);
        }
        .search-box button{
            background: none;
            border: none;
        }
        </style>

<div class="search">
       <center><div class="search-box">
            <form method="GET" action="result">
            <i style="margin-left: 20px;" class="fa fa-times"></i>
            <input placeholder="Search Movie, News..." name="q" type="text">
           <button type="submit"  style=" margin-left: 10px; margin-right: 20px;"><i class="fa fa-arrow-right"></i>
            </form>
        </div></center> 
</div>

    

</body>
</html>