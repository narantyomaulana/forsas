<?php 
session_start();
include_once('conn.php');
$database = new database();
if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}

if(isset($_COOKIE['nik']))
{
  $database->relogin($_COOKIE['nik']);
  header('location:home.php');
}

if(isset($_POST['login']))
{
    $nik= $_POST['nik'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($nik,$password,$remember))
    {
      header('location:home.php');
    }
}
?>
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="logo/Untitled-1.png"/>
    <title>Login | forSAS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body >
  <img src="logo/Untitled-1.png"  style="width:250px;height:200px;margin-right:auto;margin-left:auto">
<main class="form-signin">
  
  
    <h1 class="h3 mb-3 fw-normal text-center" >Login</h1>
    <form method="post" action=""> 
    <div class="mb-3">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" placeholder="NIK">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
  </form>
  <p class="mt-2 text-left" style="font-size:13px">Belum punya akun? <a href="register.php">Daftar</a></p>
</main>


    
  </body>
</html>
