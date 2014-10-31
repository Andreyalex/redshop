<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>
<style>
    table, tr, td {
      border: 1px solid #dddddd;
      border-collapse: collapse;
    }

    table {
      margin-bottom: 20px;
      width: 100%;
    }

    table thead td {
        background-color: #f0f0f0;
    }
    table td {
        padding: 10px;
    }
</style>
  <?php foreach ($orders as $order) { ?>
  <div style="page-break-after: auto;">

      <table class="table table-striped table-bordered" style="margin-left:40%">
          <tbody>
             <tr>
                <td><?php echo $text_date_added; ?></td>
                <td><b><?php echo $order['date_added']; ?></b></td>
            </tr>
            <tr>
                <td><?php echo $text_payment_method; ?></td>
                <td><b><?php echo $order['payment_method']; ?></b></td>
            </tr>
            <?php if ($order['shipping_method']) { ?>
            <tr>
                <td><?php echo $text_shipping_method; ?></td>
                <td><b><?php echo $order['shipping_method']; ?></b></td>
            </tr>
             <?php } ?>
          </tbody>
      </table>

      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <td colspan="2">Данные о клиенте</td>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>ФИО</td>
                  <td><?php echo $order['customer_name']; ?></td>
              </tr>
              <tr>
                  <td>Адрес</td>
                  <td><?php echo $order['customer_address']; ?></td>
              </tr>
          </tbody>
      </table>

      <h1><?php echo $text_invoice; ?> #<?php echo $order['order_id']; ?></h1>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td><b>№</b></td>
          <td><b>Наименование</b></td>
          <td><b><?php echo $column_model; ?></b></td>
          <td class="text-right"><b>Кол-во</b></td>
          <td class="text-right"><b>Цена</b></td>
          <td class="text-right"><b>Сумма</b></td>
        </tr>
      </thead>
      <tbody>
        <?php $i=0; foreach ($order['product'] as $product) { $i++; ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $product['name']; ?>
            <?php foreach ($product['option'] as $option) { ?>
            <br />
            &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
            <?php } ?></td>
          <td><?php echo $product['model']; ?></td>
          <td class="text-right"><?php echo $product['quantity']; ?></td>
          <td class="text-right"><?php echo $product['price']; ?></td>
          <td class="text-right"><?php echo $product['total']; ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($order['voucher'] as $voucher) { ?>
        <tr>
          <td><?php echo $voucher['description']; ?></td>
          <td></td>
          <td></td>
          <td class="text-right">1</td>
          <td class="text-right"><?php echo $voucher['amount']; ?></td>
          <td class="text-right"><?php echo $voucher['amount']; ?></td>
        </tr>
        <?php } ?>
        <?php foreach ($order['total'] as $total) { ?>
        <tr>
          <td class="text-right" colspan="5"><b><?php echo $total['title']; ?></b></td>
          <td class="text-right"><?php echo $total['text']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php if ($order['comment']) { ?>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td><b><?php echo $column_comment; ?></b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $order['comment']; ?></td>
        </tr>
      </tbody>
    </table>
    <?php } ?>
  </div>
  <?php } ?>
</body>
</html>