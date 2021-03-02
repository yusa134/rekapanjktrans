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

    <div class="container">
        <h1 class="h1 my-5 ">Edit Data Rekapan</h1>
        <?php
        include "koneksi.php";
        $sp = $_GET['sp'];
        $query_mysql = mysqli_query($host, "SELECT * FROM data WHERE sp='$sp'");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <form action="edit-aksi.php" method="post">
                <div class="mb-3">
                    <label for="sp" class="form-label">S.P</label>
                    <input type="text" class="form-control" id="sp" name="sp" value="<?php echo $data['sp'] ?>">
                </div>
                <div class="mb-3">
                    <label for="colli" class="form-label">Colli</label>
                    <input type="text" class="form-control" id="colli" name="colli" value="<?php echo $data['colli'] ?>">
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat(gram)</label>
                    <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $data['berat'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="franco" class="form-label">Franco</label>
                    <select class="form-select" aria-label="Default select example" name="franco" value="<?php echo $data['franco'] ?>">
                        <option disabled>Pilih Keterangan</option>
                        <?php if ($data['franco'] == "Sudah") : ?>
                            <option selected value="Sudah">Sudah</option>
                            <option value="Belum">Belum</option>
                        <?php endif; ?>
                        <?php if ($data['franco'] == "Belum") : ?>
                            <option value="Sudah">Sudah</option>
                            <option selected value="Belum">Belum</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="confrankert" class="form-label">Confrankert</label>
                    <input type="text" class="form-control" id="confrankert" name="confrankert" value="<?php echo $data['confrankert'] ?>">
                </div>
                <div class="mb-3">
                    <label for="penerima" class="form-label">Penerima</label>
                    <input type="text" class="form-control" id="penerima" name="penerima" value="<?php echo $data['penerima'] ?>">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <select class="form-select" aria-label="Default select example" name="keterangan" value="<?php echo $data['keterangan'] ?>">
                        <option disabled>Pilih Keterangan</option>
                        <?php if ($data['keterangan'] == "Terkirim") : ?>
                            <option selected value="Terkirim">Terkirim</option>
                            <option value="Belum dikirim">Belum Dikirim</option>
                            <option value="Sedang dikirim">Sedang Dikirim</option>
                        <?php endif; ?>
                        <?php if ($data['keterangan'] == "Belum dikirim") : ?>
                            <option value="Terkirim">Terkirim</option>
                            <option selected value="Belum dikirim">Belum Dikirim</option>
                            <option value="Sedang dikirim">Sedang Dikirim</option>
                        <?php endif; ?>
                        <?php if ($data['keterangan'] == "Sedang dikirim") : ?>
                            <option value="Terkirim">Terkirim</option>
                            <option value="Belum dikirim">Belum Dikirim</option>
                            <option selected value="Sedang dikirim">Sedang Dikirim</option>
                        <?php endif; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button class="btn btn-danger"><a class="text-white text-decoration-none" href="index.php">Kembali</a></button>
            </form>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>