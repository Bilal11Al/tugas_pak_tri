<?php

if (isset($_POST['simpan'])) {
  $angka = $_POST['angka'];
  // if ($angka % 2 == 0) {
  //   echo "Angka Genap";
  // } else {
  //   echo "Angka Ganjil";
  // }
  $angkas =( $angka % 2 == 0) ?  "angka genap" : "angka ganjil";
  echo $angkas;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <label for=""> masukan Angka</label>
    <input type="number" name="angka">
    <button name="simpan" type="submit">Simpan</button>
  </form>
</body>

</html>