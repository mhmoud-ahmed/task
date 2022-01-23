<?php
require_once "app/models/Category.php";
require_once "app/models/Subcategory.php";

$categoryObject = new Category;
$categoryObject->setStatus(1);
$resultCategory = $categoryObject->read(); // Info About Query

$subcategoryObject = new Subcategory;
$subcategoryObject->setStatus(1);

?>
<!-- header start -->
<header class="header-area gray-bg clearfix">
  <div class="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6">
          <div class="logo">
            <a href="index.php">
              <img alt="" src="assets/img/logo/logo.png">
            </a>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-6">
          <div class="header-bottom-right">
            <div class="main-menu">
              <nav>
                <ul>
                  <li class="top-hover"><a href="index.php">home</a>
                  </li>
                  <li><a href="shop.php"> Shop </a>
                  </li>
                  <li class="mega-menu-position top-hover"><a href="shop.php">Categories</a>
                    <ul class="mega-menu">
                      <?php
                      if ($resultCategory) {
                        $categories = $resultCategory->fetch_all(MYSQLI_ASSOC);
                        // print_r($categories);
                        // die;
                        foreach ($categories as $key => $category) {
                          // print_r($category);
                          // die;
                      ?>
                          <li>
                            <ul>
                              <li class="mega-menu-title"><?= $category['name_en'] ?></li>
                              <?php
                              $subcategoryObject->setCategorie_id($category['id']);
                              $resultSubCategories = $subcategoryObject->getSubByCats();
                              // print_r($resultSubCategories);die;
                              if ($resultSubCategories) {
                                $subCategories = $resultSubCategories->fetch_all(MYSQLI_ASSOC);
                                foreach ($subCategories as $index => $subcategory) {
                              ?>
                                  <li><a href="shop.php?sub=<?= $subcategory['id'] ?>"><?= $subcategory['name_en'] ?></a></li>
                              <?php
                                }
                              }
                              ?>
                            </ul>
                          </li>
                      <?php } } ?>
                    </ul>
                  </li>
                  <li><a href="contact.php">contact</a></li>
                  <li><a href="about-us.php">about</a></li>
                </ul>
              </nav>
            </div>
            <div class="header-currency">
              <span class="digit">Welcome <i class="ti-angle-down"></i></span>
              <div class="dollar-submenu">
                <ul>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                </ul>
              </div>
            </div>
            <div class="header-cart">
              <a href="#">
                <div class="cart-icon">
                  <i class="ti-shopping-cart"></i>
                </div>
              </a>
              <div class="shopping-cart-content">
                <ul>
                  <li class="single-shopping-cart">
                    <div class="shopping-cart-img">
                      <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                    </div>
                    <div class="shopping-cart-title">
                      <h4><a href="#">Phantom Remote </a></h4>
                      <h6>Qty: 02</h6>
                      <span>$260.00</span>
                    </div>
                    <div class="shopping-cart-delete">
                      <a href="#"><i class="ion ion-close"></i></a>
                    </div>
                  </li>
                  <li class="single-shopping-cart">
                    <div class="shopping-cart-img">
                      <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                    </div>
                    <div class="shopping-cart-title">
                      <h4><a href="#">Phantom Remote</a></h4>
                      <h6>Qty: 02</h6>
                      <span>$260.00</span>
                    </div>
                    <div class="shopping-cart-delete">
                      <a href="#"><i class="ion ion-close"></i></a>
                    </div>
                  </li>
                </ul>
                <div class="shopping-cart-total">
                  <h4>Shipping : <span>$20.00</span></h4>
                  <h4>Total : <span class="shop-total">$260.00</span></h4>
                </div>
                <div class="shopping-cart-btn">
                  <a href="cart-page.php">view cart</a>
                  <a href="checkout.php">checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu-area">
        <div class="mobile-menu">
          <nav id="mobile-menu-active">
            <ul class="menu-overflow">
              <li><a href="#">HOME</a>
                <ul>
                  <li><a href="index.php">home version 1</a></li>
                  <li><a href="index-2.php">home version 2</a></li>
                </ul>
              </li>
              <li><a href="#">pages</a>
                <ul>
                  <li><a href="about-us.php">about us </a></li>
                  <li><a href="shop.php">shop Grid</a></li>
                  <li><a href="shop-list.php">shop list</a></li>
                  <li><a href="product-details.php">product details</a></li>
                  <li><a href="cart-page.php">cart page</a></li>
                  <li><a href="checkout.php">checkout</a></li>
                  <li><a href="wishlist.php">wishlist</a></li>
                  <li><a href="my-account.php">my account</a></li>
                  <li><a href="login-register.php">login / register</a></li>
                  <li><a href="contact.php">contact</a></li>
                </ul>
              </li>
              <li><a href="contact.php"> Contact us </a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end -->