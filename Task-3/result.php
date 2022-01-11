<?php
session_start();
include_once 'layouts/header.php';
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
              echo $_SESSION['cleanliness'];
            }
            ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the service prices ?</td>
        <td><?php if (isset($_SESSION['service-prices'])) {
              echo $_SESSION['service-prices'];
            };
            ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the nursing service ?</td>
        <td><?php if (isset($_SESSION['nursing-service'])) {
              echo $_SESSION['nursing-service'];
            }; ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the level of the doctor ?</td>
        <td><?php if (isset($_SESSION['doctor'])) {
              echo $_SESSION['doctor'];
            }; ?></td>
      </tr>
      <tr>
        <td>Are you satisfied with the calmness in the hospital ?</td>
        <td><?php if (isset($_SESSION['calmness'])) {
              echo $_SESSION['calmness'];
            }; ?></td>
      </tr>
      <tr class="text-light bg-dark">
        <td>Total</td>
        <td><?php ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php include_once 'layouts/footer.php'; ?>