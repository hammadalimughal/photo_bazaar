<?php
include 'includes/header.php';
$page = 'home';
?>
<main class="about_us_page">
    <style>
    body {
        background-color: #FCF9F1;
    }

    .home_banner_sec .home_banner_content h2 {
        font-size: 50px;
        text-align: left;
        text-transform: uppercase;
    }

    .brands_logo_footer {
        padding-top: 0;
    }

    .premium_online_content p {
        color: #fff;
    }
    </style>
    <section class="home_banner_sec">
        <div class="home_banner_img" id="banner_home">
            <div class="slider_item item_1">
                <figure>
                    <img class="img-fluid" src="images/home_banner_1.png" alt="">
                </figure>
                <div class="home_banner_content">
                    <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                        <h2>Our <span>Community.</span></h2>
                    </div>
                </div>
            </div>
            <div class="slider_item item_2">
                <figure>
                    <img class="img-fluid" src="images/home_banner_2.png" alt="">
                </figure>
                <div class="home_banner_content">
                    <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                        <h2>Our <span>Community.</span></h2>
                    </div>
                </div>
            </div>
            <div class="slider_item item_3">
                <figure>
                    <img class="img-fluid" src="images/home_banner_3.png" alt="">
                </figure>
                <div class="home_banner_content">
                    <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                        <h2>Our <span>Community.</span></h2>
                    </div>
                </div>
            </div>
            <div class="slider_item item_4">
                <figure>
                    <img class="img-fluid" src="images/home_banner_4.png" alt="">
                </figure>
                <div class="home_banner_content">
                    <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                        <h2>Our <span>Community.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="forum_start">
                        <h2 data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="800">Our <span>Community
                            </span></h2>
                        <div class="forum_main">
                            <div class="profile_mail">
                                <h6>Profile Email:</h6>
                                <a href="mailto:abc@gmail.com">abc@gmail.com</a>
                            </div>
                            <div class="forum_content">
                                <h6>Topics</h6>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Your Daily News</h5>
                                    <p>Total topics: <span>4</span></p>
                                </div>
                                <!-- <div class="categorize_item">
                                    <span class="cat_icon"><i class="fas fa-mug-hot"></i></span>
                                    <div class="ps-2">
                                        <h3><a href="javascript:;">General Discussion</a></h3>
                                        <p>Talk about sports, entertainment, music, movies, your favorite color, talk
                                            about anything on Global chat.</p>
                                    </div>
                                    <hr>
                                </div> -->
                                <div class="categorize_item">
                                    <span class="cat_icon"><i class="fas fa-megaphone"></i></span>
                                    <div class="ps-2">
                                        <h3><a href="javascript:;">Announcements</a></h3>
                                        <p>This forum features announcements from the community staff. If there is a new
                                            post in this forum, please check it out.</p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="latst_sec pb-4">
                                    <div>
                                        <h5>Latest Topics</h5>
                                    </div>
                                    <ul class="latst_sec_li">
                                        <li>
                                            <div class="lft_sec">
                                                <span><i class="fas fa-check"></i></span>
                                                <div>
                                                    <h4><a href="forum_topic_detail.php">Topic # 01</a></h4>
                                                    <p>Written by <a href="javascript:;">Eric Walter</a>, 12 Oct 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="rgt_sec">
                                                <div>
                                                    <span class="num">7</span>
                                                    <span class="num_lbl">View(s)</span>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="num">17</span>
                                                    <span class="num_lbl">Comment(s)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="lft_sec">
                                                <span><i class="fas fa-check"></i></span>
                                                <div>
                                                    <h4><a href="forum_topic_detail.php">Topic # 02</a></h4>
                                                    <p>Written by <a href="javascript:;">Eric Walter</a>, 12 Oct 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="rgt_sec">
                                                <div>
                                                    <span class="num">7</span>
                                                    <span class="num_lbl">View(s)</span>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="num">17</span>
                                                    <span class="num_lbl">Comment(s)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="lft_sec">
                                                <span><i class="fas fa-check"></i></span>
                                                <div>
                                                    <h4><a href="forum_topic_detail.php">Topic # 03</a></h4>
                                                    <p>Written by <a href="javascript:;">Eric Walter</a>, 12 Oct 2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="rgt_sec">
                                                <div>
                                                    <span class="num">7</span>
                                                    <span class="num_lbl">View(s)</span>
                                                </div>
                                                <div class="ps-3">
                                                    <span class="num">17</span>
                                                    <span class="num_lbl">Comment(s)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pagination">
                                        <li><a href="javascript:;"><i class="fas fa-chevron-left"></i></a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- <div class="popular_tags">
                                    <div>
                                        <h5>Popular Tags</h5>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="lft_sec">
                                                <span class="hash_"><i class="fas fa-hashtag"></i></span>
                                                <h4><a href="javascript:;">Topic # 01</a></h4>
                                            </div>
                                            <div class="rgt_sec">
                                                <span class="num">2</span>
                                                <span class="num_lbl">Topic(s)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="lft_sec">
                                                <span class="hash_"><i class="fas fa-hashtag"></i></span>
                                                <h4><a href="javascript:;">Topic # 02</a></h4>
                                            </div>
                                            <div class="rgt_sec">
                                                <span class="num">2</span>
                                                <span class="num_lbl">Topic(s)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="lft_sec">
                                                <span class="hash_"><i class="fas fa-hashtag"></i></span>
                                                <h4><a href="javascript:;">Topic # 03</a></h4>
                                            </div>
                                            <div class="rgt_sec">
                                                <span class="num">2</span>
                                                <span class="num_lbl">Topic(s)</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pagination">
                                        <li><a href="javascript:;"><i class="fas fa-chevron-left"></i></a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>