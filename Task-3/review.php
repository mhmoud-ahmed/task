<?php
session_start();
include_once 'layouts/header.php';
if ($_POST) {
  foreach ($_POST['cleanliness'] as $index => $value) {
    if ($index == 0) {
      $_SESSION['cleanliness'] = $value;
      echo $_SESSION['cleanliness'];
    } elseif ($index == 1) {
      $_SESSION['cleanliness'] = $value;
      echo $_SESSION['cleanliness'];
    } elseif ($index == 2) {
      $_SESSION['cleanliness'] = $value;
      echo $_SESSION['cleanliness'];
    } else{
      $_SESSION['cleanliness'] = $value;
      echo $_SESSION['cleanliness'];
    }
  }
  foreach ($_POST['service-prices'] as $index => $value) {
    if ($index == 0) {
      $_SESSION['service-prices'] = $value;
      echo $_SESSION['service-prices'];
    } elseif ($index == 1) {
      $_SESSION['service-prices'] = $value;
      echo $_SESSION['service-prices'];
    } elseif ($index == 2) {
      $_SESSION['service-prices'] = $value;
      echo $_SESSION['service-prices'];
    } elseif ($index == 3) {
      $_SESSION['service-prices'] = $value;
      echo $_SESSION['service-prices'];
    }
  }
  foreach ($_POST['nursing-service'] as $index => $value) {
    if ($index == 0) {
      $_SESSION['nursing-service'] = $value;
      echo $_SESSION['nursing-service'];
    } elseif ($index == 1) {
      $_SESSION['nursing-service'] = $value;
      echo $_SESSION['nursing-service'];
    } elseif ($index == 2) {
      $_SESSION['nursing-service'] = $value;
      echo $_SESSION['nursing-service'];
    } elseif ($index == 3) {
      $_SESSION['nursing-service'] = $value;
      echo $_SESSION['nursing-service'];
    }
  }
  foreach ($_POST['doctor'] as $index => $value) {
    if ($index == 0) {
      $_SESSION['doctor'] = $value;
      echo $_SESSION['doctor'];
    } elseif ($index == 1) {
      $_SESSION['doctor'] = $value;
      echo $_SESSION['doctor'];
    } elseif ($index == 2) {
      $_SESSION['doctor'] = $value;
      echo $_SESSION['doctor'];
    } elseif ($index == 3) {
      $_SESSION['doctor'] = $value;
      echo $_SESSION['doctor'];
    }
  }
  foreach ($_POST['calmness'] as $index => $value) {
    if ($index == 0) {
      $_SESSION['calmness'] = $value;
      echo $_SESSION['calmness'];
    } elseif ($index == 1) {
      $_SESSION['calmness'] = $value;
      echo $_SESSION['calmness'];
    } elseif ($index == 2) {
      $_SESSION['calmness'] = $value;
      echo $_SESSION['calmness'];
    } elseif ($index == 3) {
      $_SESSION['calmness'] = $value;
      echo $_SESSION['calmness'];
    }
  }

}
?>
<div class="container mt-5">
  <form action="result.php" method="POST">
    <div class="col-12 mt-5 mb-5 text-center">
      <h1>Hospital</h1>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Questions ?</th>
          <th scope="col">Bad</th>
          <th scope="col">Good</th>
          <th scope="col">Very Good</th>
          <th scope="col">Excellent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Are you satisfied with the level of cleanliness ?</th>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cleanliness[]" id="inlineRadio1" value="Bad">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cleanliness[]" id="inlineRadio2" value="Good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cleanliness[]" id="inlineRadio3" value="Very good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="cleanliness[]" id="inlineRadio3" value="Excellent">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the service prices ?</th>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="service-prices[]" id="inlineRadio1" value="Bad">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="service-prices[]" id="inlineRadio2" value="Good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="service-prices[]" id="inlineRadio3" value="Very good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="service-prices[]" id="inlineRadio3" value="Excellent">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the nursing service ?</th>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nursing-service[]" id="inlineRadio1" value="Bad">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nursing-service[]" id="inlineRadio2" value="Good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nursing-service[]" id="inlineRadio3" value="Very good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="nursing-service[]" id="inlineRadio3" value="Excellent">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the level of the doctor ?</th>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="doctor[]" id="inlineRadio1" value="Bad">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="doctor[]" id="inlineRadio2" value="Good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="doctor[]" id="inlineRadio3" value="Very good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="doctor[]" id="inlineRadio3" value="Excellent">
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the calmness in the hospital ?</th>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="calmness[]" id="inlineRadio1" value="Bad">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="calmness[]" id="inlineRadio2" value="Good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="calmness[]" id="inlineRadio3" value="Very good">
            </div>
          </td>
          <td>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="calmness[]" id="inlineRadio3" value="Excellent">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <button class="btn btn-Dark w-100 mt-3" type="submit">Survey</button>

  </form>
</div>
<?php include_once 'layouts/footer.php' ?>