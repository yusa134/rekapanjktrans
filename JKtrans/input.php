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
        <h1 class="h1 my-5 ">Masukkan Data Rekapan</h1>
        <form action="input-aksi.php" method="post">
            <div class="mb-3">
                <label for="colli" class="form-label">Colli</label>
                <input type="text" class="form-control" id="colli" name="colli">
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat(gram)</label>
                <input type="text" class="form-control" id="berat" name="berat">
            </div>
            <div class="mb-3">
                <label for="franco" class="form-label">Franco</label>
                <select class="form-select" aria-label="Default select example" name="franco">
                    <option selected disabled>Pilih Keterangan</option>
                    <option value="Sudah">Sudah</option>
                    <option value="Belum">Belum</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="confrankert" class="form-label">Confrankert</label>
                <input type="text" class="form-control" id="confrankert" name="confrankert">
            </div>
            <div class="mb-3">
                <label for="penerima" class="form-label">Penerima</label>
                <input type="text" class="form-control" id="penerima" name="penerima">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <select class="form-select" aria-label="Default select example" name="keterangan">
                    <option selected disabled>Pilih Keterangan</option>
                    <option value="Terkirim">Terkirim</option>
                    <option value="Belum dikirim">Belum Dikirim</option>
                    <option value="Sedang dikirim">Sedang Dikirim</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button class="btn btn-danger"><a class="text-white text-decoration-none" href="index.php">Kembali</a></button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>