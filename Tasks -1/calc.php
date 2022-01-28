<?php

if ($_POST) {
    $surcharge = 0.20;
		$unite = $_POST['unite'];
    if ($unite  <= 50) {
        $priceOneUnite = 0.50;
        $priceBeforeSurcharge = $unite  * $priceOneUnite; // Price Befor Surcharge
        $priceAfterSurcharge = $priceBeforeSurcharge * $surcharge;
        $total = $priceAfterSurcharge + $priceBeforeSurcharge;
    } elseif ($unite  > 50 && $unite  <= 150) {
        $priceOneUnite = 0.75;
        $priceBeforeSurcharge = $unite  * $priceOneUnite; // Price Befor Surcharge
        $priceAfterSurcharge = $priceBeforeSurcharge * $surcharge;
        $total = $priceAfterSurcharge + $priceBeforeSurcharge;
    } elseif ($unite  > 150 && $unite  <= 250) {
        $priceOneUnite = 1.20;
        $priceBeforeSurcharge = $unite  * $priceOneUnite; // Price Befor Surcharge
        $priceAfterSurcharge = $priceBeforeSurcharge * $surcharge;
        $total = $priceAfterSurcharge + $priceBeforeSurcharge;
    } else {
        $priceOneUnite = 1.50;
        $priceBeforeSurcharge = $unite  * $priceOneUnite; // Price Befor Surcharge
        $priceAfterSurcharge = $priceBeforeSurcharge * $surcharge; // Value surcharge
        $total = $priceAfterSurcharge + $priceBeforeSurcharge; // Total Price
    }
		$message = "<div class='alert alert-primary  mt-5'>
		<ul>
		<li> Unite Used : $priceBeforeSurcharge </li>
		<li> Price Unite : $priceOneUnite </li>
		<li> Price : $unite </li>
		<li> surcharge : 20 % </li>
		<li> Value surcharge :  $priceAfterSurcharge</li>
		<li> Total Bill :  $total</li>
		</ul>
		
	
	</div>";
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
                <h2 class="text-center">Bill  Unit electricity </h2>
            </div>
            <div class="offset-3 col-6 mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="number">Please Enter Unite</label>
                        <input type="number" name="unite" class="form-control" id="unite">
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