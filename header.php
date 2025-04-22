<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<header class="header_parent" id="header">
    <div class="header_child">
        <div class=" container">
            <div class="header_wrapper">
                <a class="logo" href="#">
                    <img class="img-fluid" src="./images/Layer_1 (8).png" alt="logo">
                </a>

                <!--  Top Navigation (Mobile & Desktop) -->
                <nav class="navlink" id="navlink">
                    <ul class="menu d-none d-lg-flex">
                        <li><a href="#">About</a></li>
                        <li class="menu_link">
                            <a href="#">Our Services<img class="ms-2 down_arr" src="images/chevron-down 2.svg"
                                    alt="arrow"></a>
                            <div class="submenu">
                                <div class=" container">
                                    <div class="row submenu_left">
                                        <ul class="col-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="active" id="v-pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                            <li id="v-pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile" role="tab"
                                                aria-controls="v-pills-profile" aria-selected="false">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                            <li id="v-pills-disabled-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-disabled" role="tab"
                                                aria-controls="v-pills-disabled" aria-selected="false">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                            <li id="v-pills-messages-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-messages" role="tab"
                                                aria-controls="v-pills-messages" aria-selected="false">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                            <li id="v-pills-settings-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-settings" role="tab"
                                                aria-controls="v-pills-settings" aria-selected="false">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                            <li id="v-pills-settings-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-settings" role="tab"
                                                aria-controls="v-pills-settings" aria-selected="false">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3>Repairs and Maintenance</h3>
                                                        <p>Lorem ipsum dolor sit amet consectetur. Aliquam sagittis</p>
                                                    </div>
                                                    <span><img src="images/Vector (8).png" alt="arrow"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="col-8 tab-content " id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <div>
                                                        <h2 class="submenu_right_top_head">Repairs and Maintenance</h2>
                                                    </div>
                                                    <div>
                                                        <button class="submenu_right_btn">View all <img
                                                                class="ms-2 img-fluid" src="images/settings 1.png"
                                                                alt=""></button>
                                                    </div>
                                                </div>
                                                <div class="row g-4">
                                                    <div class="col-6">
                                                        <div class="submenu_right_bottm">
                                                            <img class=" img-fluid" src="./images/Frame 636 (1).png"
                                                                alt="">
                                                            <div class="submenu_right_bottm_child">
                                                                <h4>Heat Exchangers</h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur.<br /> Aliquam
                                                                    sagittis nisl venenatis platea montes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="submenu_right_bottm">
                                                            <img class=" img-fluid" src="./images/Frame 636 (1).png"
                                                                alt="">
                                                            <div class="submenu_right_bottm_child">
                                                                <h4>Heat Exchangers</h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur.<br /> Aliquam
                                                                    sagittis nisl venenatis platea montes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="submenu_right_bottm">
                                                            <img class=" img-fluid" src="./images/Frame 636 (1).png"
                                                                alt="">
                                                            <div class="submenu_right_bottm_child">
                                                                <h4>Heat Exchangers</h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur.<br /> Aliquam
                                                                    sagittis nisl venenatis platea montes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="submenu_right_bottm">
                                                            <img class=" img-fluid" src="./images/Frame 636 (1).png"
                                                                alt="">
                                                            <div class="submenu_right_bottm_child">
                                                                <h4>Heat Exchangers</h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur.<br /> Aliquam
                                                                    sagittis nisl venenatis platea montes</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab" tabindex="0">...2</div>
                                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                                aria-labelledby="v-pills-disabled-tab" tabindex="0">...3</div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab" tabindex="0">...4</div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab" tabindex="0">...5</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Projects</a></li>
                        <li class="menu_link">
                            <a href="#">Career <img class="ms-2 down_arr" src="images/chevron-down 2.svg"
                                    alt="arrow"></a>
                            <div class="submenu">
                                <div class=" container">
                                    Career
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Quality Management</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li>
                            <div class="d-flex gap-4 justify-content-between align-items-center">
                                <img src="./images/Frame (4).png" alt="search">
                                <div class="nav_lag">
                                    <img class="" src="images/Frame (5).png" alt="search">
                                    <select>
                                        <option value="">EN</option>
                                        <option value="">EN</option>
                                        <option value="">EN</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!--  Always Visible Hamburger Menu -->
                <div class="hamburger d-inline d-lg-none" id="hamburger">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
            </div>
        </div>
    </div>
</header>

<body>

</body>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- bopotstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<!-- slick js -->
<!-- custom js -->
<script src="js/main.js"></script>

</html>