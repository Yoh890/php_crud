<?php
  session_start();
  include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class="col-sm-6">
      
      <div class="card">
        <h5 class="card-header">Halaman Login</h5>
        <div class="card-body" style="text-align: center;">
        <form method="POST">
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
            <br>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <br>
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="login" value="Login">
          </div>
        </form>
        </div>
      </div>
      
  </div>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//jika tombol login diklik
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conn = new mysqli($hostname,$user,$pass,$database);
  $cek = $conn->query("select * from tbl_user where username='$username' and password='$password'")->num_rows;
  //jika cek lebih dari 0 maka arahkan ke index
  //jika cek = 0 munculkan pesan data yg anda masukkan salah
  if($cek>0){
    $_SESSION['login']='OK';
    //exit($_SESSION['login']);
    echo '<script>window.location.href="index.php"</script>';
  }else{
    echo '<script>window.alert("Data yg anda masukkan salah!")</script>';
  }
}