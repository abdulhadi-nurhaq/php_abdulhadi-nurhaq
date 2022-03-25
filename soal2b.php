<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

</head>
<body>
    <h3 align="center">Tabel Laporan</h3>
    <form method="post" align="center">
        <input align="center", type="text" name="cari" placeholder="Masukkan Nama Hobi">
        <input align="center", type="submit" name="submit" value="Cari">
    <form><br><br>
    <table id=t01>
    <table border="1" align="center">
    <tbody><tr>
        <th>No.</th>
        <th>Hobi</th>
        <th>Jumlah Person</th>
    </tr>
    
    <?php
        $username = "root";
        $password = "";
        $nama_db = "testdb";
        $con = mysqli_connect("localhost", $username, $password, $nama_db);
        if(!ISSET($_POST['submit'])){
        $laporan = mysqli_query($con, "SELECT hobi, count(*) as jumlah_person FROM hobi  GROUP by hobi ORDER BY jumlah_person DESC");
        $no = 1;
        while ($value = mysqli_fetch_array($laporan)){
    ?>
    <tr align="center">
        <td><?php echo $no ?>. </td>
        <td><?php echo $value['hobi']; ?> </td>
        <td><?php echo $value['jumlah_person']; ?> </td>
    </tr>
        <?php
            $no++;
            } }
        ?>

        <?php if (ISSET($_POST['submit'])){
            $cari = $_POST['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b><br><br>";
            $query2 = "SELECT hobi, count(*) as jumlah_person FROM hobi WHERE hobi LIKE '%$cari%' GROUP by hobi ORDER BY jumlah_person DESC";
            $sql = mysqli_query($con, $query2);
            $no = 1;
            while ($r = mysqli_fetch_array($sql)){
        ?>
            <tr align="center">        
                <td><?php echo $no ?>. </td>
                <td><?php echo $r['hobi']; ?> </td>
                <td><?php echo $r['jumlah_person']; ?> </td>
            </tr>
        <?php
            $no++;
            } }
            mysqli_close($con);
        ?>

    </table>
</body>
</html>