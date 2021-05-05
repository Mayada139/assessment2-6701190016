<?php
    require_once 'koneksi.php';
    $semester = $_GET['semester'];
    $result = mysqli_query($db, "DELETE FROM ipk WHERE semester=$semester");

    echo "<script>alert('Data Berhasil Dihapus!' )</script>";
    echo "<script>window.location='read.php'</script>";
?>