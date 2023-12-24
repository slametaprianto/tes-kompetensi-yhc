<?php
session_start();

include "../koneksi.php";

$result_materi = mysqli_query($conn, "SELECT * FROM materi");
$jml_data = mysqli_num_rows($result_materi);

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Online Course | Data Materi</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <div class="row">

                    <div class="col-lg">
                        <h2>Data Materi</h2>
                        <p>Pilih Data Kursus berikut Untuk Memunculkan Data Materi..!</p>
                        <a href="tambah-materi.php" class="btn btn-sm btn-primary mb-3">Tambah Materi</a>
                        <form action="" method="POST" id="kelasForm">
                            <div class="mb-3">
                                <label for="id_course" class="form-label">Pilih Kursus</label>
                                <select class="form-select" name="id_course" id="id_course" required>
                                    <option value="">-- Pilih Kursus --</option>
                                    <?php
                                    $result_data = mysqli_query($conn, "SELECT * FROM data");
                                    while ($row_data = mysqli_fetch_assoc($result_data)) {
                                        echo '<option value="' . $row_data["id_course"] . '">' . $row_data["judul"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Action</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Link</th>
                                </tr>
                            </thead>
                            <tbody id="materiTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#id_course').change(function() {
                var id_course = $(this).val();
                $.ajax({
                    url: 'get-materi.php', // Ganti dengan nama file atau endpoint yang sesuai
                    type: 'POST',
                    data: {
                        id_course: id_course
                    },
                    success: function(response) {
                        $('#materiTable').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>