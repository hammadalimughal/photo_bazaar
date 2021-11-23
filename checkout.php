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
<main class='checkout_page'>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 panel">
                        <div class="left_section">
                            <h2>YOUR CONTACT EMAIL</h2>
                            <div class="card log_in_card" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
                                <div class="row justify-content-between">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input_field">
                                            <label for="">Email *</label>
                                            <input type="text">
                                        </div>
                                        <div class="input_field">
                                            <label for="">Password *</label>
                                            <input type="password">
                                        </div>
                                        <div class="row btn_sign_in">
                                            <div class="col-6"><button>Sign in</button></div>
                                            <div class="col-6"><a href="javascript:;">Forgot password?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 p-xxl-0 ps-3">
                                        <h4>CREATE AN ACCOUNT</h4>
                                        <div class="radio_field">
                                            <input type="radio" name="log_in_other" id="create_acc">
                                            <label for="create_acc">Register and checkout together</label>
                                        </div>
                                        <h4 class="mt-4">GUEST CHECKOUT</h4>
                                        <div class="radio_field">
                                            <input type="radio" name="log_in_other" id="guest_acc">
                                            <label for="guest_acc">Checkout without registering</label>
                                        </div>
                                        <div class="col-6"><button class="continue">Continue</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="billing_form">
                                <h2>BILLING Information</h2>
                                <div class="row" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Company Name">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Address">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Town / City">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="State / Country">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Postcode / ZIP">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 col-6">
                                        <button>Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 panel">
                        <div class="right_section">
                            <h2>ORDER SUMMARY</h2>
                            <div class="card ord_summ_card" data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                                <div class="d-flex align-items-end">
                                    <h3 class="m-0 p-0">In Your Cart</h3>
                                    <span class="item">1 item</span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-4 p-0 ps-2">
                                        <img class="img-fluid" src="images/order_summary.png" alt="img">
                                    </div>
                                    <div class="col-8 p-0 ps-xl-4 ps-2">
                                        <div class="product_summary">
                                            <h4>Image Title Here
                                                <span>$199.00</span>
                                            </h4>
                                            <p>4000 x 6000px / 33.87 x 50.8cm @300dpi</p>
                                            <p>Photo available for commercial use.1 model release(s) on file</p>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="dark_h6">
                                    <span>PRODUCTS</span>
                                    <span>TOTAL</span>
                                </h6>
                                <hr>
                                <h6>
                                    <span>FABULAS T-SHIRT</span>
                                    <span>$75</span>
                                </h6>
                                <h6>
                                    <span>AWESOME T-SHIRT</span>
                                    <span>$80</span>
                                </h6>
                                <hr>
                                <h6>
                                    <span>CART SUBTOTAL</span>
                                    <span>$156</span>
                                </h6>
                                <h5>
                                    <span>ORDER TOTAL PRICE</span>
                                    <span>$155</span>
                                </h5>
                            </div>
                        </div>
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