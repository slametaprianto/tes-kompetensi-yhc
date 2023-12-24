<?php

include "../koneksi.php";

$id_course = $_GET["id"];

$hapus = mysqli_query($conn, "DELETE FROM data WHERE id_course = $id_course");

header("Location: kursus.php");
