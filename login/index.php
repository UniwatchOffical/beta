<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: ../");
    exit;
}
require_once "../config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: ../");
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!--------------------------- Google Fonts -------------------------->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Reggae+One&display=swap" rel="stylesheet">

    <!------------------------- MyStyle --------------------------------->
    <link rel="stylesheet" href="../MyStyle/v2.0.3/mystyle.css">
    <script src="../MyStyle/v2.0.3/mystyle-icons.js"></script>

    
    <title>Login | Uniwatch</title>
  </head>
  <body>

<style>

.main{
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(../images/bg.jpeg);
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
    box-shadow: 0 0 40px 20px rgba(0,0,0,0.8) inset;
        }

        .box-1{
          width: 30%;
          background: rgba(255,255,255,0.6);
          margin-top: 10%;
          padding: 10px;
          box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.6);
        }

        @media only screen and (max-width: 980px){
          .box-1{
          width: 85%;
          background: rgba(255,255,255,0.6);
          margin-top: 16%;
          padding: 10px;
          box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.6);
        }
        p{
          font-size: 15px;
        }
        p a{
          font-size: 16px;
        }
        }
     

</style>

  
<div class="main">

<center><div class="box-1">
<h1 style="color: black;"><b>Login with Acrobet</b></h1>


<form style="margin-left: 0px;" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  
  <button style="margin-bottom: 40px;" type="submit" class="btn br-white blue">Login</button>
</form>


</div>

<p style="color: white;">Don't have Acrobet Account? <a style="color: yellow;" href="../register">Create Now!</a></p>
</center>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
