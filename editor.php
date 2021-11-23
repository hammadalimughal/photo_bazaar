<?php
include 'includes/header.php';
$page = 'home';
?>
<main>
    <style>
    /* header.main_header {
        display: none;
    } */

    .brands_logo_footer {
        display: none;
    }

    footer {
        display: none;
    }
    </style>
    <!-- <header class="editor_header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="index.php" class="editor_logo"><img class="img-fluid" src="images/editor_logo.png"
                                alt=""></a>
                        <a href="javascript:;" class="sign_to_download">Sign In To Download</a>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <section class="editor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-1 col-md-1 col-sm-1 col-1">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 p-0 panel">
                            <div class="tool_kit">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link custom_tool_kit active" id="adjust_tab"
                                        data-bs-toggle="pill" data-bs-target="#adjust_content" type="button" role="tab"
                                        aria-controls="adjust_content" aria-selected="true">
                                        <h6><i class="fas fa-sliders-h"></i></h6>
                                        <h5>Adjust</h5>

                                    </button>
                                    <button class="nav-link custom_tool_kit" id="filter_tab" data-bs-toggle="pill"
                                        data-bs-target="#filter_content" type="button" role="tab"
                                        aria-controls="filter_tab" aria-selected="false">
                                        <h6>
                                            <ion-icon name="color-filter-outline"></ion-icon>
                                        </h6>
                                        <h5>Filters</h5>
                                    </button>
                                    <!-- <button class="nav-link custom_tool_kit" id="effect_tab" data-bs-toggle="pill"
                                        data-bs-target="#effect_content" type="button" role="tab"
                                        aria-controls="effect_tab" aria-selected="false">
                                        <h6>
                                            <ion-icon name="color-wand-outline"></ion-icon>
                                        </h6>
                                        <h5>Effects</h5>
                                    </button> -->
                                    <button class="nav-link custom_tool_kit" id="frames_tab" data-bs-toggle="pill"
                                        data-bs-target="#frames_content" type="button" role="tab"
                                        aria-controls="frames_tab" aria-selected="false">
                                        <h6><i class="fal fa-image"></i></h6>
                                        <h5>Frames</h5>
                                    </button>
                                    <button class="nav-link custom_tool_kit" id="element_tab" data-bs-toggle="pill"
                                        data-bs-target="#element_content" type="button" role="tab"
                                        aria-controls="element_tab" aria-selected="false">
                                        <h6>
                                            <ion-icon name="layers-outline"></ion-icon>
                                        </h6>
                                        <h5>Elements</h5>
                                    </button>
                                    <button class="nav-link custom_tool_kit" id="text_tab" data-bs-toggle="pill"
                                        data-bs-target="#text_content" type="button" role="tab" aria-controls="text_tab"
                                        aria-selected="false">
                                        <h6><i class="fas fa-text-size"></i></h6>
                                        <h5>Text</h5>
                                    </button>
                                    <button class="nav-link custom_tool_kit" id="template_tab" data-bs-toggle="pill"
                                        data-bs-target="#template_content" type="button" role="tab"
                                        aria-controls="template_tab" aria-selected="false">
                                        <h6><i class="fas fa-border-all"></i></h6>
                                        <h5>Template</h5>
                                    </button>
                                    <button class="nav-link custom_tool_kit" id="collage_tab" data-bs-toggle="pill"
                                        data-bs-target="#collage_content" type="button" role="tab"
                                        aria-controls="collage_tab" aria-selected="false">
                                        <h6>
                                            <ion-icon name="film-outline"></ion-icon>
                                        </h6>
                                        <h5>Collage</h5>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7 col-sm-8 col-8 p-0 panel editor_detail_main">
                            <div class="editor_detail">

                                <div class="tab-content text-white" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="adjust_content" role="tabpanel"
                                        aria-labelledby="adjust_tab">
                                        <div class="category_wise col-12">
                                            <h3>Size</h3>
                                            <div>
                                                <button class="cate_toggle collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#cropcollapse"
                                                    aria-expanded="false" aria-controls="cropcollapse">
                                                    <h5>Crop</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="cropcollapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <button id="crop_1" class="crop_a"><i
                                                                        class="fas fa-crop-alt"></i></button>
                                                            </li>
                                                            <li class="crop_li">
                                                                <button disabled id="apply_crop" class="crop_a"><i
                                                                        class="fas fa-check"></i></button>
                                                            </li>
                                                            <li class="crop_li">
                                                                <button disabled id="cancel_crop" class="crop_a"><i
                                                                        class="fas fa-times"></i></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#rotate_collapse"
                                                    aria-expanded="false" aria-controls="rotate_collapse">
                                                    <h5>Rotate</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="rotate_collapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <button href="javascript:;" id="rotate_left" value="45"
                                                                    class="crop_a"><i
                                                                        class="bi bi-arrow-counterclockwise"></i>
                                                                </button>
                                                            </li>
                                                            <li class="crop_li">
                                                                <button href="javascript:;" id="rotate_right"
                                                                    class="crop_a"><i
                                                                        class="bi bi-arrow-clockwise"></i></button>
                                                            </li>
                                                            <li class="crop_li">
                                                                <button href="javascript:;" id="flip_y"
                                                                    class="crop_a"><i
                                                                        class="bi bi-arrow-down-up"></i></button>
                                                            </li>
                                                            <li class="crop_li">
                                                                <button href="javascript:;" id="flip_x"
                                                                    class="crop_a"><i
                                                                        class="bi bi-arrow-left-right"></i></button>
                                                            </li>
                                                        </ul>
                                                        <div class="range_field">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <label for="rotate_range">Rotate range</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="range" name="" min="-360" value="0"
                                                                        id="rotate_range" step="1" max="360">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#resize_collapse"
                                                    aria-expanded="false" aria-controls="resize_collapse">
                                                    <h5>Resize</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="resize_collapse">
                                                    <div class="crop_items">
                                                        <div class="resize_field">
                                                            <div class="row">
                                                                <div class="col-12 py-1">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <label for="width">Width</label>
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <div class="field">
                                                                                <input class="resize_inp" value="0"
                                                                                    id="resize_width" type="number">
                                                                                <span>px</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 py-1">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <label for="height">Height</label>
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <div class="field">
                                                                                <input class="resize_inp" value="0"
                                                                                    id="resize_height" type="number">
                                                                                <span>px</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between pe-3">
                                                            <div class="resize_check">
                                                                <input type="checkbox" name="" id="resize_check"
                                                                    checked>
                                                                <label for="resize_check">Maintain Ratio</label>
                                                            </div>
                                                            <button class="apply_resize"
                                                                onclick="resizeDimension()">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category_wise col-12">
                                            <h3>Adjustment</h3>
                                            <div>
                                                <button class="cate_toggle collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#basicadjustcollapse"
                                                    aria-expanded="false" aria-controls="basicadjustcollapse">
                                                    <h5>Basic & Adjust</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="basicadjustcollapse">
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="brightness">Brightness</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="-255"
                                                                    value="0" id="brightness" step="1" max="255">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="Contrast">Contrast</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="-255"
                                                                    value="1" id="Contrast" step="0.1" max="255">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="Saturation">Saturation</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="-500"
                                                                    value="0" id="Saturation" step="1" max="500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="huerotate">huerotate</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="-255"
                                                                    value="1" id="huerotate" step="1" max="255">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#finetunecollapse"
                                                    aria-expanded="false" aria-controls="finetunecollapse">
                                                    <h5>Fine Tune</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="finetunecollapse">
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="whiteness">Remove Whitness</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="0"
                                                                    value="0" id="whiteness" step="1" max="255">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="noise">noise</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="0"
                                                                    value="0" id="noise" step="1" max="500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#colorcollapse"
                                                    aria-expanded="false" aria-controls="colorcollapse">
                                                    <h5>Color</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="colorcollapse">
                                                    <!--<div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="grayscale">Grayscale</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="color_adjust" type="range" name="" min="-255"
                                                                    value="0" id="grayscale" step="1" max="255">
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    <div class="tint_mode">
                                                        <h5>Tint Mode</h5>
                                                        <div class="range_field">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <label for="tint_opac">Tint Opacity</label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input name="color_adjust" type="range" name=""
                                                                        min="0" value="0" id="tint_opac" step="0.01"
                                                                        max="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="blend_mode">
                                                        <h5>Blend Mode</h5>
                                                        <div class="d-flex justify-content-between">
                                                            <h6>select mode</h6>
                                                            <select id="select_blend_mode">
                                                                <option value="none" selected>none</option>
                                                                <option value="add">Add</option>
                                                                <option value="diff">Diff</option>
                                                                <option value="diff">Subtract</option>
                                                                <option value="multiply">Multiply</option>
                                                                <option value="screen">Screen</option>
                                                                <option value="lighten">Lighten</option>
                                                                <option value="darken">Darken</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="category_wise col-12">
                                            <h3>Advanced Edits</h3>
                                            <div>
                                                <button class="cate_toggle collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Structurecollapse"
                                                    aria-expanded="false" aria-controls="Structurecollapse">
                                                    <h5>Structure</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Structurecollapse">
                                                    <div class="crop_items">
                                                        <!-- <ul>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a">original</a>
                                                            </li>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="fas fa-crop-alt"></i></a>
                                                            </li>
                                                        </ul> -->
                                                        <div
                                                            class="d-flex justify-content-between align-items-center px-4">
                                                            <label for="sharpnessSwitch">Sharpen Image</label>
                                                            <!-- <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="sharpnessSwitch">
                                                            </div> -->
                                                            <label class="switch">
                                                                <input id="sharpenToggle" type="checkbox">
                                                                <span class="switch_ round"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Denoisecollapse"
                                                    aria-expanded="false" aria-controls="Denoisecollapse">
                                                    <h5>Denoise</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Denoisecollapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="bi bi-arrow-counterclockwise"></i>
                                                                </a>
                                                            </li>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="bi bi-arrow-clockwise"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Vignettecollapse"
                                                    aria-expanded="false" aria-controls="Vignettecollapse">
                                                    <h5>Vignette</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Vignettecollapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="fas fa-expand"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Filmgraincollapse"
                                                    aria-expanded="false" aria-controls="Filmgraincollapse">
                                                    <h5>Film Grain</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Filmgraincollapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="fas fa-expand"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Pixelatecollapse"
                                                    aria-expanded="false" aria-controls="Pixelatecollapse">
                                                    <h5>Pixelate</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Pixelatecollapse">
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="pixelate">Pixelate</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input type="range" name="" min="1" value="1"
                                                                    id="pixelate" step="1" max="20">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Blurcollapse"
                                                    aria-expanded="false" aria-controls="Blurcollapse">
                                                    <h5>Blur</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Blurcollapse">
                                                    <div class="range_field">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <label for="blur">blur</label>
                                                            </div>
                                                            <div class="col-7">
                                                                <input name="editing" type="range" name="" min="0"
                                                                    value="0" id="blur" step="0.0001" max="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div>
                                                <button class="cate_toggle collapsed mt-3" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#Blurbrushcollapse"
                                                    aria-expanded="false" aria-controls="Blurbrushcollapse">
                                                    <h5>Blur (Brush)</h5>
                                                    <i class="fas fa-chevron-down"></i>
                                                </button>
                                                <div class="collapse" id="Blurbrushcollapse">
                                                    <div class="crop_items">
                                                        <ul>
                                                            <li class="crop_li">
                                                                <a href="javascript:;" class="crop_a"><i
                                                                        class="fas fa-expand"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="filter_content" role="tabpanel"
                                        aria-labelledby="filter_tab">
                                        <div class="row m-3 my-4">
                                            <div class="col-6 py-2">
                                                <img onclick="applyNoise()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_1.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applyEmboss()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_2.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applypixelate()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_3.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysepia()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_4.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysepia2()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_5.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysharpeness()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_6.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="effect_content" role="tabpanel"
                                        aria-labelledby="effect_tab">
                                        <div class="row m-3 my-4">
                                            <div class="col-6 py-2">
                                                <img onclick="applyNoise()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_1.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applyEmboss()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_2.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applypixelate()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_3.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysepia()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_4.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysepia2()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_5.png" alt="">
                                            </div>
                                            <div class="col-6 py-2">
                                                <img onclick="applysharpeness()" class="filter_imgs img-fluid"
                                                    class="img-fluid" src="images/filter_6.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="frames_content" role="tabpanel"
                                        aria-labelledby="frames_tab">
                                        <div class="row m-3 my-4">
                                            <div class="col-12 p-2 text-center">
                                                <figure class="frame_fig" onclick="apply_border(this)">
                                                    <img class="filter_imgs img-fluid" src="images/no_frame.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-12 p-2 text-center">
                                                <figure class="frame_fig" onclick="apply_border(this)">
                                                    <img class="filter_imgs img-fluid" src="images/frame_1.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-12 p-2 text-center">
                                                <figure class="frame_fig" onclick="apply_border(this)">
                                                    <img class="filter_imgs img-fluid" src="images/frame_2.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-12 p-2 text-center">
                                                <figure class="frame_fig" onclick="apply_border(this)">
                                                    <img class="filter_imgs img-fluid" src="images/frame_3.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-12 p-2 text-center">
                                                <figure class="frame_fig" onclick="apply_border(this)">
                                                    <img class="filter_imgs img-fluid" src="images/frame_4.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="element_content" role="tabpanel"
                                        aria-labelledby="element_tab">
                                        <div class="element_panel">
                                            <div class="row m-3 my-4">
                                                <div class="col-12 py-2">
                                                    <div class="top_heading">
                                                        <h4>Elements</h4>
                                                        <a><i class="fas fa-th"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <input class="search_element" type="text"
                                                        placeholder="Search Element">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="element_upload(this.src)"
                                                        class="filter_imgs img-fluid" src="images/element_1.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="element_upload(this.src)"
                                                        class="filter_imgs img-fluid" src="images/element_2.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="element_upload(this.src)"
                                                        class="filter_imgs img-fluid" src="images/element_3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="text_content" role="tabpanel"
                                        aria-labelledby="text_tab">
                                        <div class="text_panel">
                                            <div class="row m-3 my-4">
                                                <div class="col-12 py-2">
                                                    <div class="top_heading">
                                                        <h4>Text</h4>
                                                    </div>
                                                </div>
                                                <div class="text_items">
                                                    <ul class="p-0 m-0">
                                                        <li>
                                                            <button onclick="insert_text()">Insert Text</button>
                                                        </li>
                                                        <li>
                                                            <button
                                                                onclick="text_styling('bold')"><strong>B</strong></button>
                                                        </li>
                                                        <li>
                                                            <button onclick="text_styling('italic')"><i>I</i></button>
                                                        </li>
                                                        <li>
                                                            <button
                                                                onclick="text_styling('underline')"><u>U</u></button>
                                                        </li>
                                                    </ul>
                                                    <ul class="p-0 m-0 my-3">
                                                        <li>
                                                            <button onclick="aligntext('left')"><i
                                                                    class="fas fa-align-left"></i></button>
                                                        </li>
                                                        <li>
                                                            <button onclick="aligntext('center')"><i
                                                                    class="fas fa-align-center"></i></button>
                                                        </li>
                                                        <li>
                                                            <button onclick="aligntext('right')"><i
                                                                    class="fas fa-align-right"></i></button>
                                                        </li>
                                                    </ul>
                                                    <div class="row align-items-center">
                                                        <div
                                                            class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                                                            <h6 class="p-0 m-0">Font Family</h6>
                                                        </div>
                                                        <div
                                                            class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-6 col-6">
                                                            <select name="" id="font_family">
                                                                <option value="Select Font Family" selected disabled>
                                                                    Select Font Family</option>
                                                                <option value="Arial, sans-serif">Arial, sans-serif
                                                                </option>
                                                                <option value="Verdana, sans-serif">Verdana, sans-serif
                                                                </option>
                                                                <option value="Helvetica, sans-serif">Helvetica,
                                                                    sans-serif</option>
                                                                <option value="Tahoma, sans-serif">Tahoma, sans-serif
                                                                </option>
                                                                <option value="Trebuchet MS, sans-serif">Trebuchet MS,
                                                                    sans-serif</option>
                                                                <option value="Times New Roman, serif">Times New Roman,
                                                                    serif</option>
                                                                <option value="Georgia, serif">Georgia, serif</option>
                                                                <option value="Garamond, serif">Garamond, serif</option>
                                                                <option value="Courier New, monospace">Courier New,
                                                                    monospace</option>
                                                                <option value="Brush Script MT, cursive">Brush Script
                                                                    MT, cursive</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row align-items-center justify-content-between mt-2">
                                                        <div
                                                            class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6">
                                                            <h6 class="p-0 m-0">Font Size</h6>
                                                        </div>
                                                        <div
                                                            class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                                            <div class="d-flex align-items-baseline">
                                                                <div class="col-9">
                                                                    <input class="text-center" value="10" id="font_size"
                                                                        type="number">
                                                                </div>
                                                                <div class="col-3 ms-1">
                                                                    <span>px</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text_color py-4">
                                                        <h5 class="m-0">Text Color</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="template_content" role="tabpanel"
                                        aria-labelledby="template_tab">
                                        <div class="element_panel">
                                            <div class="row m-3 my-4">
                                                <div class="col-12 py-2">
                                                    <div class="top_heading">
                                                        <h4>Template</h4>
                                                    </div>
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_1.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_2.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_3.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_4.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_5.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_6.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_7.jpg" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="imageforEdit(this)" class="filter_imgs img-fluid"
                                                        src="images/template_8.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="collage_content" role="tabpanel"
                                        aria-labelledby="collage_tab">
                                        <div class="collage_panel">
                                            <div class="row m-3 my-4">
                                                <div class="col-12 py-2">
                                                    <div class="top_heading">
                                                        <h4>Collage</h4>
                                                    </div>
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="collage('one')" class="collage_imgs img-fluid"
                                                        src="images/collage_1.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="collage('two')" class="collage_imgs img-fluid"
                                                        src="images/collage_2.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="collage('three')" class="collage_imgs img-fluid"
                                                        src="images/collage_3.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="collage('four')" class="collage_imgs img-fluid"
                                                        src="images/collage_4.png" alt="">
                                                </div>
                                                <div class="col-12 py-2 text-center">
                                                    <img onclick="collage('five')" class="collage_imgs img-fluid"
                                                        src="images/collage_5.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-11 col-md-11 col-sm-11 col-11">
                    <div class="image_for_edit my-4 me-5 tui-image-editor-controls">
                        <div class="row">
                            <div class="col-9 p-0">
                                <div class="main_img">
                                    <ul>
                                        <li>
                                            <button class="btn_history undo" disabled onclick="imageEditor.undo();"><i
                                                    class="fas fa-undo"></i></button>
                                        </li>
                                        <li>
                                            <button class="btn_history redo" disabled onclick="imageEditor.redo();"><i
                                                    class="fas fa-redo"></i></button>
                                        </li>
                                    </ul>
                                    <figure>
                                        <!-- <canvas id="editorCanvas"></canvas> -->
                                        <div class="tui-image-editor"></div>
                                        <div class="upload_img" id="upload_img">
                                            <input id="canvas_upload" type="file">
                                            <label for="canvas_upload" class="text-center">
                                                <h3><i class="fas fa-upload"></i></h3>
                                                <h5>Upload an Image</h5>
                                            </label>
                                        </div>

                                    </figure>
                                    <div class="zoom_panel">
                                        <h4><span id="height">0</span> x <span id="width">0</span></h4>
                                        <span class="image_icon"><i class="far fa-image"></i></span>
                                        <input type="range" id="zoom" min="10" value="100" step="1" max="800">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 px-0">
                                <div class="img_in_que">
                                    <div class="imp_input">
                                        <label for="import_img"><i class="fas fa-plus"></i> Import</label>
                                        <input type="file" accept="image/*" id="import_img">
                                    </div>
                                    <div class="import_images" id="images_in_que"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="logic"></div>
    <script type="text/javascript"
        src="https://api-storage.cloud.toast.com/v1/AUTH_e18353c4ea5746c097143946d0644e61/toast-ui-cdn/tui-image-editor/v3.11.0/example/fabric-v4.2.0.js">
    </script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js">
    </script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tui-image-editor/3.10.0/tui-image-editor.js"
        integrity="sha512-n85VUN94xSJstXJvMxHC968reNaBOSy9+LRA0slHiqYzsa6sAX3ok0cupK6HTg1sIlWXncBcCVzg7YGPJ70T0w=="
        crossorigin="anonymous"></script>
    <!-- <script src="js/service-basic.js"></script> -->
    <!-- <script src="js/customeditor.js"></script> -->
    <script src="js/editor.js"></script>
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>