<?php
session_start();

include "../koneksi.php";

if (isset($_POST["submit"])) {

    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $durasi = $_POST["durasi"];

    $simpan = mysqli_query($conn, "INSERT INTO data VALUES(NULL, '$judul', '$deskripsi', '$durasi')");

    header("Location: kursus.php");
}


?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Online Course | Tambah data</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Tambah Data Kursus</h1>
                <hr>

                <div class="row">
                    <div class="col-lg">
                        <h2>Form Input Data Kursus</h2>
                        <p>Silahkan input data pada form dibawah ini..!</p>

                        <form method="post" target="">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="judul" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="durasi" class="form-label">Durasi</label>
                                <input type="durasi" class="form-control" id="durasi" name="durasi" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a href="kursus.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>