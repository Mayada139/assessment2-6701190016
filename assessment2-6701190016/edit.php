<?php 
    require_once 'koneksi.php';
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $result = mysqli_query($db, "UPDATE ipk SET semester='$semester', ipk='$ipk' WHERE semester=$semester");

    echo "<script>alert('Data Berhasil Diubah!' )</script>";
    echo "<script>window.location='read.php'</script>";
?>