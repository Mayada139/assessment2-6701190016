<?php 
    require_once 'koneksi.php'; 
    $semester = $_GET['semester'];
    $result = mysqli_query($db, "SELECT * FROM ipk WHERE semester=$semester");
    $row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>ASSESSMENT 2 | 6701190016</title>
  </head>
  <body style="background-color: #000000">
    <div class="card-header" style="background-color : #ff8080;">
        <h1><center><font color="#ffffff">ASSESSMENT 2</font></center></h1>
    </div> 
<br><br>
    <div class="card-body" align="center">
      <form action="edit.php" method="post">
        <font color="#ffffff">
          <div class="mb-3">
            <label for="exampleInputname1" class="form-label">Semester</label>
            <input type="text" class="form-control" name="semester" value="<?= $row['semester'];?>">
          </div>
          <div class="mb-3">
            <label for="exampleInput1" class="form-label">Nilai IP</label>
            <input type="text" class="form-control" name="ipk" value="<?= $row['ipk'];?>">
          </div>
          <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
        </font>
      </form>
    </div>
    <br><br>
<hr>
    <div class="card-body" align="center">
      <div><font style="color: #ffffff">
        <button type="button" class="btn btn-outline-primary"><a href="read.php">BATAL</a></button><br>
      </font></div>
    </div>
    
<hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
  <footer style="margin-left: 2%; color: #a0937d;">
        <i>By : Mayada Zahra Gustiana (Assessment 2 Pengembangan Aplikasi Berbasis Web)<br>6701190016<br>D3SI-43-03</i>
    </footer>
</html>