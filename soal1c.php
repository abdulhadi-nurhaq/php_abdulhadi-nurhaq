<?php
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
    $a = 0;
?>

<html>
<body>
    <?php
    for($i = 1; $i <= $baris; $i++){
        for($j = 1; $j <= $kolom; $j++){
            echo $i.'.'.$j.' '.$_POST['hasil'][$a++];
            ?><br>
        <?php } ?>
    <?php } ?>
</body>
</html>