<?php
if (isset($_POST['simpan'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $angka3 = $_POST['angka3'];

  if ($angka1 >= $angka2 && $angka1 >= $angka3) {
    echo "angka yg terbesar adalah" .  $angka1;
  } elseif ($angka2 >= $angka1 && $angka2 >= $angka3) {
    echo "angka yg terbesar adalah  $angka2";
  } else {
    echo "angka yg terbesar adalah  $angka3";
  }
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
    <label for="">Aangka 2</label>
    <input type="number" name="angka1">
    <label for="">Aangka 2</label>
    <input type="number" name="angka2">
    <label for="">Aangka 3</label>
    <input type="number" name="angka3">
    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>

</html>