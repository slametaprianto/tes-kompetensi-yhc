<?php
include "../koneksi.php";

if (isset($_POST['id_course'])) {
    $id_course = $_POST['id_course'];
    $result_materi = mysqli_query($conn, "SELECT * FROM materi WHERE id_course = '$id_course'");
    while ($row_materi = mysqli_fetch_assoc($result_materi)) {
        echo '<tr>';
        echo '<td><a href="edit.php?id=' . $row_materi["id"] . '" class="btn btn-sm btn-warning">Edit</a> 
              <a href="hapus.php?id=' . $row_materi["id"] . '" class="btn btn-sm btn-danger">Hapus</a></td>';
        echo '<td>' . $row_materi["judul"] . '</td>';
        echo '<td>' . $row_materi["deskripsi"] . '</td>';
        echo '<td>' . '<a href="' . $row_materi["link"] . '" target="_blank">' . $row_materi["link"] . '</a>' . '</td>';
        echo '</tr>';
    }
}
