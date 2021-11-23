<?php
include 'includes/header.php';
$page = 'home';
?>
<style>
body {
    background-color: #FCF9F1;
}
.brands_logo_footer {
    display: none;
}
</style>
<main class='cart_page'>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="cart_start">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pe-0 panel ps-4 pe-0">
                            <div class="wishlist_filter">
                                <ul class="breadcrumps_custom ps-4">
                                    <li><a href="javavoid:;">Home </a></li>
                                    <li><a href="javavoid:;">Shop</a></li>
                                    <li><a href="javavoid:;" class="active">Cart</a></li>
                                </ul>
                            </div>
                            <div class="card left_card ms-4 mt-lg-5 mt-3" data-aos="zoom-in-left" data-aos-delay="300" data-aos-duration="800">
                                <div class="d-flex align-items-baseline">
                                    <h2>In Your Cart</h2>
                                    <span class="item">1 Item</span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 p-0">
                                        <img class="img-fluid" src="images/order_summary.png" alt="">
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3>Image Title Here</h3>
                                            <h4>$199.00</h4>
                                        </div>
                                        <p>4000 x 6000px / 33.87 x 50.8cm @300dpi</p>
                                        <p>Photo available for commercial use.1 model release(s) on file</p>
                                        <button class="save"><i class="fas fa-heart"></i>Save</button>
                                        <button class="remove"><i class="fas fa-trash-alt"></i>Remove</button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="offset-md-1 col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pe-0 panel pe-4 ps-0">
                            <h2>ORDER SUMMARY</h2>
                            <div class="right_card card" data-aos="zoom-in-right" data-aos-delay="300" data-aos-duration="800">
                                <h4>
                                    <span>PRODUCTS</span>
                                    <span>TOTAL</span>
                                </h4>
                                <hr>
                                <h5>
                                    <span>FABULAS T-SHIRT</span>
                                    <span>$75</span>
                                </h5>
                                <h5 class="mt-4">
                                    <span>AWESOME T-SHIRT</span>
                                    <span>$80</span>
                                </h5>
                                <hr>
                                <h6>
                                    <span>CART SUBTOTAL</span>
                                    <span>$156</span>
                                </h6>
                                <h3>
                                    <span>ORDER TOTAL PRICE</span>
                                    <span>$155</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-4"><button onclick="location.href='checkout.php'" class="carttocheck">Proceed to Check Out</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>