<!DOCTYPE html>
<?php
    // Kullanıcı adı ve hash'lenmiş şifreleri içeren sabit bir dizi
   

    if(isset($_POST['submit'])){
        $user = htmlspecialchars(trim($_POST['username']));
        $pass = htmlspecialchars(trim($_POST['password']));

        // Kullanıcı adından dinamik olarak şifre oluşturma (domain kısmını kaldırma)
        $username_part = explode('@', $user)[0]; // '@' öncesindeki kısmı alır
        $users = [
            "b231210019@ogr.sakarya.edu.tr" => password_hash($username_part, PASSWORD_DEFAULT),
            "b231210001@ogr.sakarya.edu.tr" => password_hash($username_part, PASSWORD_DEFAULT),
            "b231210002@ogr.sakarya.edu.tr" => password_hash($username_part, PASSWORD_DEFAULT),
        ];

        if(empty($user) || empty($pass)){
            echo "error: both fields are required.";
        }
        elseif(array_key_exists($user, $users) && password_verify($pass, $users[$user])){
            // Her kullanıcı için '@' öncesindeki kısmı kullanarak hoş geldiniz mesajı gösterme
            echo "$username_part hoş geldiniz";
        } 
        else {
            echo "error: please enter correct data";
        }
    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stiller.css">
    <style>
      body {
        background-color: black;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <nav class="navbar navbar-expand-lg" style="background-color: rgb(66 66 69 / 70%);">
      <div class="container-fluid" >
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" style="color: white;">Hakkında</a>
            <a class="nav-link" href="cv.htm" style="color: white;">CV</a>
            <a class="nav-link" href="sehrim.htm" style="color: white;">Şehrim</a> 
            <a class="nav-link " href="mirasimiz.htm" style="color: white;">Mirasımız</a>
            <a class="nav-link" href="ilgialanlari.htm" style="color: white;">İlgi Alanları</a>  
            <a class="nav-link active" href="login.php" style="color: white;">Log in</a>
            <a class="nav-link" href="iletisimform.htm" style="color: white;">İletişim Formu</a>
        </div>
      </div>
    </nav> 
    <form action="" method="post">
    <table >
        <tr>
            <td style="color: rgb(41, 151, 255);">Kullanıcı Adı:</td>
            <td><input type="text" name="username" placeholder="Enter your username"></td>
        </tr>
        <tr>
            <td style="color: rgb(41, 151, 255);">Şifre:</td>
            <td><input type="password" name="password" placeholder="Enter your password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<footer class="footer" style="background-color:  rgb(66 66 69 / 70%); position: fixed; bottom: 0; width: 100%;"> 
      <p >Selva Artunç tarafından oluşturulmuş bir web sitesidir. All rights reserved,2024</p>
    </footer>
</body>
</html>