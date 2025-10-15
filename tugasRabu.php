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


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5">
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Order Code</td>
          <td>Order amount</td>
          <td>Date Order</td>
          <td>status</td>
          <td>aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $key => $datas): ?>
          <tr>
            <th><?= $key + 1 ?></th>
            <th><?= $datas['ordercode'] ?></th>
            <th>Rp.<?=number_format($datas['orderamoutn'],2, ',' , '.') ?></th>
            <th><?= $datas['date'] ?></th>
            <th>
              <?php if ($datas['status'] == 'payment') { ?>
                <span class="badge text-bg-success p-2">payment</span>
              <?php } else { ?>
                <span class="badge text-bg-warning p-2">order</span>
              <?php } ?>
            </th>
            <th>
              <a href="struk.php?id=<?php echo $datas['id'] ?>" class="btn btn-primary" target="_blank">Print Struk</a>
            </th>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>