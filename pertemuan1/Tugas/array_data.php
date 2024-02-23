<?php
/* Task 1 
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan manfaatnya
*/

$fruits = [
  [ 'name' => 'Pisang',
    'warna' => 'Kuning',
    'stonks' => 15,
    'price' => 25000,
    'Manfaatnya' => 'Pisang kaya akan potasium, mineral yang penting bagi penjagaan fungsi jantung dan sirkulasi darah',],
  [ 'name' => 'Melon',
    'warna' => 'Hijau',
    'stonks' => 25,
    'price' => 30000,
    'Manfaatnya' => 'Zat-zat gizi yang dikandungnya sangat baik untuk kulit, mata, saraf, ginjal, serta mampu menjadi penangkal kanker',],
  [ 'name' => 'Manggis',
    'warna' => 'merah tua',
    'stonks' => 35,
    'price' => 10000,
    'Manfaatnya' => 'Menjaga Kesehatan Kulit, Kandungan antioksidan dalam manggis membantu melindungi kulit dari kerusakan akibat sinar matahari dan penuaan dini.',]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array data buah</title>
  <style></style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        /* 
        Task 2
        */

        $counter = 0;
        foreach ($fruits as $fruit) {
          echo "<tr>";
          $counter += 1;
          echo "<td>" . $counter . "</td>";
          foreach ($fruit as $detail) {
            echo "<td>" . $detail . "</td>";
          };
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>