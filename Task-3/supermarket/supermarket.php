<?php

// update like you 
if (isset($_POST['enter_products'])) {
  $table = drawTable($_POST['product_number']);
}

if (isset($_POST['view_invoice'])) {
  $table = drawInvoice($_POST['product_number']);
}
function calcDiscount($total)
{
  if ($total <= 1000) {
    return 0;
  } elseif ($total <= 3000 && $total > 1000) {
    return 0.1;
  } elseif ($total <= 4500 && $total > 3000) {
    return 0.15;
  } else {
    return 0.2;
  }
}
function calcDelivery($city)
{
  switch ($city) {
    case 'cairo':
      return 0;
    case 'alex':
      return 50;
    case 'giza':
      return 30;
    default:
      return 100;
  }
}
function drawTable($numberOfProducts)
{
  $table =  "<table class='table'>
                  <thead>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                  </thead>
                  <tbody>";
  for ($i = 1; $i <= $numberOfProducts; $i++) {
    $table .=  "<tr>
                                      <td>
                                          <input class='form-control' type='text' name='product_name$i'>
                                      </td>
                                      <td>
                                          <input class='form-control' type='number' name='product_price$i' >
                                      </td>
                                      <td>
                                          <input class='form-control' type='number' name='product_quantity$i'>
                                      </td>
                                  </tr>";
  }

  $table .=   "<tr> <td colspan=3> <button class='btn btn-dark rounded form-control' name='view_invoice'> View Invoice </button></td> </tr>
                      </tbody>
                  </table>";
  return $table;
}

function drawInvoice($numberOfProducts)
{
  $total = 0;
  $table = "<table class='table'>
                  <thead class='text-danger'>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Sub Total</th>
                  </thead>
                  <tbody>";
  for ($i = 1; $i <= $numberOfProducts; $i++) {
    $subtotal = $_POST['product_price' . $i] * $_POST['product_quantity' . $i];
    $total += $subtotal;
    $table .=  "<tr>
                                      <td>
                                          {$_POST['product_name' .$i]}
                                      </td>
                                      <td>
                                          {$_POST['product_price' .$i]}
                                      </td>
                                      <td>
                                          {$_POST['product_quantity' .$i]}
                                      </td>
                                      <td>
                                          $subtotal
                                      </td>
                                  </tr>";
  }
  $discount = calcDiscount($total);
  $discountPercentage = $discount * 100;
  $discountValue = $total * $discount;
  $totalAfterDiscount = $total - $discountValue;
  $delivery = calcDelivery($_POST['city']);
  $netTotal = $delivery + $totalAfterDiscount;
  $table .=   "
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Client Name
                          </td>
                          <td colspan=2>
                              {$_POST['name']}
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              City
                          </td>
                          <td colspan=2>
                              {$_POST['city']}
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Total
                          </td>
                          <td colspan=2>
                              $total <b>EGP</b>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Discount Percentage
                          </td>
                          <td colspan=2>
                              $discountPercentage  <b>%</b>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Discount Value
                          </td>
                          <td colspan=2>
                              $discountValue <b>EGP</b>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Total After Discount
                          </td>
                          <td colspan=2>
                              $totalAfterDiscount <b>EGP</b>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold'>
                              Delivery
                          </td>
                          <td colspan=2>
                              $delivery <b>EGP</b>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=2 class='font-weight-bold tex'>
                              Net Total
                          </td>
                          <td colspan=2>
                              <b> $netTotal EGP</b>
                          </td>
                      </tr>
                  </tbody>
              </table>";
  return $table;
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contianter">
    <div class="row  mt-5">
      <div class="col-12 text-center">
        <h1 class="text-dark h1">SuperMarket</h1>
      </div>
      <div class="offset-5 col-5 mt-4">
        <form method="post">
          <div class="form-group">
            <label for="user">User Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) {
                                                    echo $_POST['name'];
                                                  } ?>" class="form-control" aria-describedby="helpId">
          </div>
          <div class="form-group ">
            <label for="user">City</label>
            <select name="city" class="form-control">
              <option <?php if (isset($_POST['city']) && $_POST['city'] == 'giza') {
                        echo 'selected';
                      } ?> value="giza">Giza</option>
              <option <?php if (isset($_POST['city']) && $_POST['city'] == 'cairo') {
                        echo 'selected';
                      } ?> value="cairo">Cairo</option>
              <option <?php if (isset($_POST['city']) && $_POST['city'] == 'others') {
                        echo 'selected';
                      } ?> value="others">others</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Number">Number OF Varieties</label>
            <input type="number" name="varieties" value="<?php if (isset($_POST['varieties'])) {
                                                            echo $_POST['varieties'];
                                                          } ?>" class="form-control" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <button class="btn btn-dark rounded form-control"> Enter Products</button>
          </div>
        </form>
      </div>
      <?php echo $formProduct; ?>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>