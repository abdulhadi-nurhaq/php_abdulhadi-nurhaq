<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

</head>
<body>
    <br>
    <div style="text-align: center">
        <a href="soal2b.php">Tabel Laporan Hobi</a>
    </div>
    <br>
    <h3 align="center">Tabel Person</h3>
    <table id=t01>
    <table border="1" align="center">
    <tbody><tr>
      <th>No.</th>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
    </tr>
    
    <?php
      $username = "root";
      $password = "";
      $nama_db = "testdb";
      $con = mysqli_connect("localhost", $username, $password, $nama_db);
      $result = mysqli_query($con, "SELECT * FROM person ORDER BY nama ASC");
      $no = 1;
      while ($row = mysqli_fetch_array($result)){
    ?>
    <tr align="center">
      <td><?php echo $no ?>. </td>
      <td><?php echo $row['id']; ?> </td>
      <td><?php echo $row['nama']; ?> </td>
      <td><?php echo $row['alamat']; ?> </td>
    </tr>
      <?php
      $no++;
        }
     ?>
    </table>

    <br>

    <h3 align="center">Tabel Hobi</h3>
    <table id=t01>
    <table border="1" align="center">
    <tbody><tr>
      <th>No.</th>
      <th>ID Person</th>
      <th>Hobi</th>
    </tr>
    
    <?php
      $hasil = mysqli_query($con, "SELECT * FROM hobi ORDER BY person_id ASC");
      $no = 1;
      while ($baris = mysqli_fetch_array($hasil)){
    ?>
    <tr align="center">
      <td><?php echo $no ?>. </td>
      <td><?php echo $baris['person_id']; ?> </td>
      <td><?php echo $baris['hobi']; ?> </td>
    </tr>
      <?php
      $no++;
        }
        mysqli_close($con);
     ?>
    </table>
</body>
</html>