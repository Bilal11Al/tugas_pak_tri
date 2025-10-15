<?php
if (isset($_POST['simpan'])) {
  $uangSya =(int) $_POST['uangsy'];
  $uangTmn = (int) $_POST['uangtmn'];
  $hasil = $uangSya + $uangTmn;
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
  <?= "Rp." . number_format( $hasil,0, '.' , ',')  ?>
  <form action="" method="post">
    <label for="">Uang Saya</label>
    <input type="number" name="uangsy">
    <label for="">Uang Dari temen</label>
    <input type="number" name="uangtmn">

    <br>
    <button name="simpan" type="submit">Simpan</button>
    <br>
  </form>
</body>

</html>