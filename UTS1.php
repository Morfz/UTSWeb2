<html>
<head>
    <title>UTS1</title>
</head>
<body>
    <?php
        if(!isset($_POST['submit'])){
    ?>
    <form method="POST">
        Jumlah List : <br><br><input type="number" name="list"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            if(isset($_POST['list'])){
                $list = $_POST['list'];
            }
            echo "<h2> Jumlah List adalah $list : <br></h2>";
            echo "<ul>";
            for($i = 1; $i <= $list; $i++){
                echo "<li> $i </li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>