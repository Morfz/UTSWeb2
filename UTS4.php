<html>
<head>
    <title>UTS4</title>
</head>
<body>
    <?php
        error_reporting(0);
        $username = "admin";
        $loginUsername = $_POST['username'];
        $password = "admin";
        $loginPassword = $_POST['password'];
        if(!isset($_POST['submit'])){
    ?>
    <form method="post" action="">
        Username: <br><br><input type="text" name="username" ><br><br>
        Password: <br><br><input type="password" name="password" ><br>
        <br><input type="submit" name="submit" value="Login"><br>
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            if(($loginUsername==$username) && ($loginPassword==$password)){
                echo "<h2>Selamat Datang Admin";
            }
            else{
                echo "<h2>Username atau Password yang anda masukkan salah!!!";
            }
        }
    ?>
</body>
</html>