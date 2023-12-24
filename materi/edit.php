<?php
session_start();

include "../koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch data materi based on id
    $result_materi = mysqli_query($conn, "SELECT * FROM materi WHERE id = '$id'");
    $row_materi = mysqli_fetch_assoc($result_materi);

    if (!$row_materi) {
        echo "Data materi tidak ditemukan.";
        exit();
    }
} else {
    echo "ID materi tidak valid.";
    exit();
}

if (isset($_POST["submit"])) {
    $id_course = $_POST["id_course"];
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $link = $_POST["link"];

    $edit = mysqli_query($conn, "UPDATE materi SET id_course = '$id_course', judul = '$judul', deskripsi = '$deskripsi', link = '$link' WHERE id = '$id'");

    if ($edit) {
        header("Location: materi.php");
    } else {
        echo "Gagal mengedit data materi: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Online Course | Edit Data Materi</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <br>

                <div class="row">
                    <div class="col-lg">
                        <h2>Form Edit Data Materi</h2>
                        <p>Silahkan edit data pada form di bawah ini..!</p>
                        <form method="post" target="">
                            <div class="mb-3">
                                <label for="id_course" class="form-label">Kursus</label>
                                <select class="form-select" name="id_course" id="id_course" required>
                                    <option selected>-- Pilih Kursus --</option>
                                    <?php
                                    $result_data = mysqli_query($conn, "SELECT * FROM data");
                                    while ($row_data = mysqli_fetch_assoc($result_data)) {
                                        $selected = ($row_data["id_course"] == $row_materi["id_course"]) ? "selected" : "";
                                    ?>
                                        <option value="<?php echo $row_data["id_course"] ?>" <?php echo $selected ?>><?php echo $row_data["judul"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row_materi["judul"]; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required><?php echo $row_materi["deskripsi"]; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link Embed</label>
                                <input type="text" class="form-control" id="link" name="link" value="<?php echo $row_materi["link"]; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a href="materi.php" class="btn btn-secondary">Cancel</a>
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