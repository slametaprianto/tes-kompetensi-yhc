<?php
session_start();

include "../koneksi.php";



$result_data = mysqli_query($conn, "SELECT * FROM data");
$jml_data = mysqli_num_rows($result_data);

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Online Course | Data Kursus</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">


                <div class="row">

                    <div class="col-lg">
                        <h2>Data Kursus</h2>
                        <p>Berikut data materi yang berhasil di input..!</p>
                        <a href="tambah-data.php" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
                        <?php if ($jml_data == 0) { ?>
                            <div class="alert alert-warning" role="alert">
                                Maaf, data masih kosong...!
                            </div>
                        <?php } else { ?>
                            <table class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row_data = mysqli_fetch_assoc($result_data)) { ?>
                                        <tr>
                                            <th>
                                                <a href="edit.php?id=<?php echo $row_data["id_course"] ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="hapus.php?id=<?php echo $row_data["id_course"] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </th>
                                            <td><?php echo $row_data["judul"] ?></td>
                                            <td><?php echo $row_data["deskripsi"] ?></td>
                                            <td><?php echo $row_data["durasi"] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>