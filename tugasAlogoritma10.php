<?php
$result = "";
if (isset($_POST['simpan']) ?? null) {
  $angka = $_POST['angka'];

  if (!is_numeric($angka)) {
    $result = "masukan angka";
  } elseif ($angka > 0) {
    $result = "angka positif";
  } elseif ($angka == 0) {
    $result = "Ini 0";
  } else {
    $result = "Angka Negatif";
  }
}
echo $result;
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
    <input type="text" name="angka">
    <button name="simpan" type="submit">Simpan</button>
  </form>
</body>

</html>