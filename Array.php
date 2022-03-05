<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Daftart Nilai
    </a>
  </div>
</nav>

<?php 
$data = file_get_contents('data.json');
$kelas = json_decode($data, true);
//print_r($data); //cek dulu
krsort($kelas);

?>

<div class="container">
    <table class="table table-bordered border-primary my-5">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nilai</th>
            <th scope="col">Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php $i =1; ?>
        <?php foreach ($kelas as $row) : ?>

        <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td><?= $row['umur']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['kelas']; ?></td>
            <td><?= $row['nilai']; ?></td>
            <td><?= $row['hasil']; ?></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
	


<?php
    // Saya tidak tau cara buat hitung umur auto
    // dalam table udah saya coba tetap erro saya memuat file di bawah nya saya
    // function hitung_umur($tanggal_lahir) {
    //     list($year,$month,$day) = explode("-",$tanggal_lahir);
    //     $year_diff  = date("Y") - $year;
    //     $month_diff = date("m") - $month;
    //     $day_diff   = date("d") - $day;
    //     if ($month_diff < 0) $year_diff--;
    //         elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
    //     return $year_diff;
    // }
    //Jagan Tampilkan Umur dengan Tanggal Lahir 1990-Oktober-25
    // yang benar menggunakan angka
    //echo hitung_umur("1993-09-15");
?>
    </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>