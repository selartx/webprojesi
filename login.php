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
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #E39DFA;">
      <div class="container-fluid" >
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" >Hakkında</a>
            <a class="nav-link" href="cv.htm">CV</a>
            <a class="nav-link" href="sehrim.htm">Şehrim</a> 
            <a class="nav-link " href="mirasimiz.htm" >Mirasımız</a>
            <a class="nav-link" href="ilgialanlari.htm">İlgi Alanları</a>  
            <a class="nav-link active" href="login.php">Log in</a>
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
</body>
</html>