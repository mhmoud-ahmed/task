<?php
include_once "layouts/header.php";

if ($_POST) {
  if (!empty($_POST)) {
    $_SESSION['phone'] = $_POST['phone'];
    header('location:review.php');
  }
}
?>

<div class="container">
  <form method="POST">
    <div class="row mt-5">
      <div class="col-12 mb-3">
        <h1><span>H</span>ospital</h1>
      </div>
      <div class="col-md-6 mb-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="phone-number">Phone Number</span>
          </div>
          <input type="number" class="form-control" name="phone" id="phone-number" aria-describedby="inputGroupPrepend" required>
        </div>
        <small class="form-text text-muted">
          We do not sell your personal infromation to anyone.
        </small>
      </div>
    </div>
    <button class="btn btn-primary w-50 mt-3" type="submit">Survey</button>
  </form>
</div>
<?php
include_once "layouts/footer.php";
/* <span class="input-group-text" id="inputGroupPrepend3">@</span>

?><div class="invalid-feedback">
Please choose a username.
</div> */