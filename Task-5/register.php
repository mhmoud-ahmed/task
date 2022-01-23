<?php
$title = 'Register';
require_once 'layouts/header.php';
require_once 'layouts/nav.php';
require_once 'layouts/breadcrumb.php';
require_once "app/requests/validation.php";
require_once "app/models/User.php";
if ($_POST) {
    // print_r($_POST);
    $success = [];
    // Valid FirstName
    $firstNameValidation = new Validation('first_name', $_POST['first_name']);
    $resultFirstName = $firstNameValidation->Required();
    $patternName = '/[A-Za-z]{5}/';
    if (empty($resultFirstName)) {
        $firstRegualer = $firstNameValidation->Regualer($patternName);
        if (empty($firstRegualer)) {
            $success['first_name'] = 'first_name';
        }
    }
    // Valid Last Name
    $lastNameValidation = new Validation('last_name', $_POST['last_name']);
    $resultLastName = $lastNameValidation->Required();
    if (empty($resultLastName)) {
        $lastRegualer = $lastNameValidation->Regualer($patternName);
        if (empty($lastRegualer)) {
            $success['last_name'] = 'last_name';
        }
    }
    //  Valid Email
    $emailValidation = new Validation('email', $_POST['email']);
    $patternemail = '/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    $resultEmailValid = $emailValidation->Required();
    if (empty($resultEmailValid)) {
        $emailRegualer = $emailValidation->Regualer($patternemail);
        if (empty($emailRegualer)) {
            $emailunique = $emailValidation->Unique('users');
            if (empty($emailunique)) {
                $success['email'] = 'email';
            }
        }
    }

    //  Valid Phone
    $phoneValidation = new Validation('phone', $_POST['phone']);
    $patternphone = '/^01[0-2,5]{1}[0-9]{8}$/';
    $resultPhoneValid = $phoneValidation->Required();
    if (empty($resultPhoneValid)) {
        $phoneRegualer = $phoneValidation->Regualer($patternphone);
        if (empty($phoneRegualer)) {
            $phoneunique = $phoneValidation->Unique('users');
            if (empty($phoneunique)) {
                $success['phone'] = 'phone';
            }
        }
    }
    // Valid password
    $passwordValidation = new Validation('password', $_POST['password']);
    $resultPassword = $passwordValidation->Required();
    $patternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/';
    if (empty($resultPassword)) {
        $passwordRegualer = $passwordValidation->Regualer($patternPassword);
        if (empty($passwordRegualer)) {
            $passwordConfirm = $passwordValidation->confirmed($_POST['confirm-password']);
            if (empty($passwordConfirm)) {
                $success['password'] = 'password';
            }
        }
    }

    if (isset($success['first_name']) && isset($success['last_name']) && isset($success['email']) && isset($success['phone']) && isset($success['password'])) {
        //echo "inster";
        $userData = new User;
        $userData->setFirst_name($_POST['first_name']);
        $userData->setLast_name($_POST['last_name']);
        $userData->setEmail($_POST['email']);
        $userData->setPhone($_POST['phone']);
        $userData->setPassword($_POST['password']);
        $code = rand(10000, 99999);
        $userData->setCode($code);
        $result = $userData->create();
    }
}
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
                                        <?= empty($resultFirstName) ? "" : "<div class = 'alert alert-danger'> $resultFirstName </div>"; ?>
                                        <?= empty($firstRegualer) ? "" : "<div class = 'alert alert-danger'> Sorry, the number of characters must be greater than 3 </div>"; ?>
                                        <input type="text" name="last_name" placeholder="Last Name" value="<?php if (isset($_POST['last_name'])) {
                                                                                                                echo $_POST['last_name'];
                                                                                                            } ?>">
                                        <?= empty($resultLastName) ? "" : "<div class = 'alert alert-danger'> $resultLastName </div>"; ?>
                                        <?= empty($lastRegualer) ? "" : "<div class = 'alert alert-danger'> Sorry, the number of characters must be greater than 3 </div>"; ?>
                                        <input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) {
                                                                                                        echo $_POST['email'];
                                                                                                    } ?>">
                                        <?= empty($resultEmailValid) ? "" : "<div class = 'alert alert-danger'> $resultEmailValid </div>"; ?>
                                        <?= empty($emailRegualer) ? "" : "<div class = 'alert alert-danger'> It checks if email contains at least one character (also number or whatever except another '@' or whitespace) before '@', at least two characters (or whatever except another '@' or whitespace) after '@' and one dot in between. This pattern does not accept addresses like lol@company</div>"; ?>
                                        <?= empty($emailunique) ? "" : "<div class = 'alert alert-danger'> $emailunique</div>"; ?>
                                        <input type="text" name="phone" placeholder="Phone" value="<?php if (isset($_POST['phone'])) {
                                                                                                        echo $_POST['phone'];
                                                                                                    } ?>">
                                        <?= empty($resultPhoneValid) ? "" : "<div class = 'alert alert-danger'> $resultPhoneValid </div>"; ?>
                                        <?= empty($phoneRegualer) ? "" : "<div class = 'alert alert-danger'>  make sure the inputted number start with '011', '012','015' or '010' and then 8 digits</div>"; ?>
                                        <?= empty($phoneunique) ? "" : "<div class = 'alert alert-danger'>  $phoneunique</div>"; ?>
                                        <input type="password" name="password" placeholder="Passowrd">
                                        <?= empty($resultPassword) ? "" : "<div class = 'alert alert-danger'> $resultPassword </div>"; ?>
                                        <?= empty($passwordRegualer) ? "" : "<div class = 'alert alert-danger'>  Minimum 8 characters,Maximum 20 characters, at least one uppercase letter, one lowercase letter, one number and one special character:</div>"; ?>
                                        <input type="password" name="confirm-password" placeholder="Confairm Passowrd">
                                        <?= empty($passwordConfirm) ? "" : "<div class='alert alert-danger'>$passwordConfirm</div>"; ?>
                                        <select name="gender" id="" class="form-control mb-4">
                                            <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'm') ? "selected" : ""; ?> value="m">Male</option>
                                            <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'f') ? "selected" : ""; ?> value="f">Female</option>
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