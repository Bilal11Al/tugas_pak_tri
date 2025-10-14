<?php
if (isset($_POST['simpan'])) {
  $angka = $_POST['km'];
  $konversi = 0.621371;
   $hasil = $angka * $konversi;

  echo " hasil yg kamu dapan adalah $hasil Miles";
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
    <label for="">Masukan nilai km</label>
    <input type="number" name="km">
    <button name="simpan" type="submit">Simpan</button>
  </form>
</body>

</html>