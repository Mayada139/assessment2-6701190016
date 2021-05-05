<?php 
    require_once 'koneksi.php';
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $result = mysqli_query($db, "INSERT INTO ipk VALUES('$semester', '$ipk')");

    echo "<script>alert('Data IPK Berhasil Ditambahkan!' )</script>";
    echo "<script>window.location='read.php'</script>";
?>