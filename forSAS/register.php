<?php 
$host='localhost';
$user='root';
$password='';
$db='forsas';

$conn=mysqli_connect($host,$user,$password,$db) or die(mysqli_error());

if(isset($_POST['register']))
{
  
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $password=mysqli_real_escape_string($conn,password_hash($_POST['password'],PASSWORD_DEFAULT));
    $confpassword=mysqli_real_escape_string($conn,password_hash($_POST['confpassword'],PASSWORD_DEFAULT));
    $check=mysqli_num_rows(mysqli_query($conn,"SELECT nik from user WHERE nik='$nik'"));
    if($_POST['password'] !== $_POST['confpassword']){
      echo "<script> alert('Password tidak cocok'); </script>";
    } else if($check>0){
      echo "<script>alert('NIK telah terdaftar');</script> ";
    } else{
      $sql = "INSERT INTO user(name,email,nik,password) VALUES ('$nama','$email','$nik','$password')";
      $result=mysqli_query ($conn, $sql);
      if ($result){
        echo "<script>alert('Registrasi berhasil');</script> ";
        header('location:login.php');
      }else{
        echo "<script>alert('Registrasi gagal');</script> ";
      }
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
    <title>Register | forSAS</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->

    

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
  <body class="text-center">
    
<main class="form-signin">
 
  <img src="logo/Untitled-1.png"  style="width:72px;height:60px;">
  
    <h1 class="h3 mb-3 fw-normal">Register</h1>
    <form action="" method="post" style="text-align:left">
    
      <div class="mb-3">
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
      </div>
      <div class="mb-3">
        
        <input type="email" name="email" class="form-control" id="exampleInputPassword1"placeholder="E-mail">
      </div>
      <div class="mb-3">
        <input type="text" name="nik" class="form-control" id="exampleInputPassword1"placeholder="NIK">
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"placeholder="Password">
      </div>
      <div class="mb-3">
        <input type="password" name="confpassword" class="form-control" id="exampleInputPassword1"placeholder="Confirm Password">
      </div>

  
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Register</button>
    
  </form>
  <p class="mt-2 text-left" style="font-size:13px">Punya akun? <a href="login.php">Login</a></p>
</main>


    
  </body>
</html>
