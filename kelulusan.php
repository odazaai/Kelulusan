<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Kelulusan</title>
  </head>
  <body>
      <div class="container">
          <br>
          <h1><center>KELULUSAN</center></h1>

          <form action="" method="POST" name="Kelulusan">
    <div class="mb-3">
        <label form="Nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label form="Kelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas">
    </div>
    <div class="mb-3">
        <label form="Nilai" class="form-label">Nilai Produktif</label>
        <input type="text" class="form-control" id="nilai_p" name="nilai_p">
    </div>
    <div class="mb-3">
        <label form="Nilai" class="form-label">Nilai Umum</label>
        <input type="text" class="form-control" id="nilai_u" name="nilai_u">
    </div>
    <div class="mb-3">
        <label form="Nilai" class="form-label">Nilai Mulok</label>
        <input type="text" class="form-control" id="nilai_m" name="nilai_m">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" href="nilai.php">Submit</button>
    </div>

    <?php
    if(isset($_POST['submit'])){
      $nama = $_POST['nama'];
      $kelas = $_POST['kelas'];
      $nilai_p = $_POST['nilai_p'];
      $nilai_u = $_POST['nilai_u'];
      $nilai_m = $_POST['nilai_m'];

      if($nilai_p > 90){
        $gradep = "A";
        $ketp = "Lulus";
      }else if($nilai_p > 80){
        $gradep = "B";
        $ketp = "Lulus";
      }else if ($nilai_p > 70){
        $gradep = "C";
        $ketp = "Lulus";
      }else if ($nilai_p > 60){
        $gradep = "D";
        $ketp = "Lulus";
      } else {
        $gradep = "E";
        $ketp = "Tidak Lulus";
      }

      if($nilai_u > 90){
        $gradeu = "A";
        $ketu = "Lulus";
      }else if($nilai_u > 80){
        $gradeu = "B";
        $ketu = "Lulus";
      }else if ($nilai_u > 70){
        $gradeu = "C";
        $ketu = "Lulus";
      }else if ($nilai_u > 60){
        $gradeu = "D";
        $ketu = "Lulus";
      } else {
        $gradeu = "E";
        $ketu = "Tidak Lulus";
      }

      if($nilai_m > 90){
        $gradem = "A";
        $ketm = "Lulus";
      }else if($nilai_m > 80){
        $gradem = "B";
        $ketm = "Lulus";
      }else if ($nilai_m > 70){
        $gradem = "C";
        $ketm = "Lulus";
      }else if ($nilai_m > 60){
        $gradem = "D";
        $ketm = "Lulus";
      } else {
        $gradem = "E";
        $ketm = "Tidak Lulus";
      }


    $rata_rata = ($nilai_p + $nilai_u + $nilai_m) / 3;


    ?>
    
    <div class="container">
      <br><br>
      <h3>Nama : <?php echo $nama?></h3>
      <h3>Kelas : <?php echo $kelas?></h3>
      <br><br>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mapel</th>
      <th scope="col">Nilai</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <th scope="col">Produktif</th>
      <th scope="col"><?php echo $nilai_p ?></th>
      <th scope="col"><?php echo $gradep ?></th>
      <th scope="col"><?php echo $ketp ?></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <th scope="col">Umum</th>
      <th scope="col"><?php echo $nilai_u ?></th>
      <th scope="col"><?php echo $gradeu ?></th>
      <th scope="col"><?php echo $ketu ?></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <th scope="col">Mulok</th>
      <th scope="col"><?php echo $nilai_m ?></th>
      <th scope="col"><?php echo $gradem ?></th>
      <th scope="col"><?php echo $ketm ?></th>
    </tr>
    <tr>
        <td colspan="4">Nilai rata-rata</td>
        <td><?= $rata_rata?></td>
    </tr>
  </tbody>
</table>
    </div>
  <?php }
    ?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>