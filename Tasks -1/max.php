<?php

if ($_POST) {
  if ($_POST['number1'] > $_POST['number2']) {
    if ($_POST['number1'] > $_POST['number3']) {
      $massageMaxNumber = " The First Number is max number " . $_POST['number1'];
    }
  } elseif ($_POST['number2'] > $_POST['number3']) {
    $massageMaxNumber = " The Second Number is max number " . $_POST['number2'];
  } else {
    $massageMaxNumber = " The Third Number is max number " . $_POST['number3'];
  }
  if ($_POST['number1'] < $_POST['number2']) {
    if ($_POST['number1'] < $_POST['number3']) {
      $massageMinNumber = " The First Number is min number " . $_POST['number1'];
    }
  } elseif ($_POST['number2'] < $_POST['number3']) {
    $massageMinNumber = " The Second Number is min number " . $_POST['number2'];
  } else {
    $massageMinNumber = " The Third Number is min number " . $_POST['number3'];
  }

  $message = "<div class='alert alert-danger mt-5'> <h4>$massageMaxNumber</h4>
          <h4>$massageMinNumber</h4></div>";
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
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
        <h2 class="text-center">Calculate the largest value and the smallest value</h2>
      </div>
      <div class="offset-3 col-6 mt-5">
        <form method="POST">
          <div class="form-group">
            <label for="number1">Please Enter First Number</label>
            <input type="number" name="number1" class="form-control" id="number1">
          </div>
          <div class="form-group">
            <label for="number2">Please Enter The Second Number</label>
            <input type="number" name="number2" class="form-control" id="number2">
          </div>
          <div class="form-group">
            <label for="number3">Please Enter The Third Nubmer</label>
            <input type="number" name="number3" class="form-control" id="number3">
          </div>
          <button type="submit" name="minmax" class="btn btn-primary">Submit</button>
        </form>
        <?php if (isset($message)) {
          echo $message;
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