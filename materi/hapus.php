<?php

include "../koneksi.php";

$id = $_GET["id"];

$hapus = mysqli_query($conn, "DELETE FROM materi WHERE id = $id");

header("Location: materi.php");
