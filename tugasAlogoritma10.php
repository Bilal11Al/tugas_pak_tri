<?php
$result = "";
if (isset($_POST['simpan'])) {
  $angka = $_POST['angka'] ?? 0;

  if ($angka > 0) {
    $result = "Nilai positif";
  } elseif ($angka == 0) {
    $result = "ini nol";
  } elseif ($angka == null) {
    $result = "masukan angka";
  } else {
    $result = "Nilai Negatif";
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
    <input type="number" name="angka">
    <button name="simpan" type="submit">Simpan</button>
  </form>
</body>

</html>