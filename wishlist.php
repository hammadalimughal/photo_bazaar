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
<main class='wishlist_page'>
    <div class="wishlist_filter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 col-sm-12 col-12">
                    <ul class="breadcrumps_custom">
                        <li><a href="javavoid:;">Home </a></li>
                        <li><a href="javavoid:;">Shop</a></li>
                        <li><a href="javavoid:;" class="active">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- wishlist_page Started -->
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 col-sm-12 col-12">
                    <div class="wishlist_table">
                        <div data-aos-duration="700" data-aos="fade-up" data-aos-delay="0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">PRODUCT</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <!-- <th scope="col">UNIT PRICE</th>
                                        <th scope="col">SUB TOTAL</th> -->
                                        <th scope="col">ACTION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="images/wishlist_img.png" class="img-fluid" alt="img">
                                        </td>
                                        <td data-aos-duration="800" data-aos="fade-left" data-aos-delay="400">
                                            <h2>Your Title Here</h2>
                                            <h4>Color:<span>Black</span></h4>
                                            <h4>Size:<span>Large</span></h4>
                                            <h4>Product code:<span>WA16Z</span></h4>
                                        </td>
                                        <td data-aos-duration="800" data-aos="zoom-in-down" data-aos-delay="100">
                                            <a href="javascript:;"><i class="fas fa-trash-alt"></i></a>
                                            <a href="javascript:;"><i class="fad fa-shopping-cart"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/wishlist_img.png" class="img-fluid" alt="img">
                                        </td>
                                        <td data-aos-duration="1000" data-aos="fade-left" data-aos-delay="400">
                                            <h2>Your Title Here</h2>
                                            <h4>Color:<span>Black</span></h4>
                                            <h4>Size:<span>Large</span></h4>
                                            <h4>Product code:<span>WA16Z</span></h4>
                                        </td>
                                        <td data-aos-duration="1000" data-aos="zoom-in-down" data-aos-delay="100">
                                            <a href="javascript:;"><i class="fas fa-trash-alt"></i></a>
                                            <a href="javascript:;"><i class="fad fa-shopping-cart"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="buttons_table">
                                <div class="left_btn" data-aos-duration="800" data-aos="fade-left"
                                    data-aos-delay="100">
                                    <button>continue shopping</button>
                                </div>
                                <div class="right_btn" data-aos-duration="800" data-aos="fade-left"
                                    data-aos-delay="100">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wishlist_page Ended -->
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>