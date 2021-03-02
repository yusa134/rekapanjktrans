<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="judul py-5 d-flex align-items-center justify-content-center bg-primary text-white">
    <h1>REKAPAN JKTRANS</h1>
  </div>
  <?php
  if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
    if ($pesan == "input") {
      echo "<div class='alert alert-primary' role='alert'>
      Data Berhasil disimpan
    </div>";
    } else if ($pesan == "update") {
      echo "<div class='alert alert-warning' role='alert'>
      Data Berhasil Diubah
    </div>";
    } else if ($pesan == "hapus") {
      echo "<div class='alert alert-danger' role='alert'>
      Data Berhasil dihapus
    </div>";
    }
  }
  ?>
  <div class="container">
    <a href="input.php">
      <button type="button" class="btn btn-primary btn-lg my-5">Tambah Rekap</button>
    </a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">S. P.</th>
          <th scope="col">Colli</th>
          <th scope="col">Berat</th>
          <th scope="col">Franco</th>
          <th scope="col">Confrankert</th>
          <th scope="col">Penerima Barang</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <?php
      include "koneksi.php";
      $query_mysql = mysqli_query($host, "SELECT * FROM data");
      $nomor = 1;
      while ($data = mysqli_fetch_array($query_mysql)) {
      ?>
        <tbody>
          <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['sp']; ?></td>
            <td><?php echo $data['colli']; ?></td>
            <td><?php echo $data['berat']; ?> gram</td>
            <td><?php echo $data['franco']; ?></td>
            <td><?php echo $data['confrankert']; ?></td>
            <td><?php echo $data['penerima']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td>

              <button class="btn btn-success"><a class="text-white text-decoration-none" href="edit.php?sp=<?php echo $data['sp']; ?>">Edit</a></button>
              <button class="btn btn-danger"><a class="text-white text-decoration-none" href="hapus.php?sp=<?php echo $data['sp']; ?>">Hapus</a></button>
            </td>
          </tr>
        </tbody>
      <?php } ?>
    </table>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>