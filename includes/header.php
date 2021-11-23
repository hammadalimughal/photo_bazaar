<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="icon" href="images/fav-icon.png" type="image/png" sizes="">
    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="main_header">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-12 p-0">
                    <nav class="navbar navbar-expand-lg main_navbar">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main_nav_custom me-auto mb-lg-0">
                                <li class="nav-item custom_nav_item">
                                    <a class="nav-link custom_nav_link active" aria-current="page"
                                        href="index.php">Home</a>
                                </li>
                                <li class="nav-item custom_nav_item dropdown">
                                    <a class="nav-link custom_nav_link dropdown-toggle" href="#"
                                        id="art_galleryDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Digital Library
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="art_galleryDropdown">

                                        <ul>
                                            <li><a class="dropdown-item" href="digital_library.php">Landscape Photography</a></li>
                                            <li><a class="dropdown-item" href="digital_library.php">Macro
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="digital_library.php">Aerial
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="digital_library.php">Abstract
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="digital_library.php">Architectural
                                                    Photography</a></li>
                                        </ul>

                                        <ul>
                                            <li><a class="dropdown-item" href="digital_library.php">Cityscape
                                                    Photography</a>
                                            </li>
                                            <li><a class="dropdown-item" href="digital_library.php">Editorial
                                                    Photography</a>
                                            </li>
                                            <li><a class="dropdown-item" href="digital_library.php">Black and
                                                    White/Monochrome
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="digital_library.php">Fine Art Photography</a>
                                            </li>
                                        </ul>

                                    </ul>
                                </li>
                                <li class="nav-item custom_nav_item dropdown">
                                    <a class="nav-link custom_nav_link dropdown-toggle" href="#"
                                        id="art_galleryDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Art Gallery
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="art_galleryDropdown">

                                        <ul>
                                            <li><a class="dropdown-item" href="art_gallery.php">Landscape
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Macro
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Aerial
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Abstract
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Architectural
                                                    Photography</a></li>
                                        </ul>

                                        <ul>
                                            <li><a class="dropdown-item" href="art_gallery.php">Cityscape
                                                    Photography</a>
                                            </li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Editorial
                                                    Photography</a>
                                            </li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Black and
                                                    White/Monochrome
                                                    Photography</a></li>
                                            <li><a class="dropdown-item" href="art_gallery.php">Fine Art Photography</a>
                                            </li>
                                        </ul>

                                    </ul>
                                </li>
                                <li class="nav-item custom_nav_item">
                                    <a class="nav-link custom_nav_link" aria-current="page"
                                        href="stock_images.php">Stock Images</a>
                                </li>
                                <li class="nav-item custom_nav_item">
                                    <a class="nav-link custom_nav_link" href="about_us.php">About Us</a>
                                </li>
                                <li class="nav-item custom_nav_item">
                                    <a class="nav-link custom_nav_link" href="contact_us.php">Contact Us</a>
                                </li>
                            </ul>
                            <ul class="more_option">
                                <li><a href="editor.php">Image Editor</a></li>
                                <li><a href="subscription.php">Pricing</a></li>
                                <li><a href="javascript:;">Community</a></li>
                                <li><a href="javascript:;">Join</a></li>
                                <li><a href="javascript:;">Sign In</a></li>
                                <li><a href="cart.php">
                                        <i class="fad fa-shopping-cart"></i>
                                        <span class="badge_cart">0</span>
                                    </a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>