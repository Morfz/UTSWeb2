<html>
<head>
    <style type="text/css">
        td {
            border : 1px solid black;
            width : 25;
            height : 25;
        }
        table {
            border : 1px solid black;
        }
    </style>
    <title>UTS5</title>
</head>
<body>
    <?php
    ?>
    <form method="POST">
        Masukkan jumlah List Baris : <input type="number" name="baris"><br>
        Masukkan jumlah List Kolom : <input type="number" name="kolom"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $baris = $_POST['baris'];
            $kolom = $_POST['kolom'];
            if($baris != NULL && $kolom != NULL){
                echo "<table>";
                echo "<tr>";
                for($i = 1; $i <= $baris; $i++){
                    echo "<td>$i";
                }
                echo "</tr>";
                for($i = 2; $i <= $baris; $i++){
                    echo "<tr>";
                    echo "<td> $i";
                    for ($j = 2; $j <= $kolom; $j++){
                        $k=$i+$j;
                        echo "<td>$k";
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