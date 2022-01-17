<?php
$title = 'Register';
require_once 'layouts/header.php';
require_once 'layouts/nav.php';
require_once 'layouts/breadcrumb.php';
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="first_name" placeholder="First Name" value="<?php if (isset($_POST['first_name'])) {
                                                                                                                    echo $_POST['first_name'];
                                                                                                                } ?>">
                                        <input type="text" name="last_name" placeholder="Last Name" value="<?php if (isset($_POST['last_name'])) {
                                                                                                                echo $_POST['last_name'];
                                                                                                            } ?>">
                                        <input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) {
                                                                                                        echo $_POST['email'];
                                                                                                    } ?>">
                                        <input type="text" name="phone" placeholder="Phone" value="<?php if (isset($_POST['phone'])) {
                                                                                                        echo $_POST['phone'];
                                                                                                    } ?>">
                                        <input type="password" name="user-password" placeholder="Passowrd">
                                        <input type="password" name="user-password" placeholder="Confairm Passowrd">
                                        <select name="gender" id="" class="form-control mb-4">
                                            <option value="select">Select You Gender</option>
                                            <option <?php if (isset($_POST['m'])) {
                                                        echo 'selected';
                                                    } ?> value="m">Male</option>
                                            <option value="f" <?php if (isset($_POST['f'])) {
                                                                    echo 'selected';
                                                                } ?>>Female</option>
                                        </select>
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'layouts/footer.php';
require_once 'layouts/footer-scriptes.php';
?>