<!DOCTYPE html>
<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password']; // Burada 'password' adını kullanıyoruz
        if($user == "b231210019@ogr.sakarya.edu.tr" && $pass == "b231210019"){
            echo("username and password matched");
        } else {
            echo("error: please enter correct data");
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stiller.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg" style="background-color: black;">
      <div class="container-fluid" >
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" >Hakkında</a>
            <a class="nav-link" href="cv.htm">CV</a>
            <a class="nav-link" href="sehrim.htm">Şehrim</a> 
            <a class="nav-link " href="mirasimiz.htm" >Mirasımız</a>
            <a class="nav-link" href="ilgialanlari.htm">İlgi Alanları</a>  
            <a class="nav-link active" href="login.php">Log in</a>
            <a class="nav-link" href="iletisimform">İletişim Formu</a>
        </div>
      </div>
    </nav> 
    <form action="" method="post">
    <table >
        <tr>
            <td>Kullanıcı Adı:</td>
            <td><input type="text" name="username" placeholder="Enter your username"></td>
        </tr>
        <tr>
            <td>Şifre:</td>
            <td><input type="password" name="password" placeholder="Enter your password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<footer> <p class="footer">Selva Artunç tarafından oluşturulmuş bir web sitesidir. All rights reserved,2024</p></footer>
</body>
</html>