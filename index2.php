<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>

    body{
        margin: 0px;
        padding: 0px;
    }
    *{
        margin: 0px;
        padding: 0px;
    }

    .tv-responsive{
        display: none;
        width: 100%;
    }
    .computer-responsive{
        display: inline-block;
        width: 100%;
        margin: 0px;
    }
    iframe{
        width: 100%;
        height: 99vh;
        margin: 0px;
        margin-bottom: 0px;
        border: none;
    }

    @media screen and (max-width: 1400px){

    .tv-responsive{
        display: inline-block;
        width: 100%;
    }
    iframe{
        width: 100%;
        height: 100vh;
        margin: 0px;
    }
    .computer-responsive{
        display: none;
        width: 100%;
    }

    }

</style>

<!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -- TV -- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

<div class="tv-responsive">
    <iframe src="tv-index.php" frameborder="0"></iframe>
</div>

<!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -- Computer -- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

<div class="computer-responsive">
    <iframe src="computer-index.php" frameborder="0"></iframe>
</div>

</body>
</html>