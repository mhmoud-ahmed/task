<?php
// s3r el fayd kam
// hta5d men el user 3dd el snyn
// hdrob  loam amount * 3dd el snyn
// b3d kada h2ol lo 3dd el snyn < 1 ht3ml function bta5d 3dd el snyn we tdrbo * f2dt el sana el wa7d 
if ($_POST) {
  // uitilty of in 1 year
  $loanOfYear = $_POST['yearOfamount'];
  $loanOfAmount = $_POST['amount'];
  $uitilty = 0.1;

  $uitiltyOfOn = $loanOfAmount * $uitilty;
  $interestRate = $uitiltyOfOn * $loanOfYear;
  $loanAfterInterst = $interestRate + $loanOfAmount;
  $monthly = $loanAfterInterst / ($loanOfYear * 12);
  $table = "<table class=\"table\">
<thead>
  <tr>
    <th scope=\"col\">Interest Rate</th>
    <th scope=\"col\">Amount After Interest</th>
    <th scope=\"col\">Monthly</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>";
  $table .= $interestRate;
  $table .= "</td>
    <td>";
  $table .= $loanAfterInterst;
  $table .= "</td>
    <td>";
  $table .= number_format((float)$monthly, 2, '.', '');
  $table .= "</td>
  </tr>
</tbody>
</table>";
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    body {
      background-color: #17a2b8 !important;
    }
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contianter">
    <div class="row  mt-5">
      <div class="col-12 text-center">
        <h1 class="text-dark h1">Bank</h1>
      </div>
      <div class="offset-5 col-5 mt-4">
        <form method="post">
          <div class="form-group">
            <label for="user">User Name</label>
            <input type="text" name="user" id="email" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="amount">Loan amount</label>
            <input type="number" name="amount" id="email" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="year">Loan Years</label>
            <input type="number" name="yearOfamount" id="email" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <button class="btn btn-dark rounded form-control"> Calculator -></button>
          </div>
        </form>
        <?php if (isset($table)) {
          echo $table;
        } ?>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>