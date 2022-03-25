<?php
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
    $hasil = 0;
?>

<html>
<body>

<form action="soal1c.php" method="post">
    <input type="hidden" name="baris" value="<?php echo $baris ?>">
    <input type="hidden" name="kolom" value="<?php echo $kolom ?>">
    <?php 
        for($i = 1; $i <= $baris; $i++){
            for($j = 1; $j <= $kolom; $j++){
                echo $i.'.'.$j; ?> : <input type="text" name="hasil[<?php echo $hasil++; ?>]">
            <?php } ?>
            <br><br>
        <?php } ?>
<input type="Submit">
</form>

</body>
</html>