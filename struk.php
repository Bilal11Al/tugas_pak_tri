<?php
$data = [
  [
    "id" => "1",
    "ordercode" => "AB-2025-01-02",
    "orderamoutn" => "50000",
    "date" => "10-21-2025",
    "status" => "payment"
  ],
  [
    "id" => "2",
    "ordercode" => "AC-2025-01-02",
    "orderamoutn" => "60000",
    "date" => "10-20-2025",
    "status" => "payment"
  ],
  [
    "id" => "3",
    "ordercode" => "AD-2025-01-02",
    "orderamoutn" => "0",
    "date" => "10-9-2025",
    "status" => "order"
  ],
  [
    "id" => "4",
    "ordercode" => "AE-2025-01-02",
    "orderamoutn" => "60000",
    "date" => "10-11-2025",
    "status" => "payment"
  ],
  [
    "id" => "5",
    "ordercode" => "AF-2025-01-02",
    "orderamoutn" => "0",
    "date" => "10-10-2025",
    "status" => "order"
  ]
];
$order_details = [[
  "id" => 1,
  "order_id" => 1,
  "product_name" => "Bakmie Jawa Jawa Jawa",
  "qty" => 1,
  "order_price" => 25000,
  "order_subtotal" => 25000
], [
  "id" => 2,
  "order_id" => 1,
  "product_name" => "Teh Botol",
  "qty" => 1,
  "order_price" => 31000,
  "order_subtotal" => 31000
], [
  "id" => 3,
  "order_id" => 2,
  "product_name" => "Nasi Goreng",
  "qty" => 1,
  "order_price" => 30000,
  "order_subtotal" => 30000
], [
  "id" => 4,
  "order_id" => 2,
  "product_name" => "Kopi",
  "qty" => 1,
  "order_price" => 30000,
  "order_subtotal" => 30000
], [
  "id" => 5,
  "order_id" => 2,
  "product_name" => "Kue",
  "qty" => 1,
  "order_price" => 10000,
  "order_subtotal" => 10000
], [
  "id" => 6,
  "order_id" => 3,
  "product_name" => "Ketoprak",
  "qty" => 1,
  "order_price" => 20000,
  "order_subtotal" => 20000
], [
  "id" => 7,
  "order_id" => 3,
  "product_name" => "Teh Botol",
  "qty" => 1,
  "order_price" => 31000,
  "order_subtotal" => 31000
], [
  "id" => 8,
  "order_id" => 4,
  "product_name" => "Air Mineral",
  "qty" => 1,
  "order_price" => 40000,
  "order_subtotal" => 40000
], [
  "id" => 9,
  "order_id" => 5,
  "product_name" => "Air Tajin",
  "qty" => 1,
  "order_price" => 7000,
  "order_subtotal" => 7000
]];



$result = array_filter($data, function ($datas) {
  return $datas['id'] == $_GET['id'];
});
$index = array_search($_GET['id'], array_column($data, 'id'));
// var_dump($result[$index]['ordercode']);
$resultOrDet = array_filter($order_details, function ($order) {});

$indexOrDet = array_search($_GET['id'], array_column($order_details, 'order_id'));
var_dump($indexOrDet)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  .hr-dotted {
    border-top: 1px dashed #000000ff;
  }
</style>

<body>
  <div class="container text-center bg-light mt-5  w-25">
    <div class="p-5">
      <p>Struk Pembelian</p>
      <hr class="hr-dotted">
      <p>Kode Pembelian : <?= $result[$index]['ordercode']  ?></p>
      <p>Tanggal pemebelian : <?= $result[$index]['date']  ?></p>
      <hr class="hr-dotted">
      <p>Harga : <?= $result[$index]['orderamoutn'] ?></p>
      <p>Status Pembayaran : <?= $result[$index]['status'] ?></p>
      <hr class="hr-dotted">
      <h5>Terima Kasih</h5>
    </div>
  </div>

  <script>
    window.print();
  </script>
</body>

</html>