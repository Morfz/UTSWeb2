<html>
<head>
    <style type="text/css">
        td {
            border : 1px solid black;
        }
    </style>
    <title>UTS3</title>
</head>
<body>
    <?php
        error_reporting(0);
        $ukuran=$_POST['ukuran'];
    ?>
    <form method="POST">
        Pilih Ukuran :<br><br>
        <select name="ukuran">
            <option value="kecil" <?php if($ukuran == "kecil") echo "selected";?>>kecil</option>
            <option value="sedang" <?php if($ukuran == "sedang") echo "selected";?>>sedang</option>
            <option value="besar" <?php if($ukuran == "besar") echo "selected";?>>besar</option>
        </select>
        <input type="submit" name="pilih" value="Pilih">
    </form>
    <?php
        if(isset($_POST['pilih'])){
            echo "<table>";
            switch($ukuran){
                case $ukuran == "kecil":
                    echo "<td width=50 height=50>";
                    break;
                case $ukuran == "sedang":
                    echo "<td width=100 height=100>";
                    break;
                case $ukuran == "besar":
                    echo "<td width=150 height=150>";
                    break;
            }
            echo "</table>";
        }
    ?>
</body>
</html>