<?php
include_once 'layouts/header.php';
// Htt3ml be funtion y m3ml

?>
<div class="container mt-5">
  <h1 class="text-center mb-5">Hospital Result</h1>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Questions ?</th>
        <th scope="col">Review</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Are you satisfied with the level of cleanliness ?</td>
        <td><?php
            if (isset($_SESSION['cleanliness'])) {
              $resultClean =  $_SESSION['cleanliness'];
              echo $resultClean;
              if ($resultClean == 'Bad') {
                $cleanPoint = 0;
              } elseif ($resultClean == 'Good') {
                $cleanPoint = 3;
              } elseif ($resultClean == 'Very good') {
                $cleanPoint = 5;
              } else {
                $cleanPoint = 10;
              }
            }
            ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the service prices ?</td>
        <td><?php if (isset($_SESSION['service-prices'])) {
              $resultServ = $_SESSION['service-prices'];
              echo $resultServ;
              if ($resultServ == 'Bad') {
                $servPoint = 0;
              } elseif ($resultServ == 'Good') {
                $servPoint = 3;
              } elseif ($resultServ == 'Very good') {
                $servPoint = 5;
              } else {
                $servPoint = 10;
              }
            };
            ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the nursing service ?</td>
        <td><?php if (isset($_SESSION['nursing-service'])) {
              $resultNurs = $_SESSION['nursing-service'];
              echo $resultNurs;
              if ($resultNurs == 'Bad') {
                $nursPoint = 0;
              } elseif ($resultNurs == 'Good') {
                $nursPoint = 3;
              } elseif ($resultNurs == 'Very good') {
                $nursPoint = 5;
              } else {
                $nursPoint = 10;
              }
            }; ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the level of the doctor ?</td>
        <td><?php if (isset($_SESSION['doctor'])) {
              $resultDoctor = $_SESSION['doctor'];
              echo $resultDoctor;
              if ($resultDoctor == 'Bad') {
                $doctorPoint = 0;
              } elseif ($resultDoctor == 'Good') {
                $doctorPoint = 3;
              } elseif ($resultDoctor == 'Very good') {
                $doctorPoint = 5;
              } else {
                $doctorPoint = 10;
              }
            }; ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the calmness in the hospital ?</td>
        <td><?php if (isset($_SESSION['calmness'])) {
              $resultClamness = $_SESSION['calmness'];
              echo $resultClamness;
              if ($resultClamness == 'Bad') {
                $calmnessPoint = 0;
              } elseif ($resultClamness == 'Good') {
                $calmnessPoint = 3;
              } elseif ($resultClamness == 'Very good') {
                $calmnessPoint = 5;
              } else {
                $calmnessPoint = 10;
              }
            }; ?></td>
      </tr>
      <tr class="text-light bg-dark">
        <td>Total</td>
        <?php
        function totalReview()
        {
          global
            $cleanPoint,
            $servPoint,
            $nursPoint,
            $doctorPoint,
            $calmnessPoint;
          $total = $cleanPoint + $servPoint + $nursPoint + $doctorPoint + $calmnessPoint;
          return $total;
        }
        $Message = '';
        if (totalReview() >= 25) {
          $total = 'Good';
          $Message = 'Thanks';
        } else {
          $total = 'Bad';
          $Message = 'We Are Sory We will Call you ' . $_SESSION['phone'];
        }
        ?>
        <td><?php echo $total ?></td>
      </tr>
    </tbody>
  </table>
  <?php
  if (!empty($Message)) {
    echo "<h6 class='alert alert-danger'>$Message</h6>";
  }else {
    "<h6 class='alert alert-primary'>$Message</h6>";
  }
  ?>
</div>
<?php
include_once 'layouts/footer.php';
die; ?>