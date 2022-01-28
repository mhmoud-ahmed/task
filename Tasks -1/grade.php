<?php

if ($_POST) {
	if ($_POST['arabic'] <= 50) {
		$arabic = $_POST['arabic'];
		if ($_POST['science'] <= 50) {
			$science = $_POST['science'];
			if ($_POST['math'] <= 50) {
				$math = $_POST['math'];
				if ($_POST['english'] <= 50) {
					$english = $_POST['english'];
					if ($_POST['computer'] <= 50) {
						$computer = $_POST['computer'];
					} else {
						echo "Max Degree Is 50 Please Check english Degree";
					}
				} else {
					echo "Max Degree Is 50 Please Check english Degree";
				}
			} else {
				echo "Max Degree Is 50 Please Check math Degree";
			}
		} else {
			echo "Max Degree Is 50 Please Check science Degree";
		}
	} else {
		echo "Max Degree Is 50 Please Check Arabic Degree";;
	}
	$total = $arabic + $science + $math + $english + $computer;
	$totalDegree = 250;
	$Percentage = ($total / $totalDegree) * 100;
	if ($Percentage >= 90) {
		$message = "Your Grad A";
	} elseif ($Percentage >= 80) {
		$message = "Your Grad B";
	} elseif ($Percentage >= 70) {
		$message = "Your Grad C";
	} elseif ($Percentage >= 60) {
		$message = "Your Grad D";
	} elseif ($Percentage >= 40) {
		$message = "Your Grad E";
	} elseif ($Percentage < 40) {
		$message = "Your Grad F";
	}
	$result = "<div class='alert alert-primary  mt-5'>
		<ul>
		<li> Arabic : $arabic</li>
		<li> Science : $science</li>
		<li> Math : $math</li>
		<li> English : $english</li>
		<li> Arabic : $computer</li>
		<li> Total : <b>$total</b></li>
		<li> TotalDegree : <b>$totalDegree</b></li>
		<li> Percentage : <b>$Percentage%</b></li>
		<li> Percentage : <b>$message</b></li>
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
				<h2 class="text-center">Exam score result</h2>
			</div>
			<div class="offset-3 col-6 mt-5">
				<form method="POST">
					<div class="form-group">
						<label for="number1">Please Enter The Arabic Degree</label>
						<input type="number" name="arabic" class="form-control" id="number1">
					</div>
					<div class="form-group">
						<label for="number2">Please Enter Science Degree</label>
						<input type="number" name="science" class="form-control" id="number2">
					</div>
					<div class="form-group">
						<label for="number3">Please Enter Math Degree</label>
						<input type="number" name="math" class="form-control" id="number3">
					</div>
					<div class="form-group">
						<label for="number3">Please Enter English Degree</label>
						<input type="number" name="english" class="form-control" id="number3">
					</div>
					<div class="form-group">
						<label for="number3">Please Enter Computer Degree</label>
						<input type="number" name="computer" class="form-control" id="number3">
					</div>
					<button type="submit" name="minmax" class="btn btn-primary">Submit</button>
				</form>
				<?php if (isset($result)) {
					echo $result;
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