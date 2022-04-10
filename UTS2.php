<html>
<head>
    <style type="text/css">
        td {
            border : 1px solid black;
            width : 100;
            height : 100;
        }
        table {
            border : 1px solid black;
        }
    </style>
    <title>UTS2</title>
</head>
<body>
    <?php
        if(!isset($_POST['submit'])){
    ?>
    <form method="POST">
        Jumlah List Baris :<br><br><input type="number" name="baris"><br><br>
        Jumlah List Kolom :<br><br><input type="number" name="kolom"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        }
        if(isset($_POST['submit'])){
            $baris = $_POST['baris'];
            $kolom = $_POST['kolom'];
            if($baris != NULL && $kolom != NULL){
                echo "<table>";
                for($i = 1; $i <= $baris; $i++){
                    echo "<tr>";
                    for ($j = 1; $j <= $kolom; $j++){
                        echo "<td>";
                    }
                }
                echo "</table>";
            }
            else if($baris != NULL && $kolom == NULL){
                echo "<h3>Anda belum memasukkan jumlah kolom.";
            }
            else if($baris == NULL && $kolom != NULL){
                echo "<h3>Anda belum memasukkan jumlah baris.";
            }   
            else{
                echo "<h3>Anda belum memasukkan jumlah baris dan jumlah kolom";
            }
        }
    ?>
</body>
</html>