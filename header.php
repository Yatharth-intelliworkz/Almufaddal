<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlmufaddalBoiler</title>

    <!-- fonts -->
    <link rel="stylesheet" href="./fonts/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="./images/head_logo.svg" alt="Company Logo" class="img-fluid">
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- About Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About <span class="custom-dropdown-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="#">Our Story</a></li>
                            <li><a class="dropdown-item" href="#">Our Heritage</a></li>
                            <li><a class="dropdown-item" href="#">Quality Management</a></li>
                        </ul>
                    </li>

                    <!-- Our Expertise Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="expertiseDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Expertise <span class="custom-dropdown-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="expertiseDropdown">
                            <li><a class="dropdown-item" href="#">Boilers</a></li>
                            <li><a class="dropdown-item" href="#">Economizers, HRSG, WHRB</a></li>
                            <li><a class="dropdown-item" href="#">Heat Exchangers, Condensers & Coolers</a></li>
                            <li><a class="dropdown-item" href="#">PHE</a></li>
                            <li><a class="dropdown-item" href="#">Refractory</a></li>
                            <li><a class="dropdown-item" href="#">Automation</a></li>
                            <li><a class="dropdown-item" href="#">Chemical Cleaning Services</a></li>
                            <li><a class="dropdown-item" href="#">Expansion Bellows</a></li>
                        </ul>
                    </li>

                    <!-- Static Links -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Industries We Serve</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>

                    <!-- Our Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Solutions <span class="custom-dropdown-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                            <li><a class="dropdown-item" href="#">Repairs & Maintenance</a></li>
                            <li><a class="dropdown-item" href="#">Manufacturers</a></li>
                        </ul>
                    </li>
                    <!-- Career Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="expertiseDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Career<span class="custom-dropdown-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="expertiseDropdown">
                            <li><a class="dropdown-item" href="#">Boilers</a></li>
                            <li><a class="dropdown-item" href="#">Economizers, HRSG, WHRB</a></li>
                            <li><a class="dropdown-item" href="#">Heat Exchangers, Condensers & Coolers</a></li>

                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
                <!-- Right Icons (Search & Language) -->
                <div class="d-flex gap-2 ms-4 align-items-center">
                    <div class="search-box">
                        <a class="search-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M28.0001 27.9999L21.0707 21.0706M21.0707 21.0706C22.9462 19.1952 23.9998 16.6515 23.9998 13.9993C23.9998 11.347 22.9462 8.80338 21.0707 6.92794C19.1953 5.05251 16.6517 3.9989 13.9994 3.9989C11.3471 3.9989 8.8035 5.05251 6.92807 6.92794C5.05263 8.80338 3.99902 11.347 3.99902 13.9993C3.99902 16.6515 5.05263 19.1952 6.92807 21.0706C8.8035 22.946 11.3471 23.9997 13.9994 23.9997C16.6517 23.9997 19.1953 22.946 21.0707 21.0706Z"
                                    stroke="#172A42" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="search-box__dropdown">
                                <form action="./" class="search-box__form">
                                    <input class="search-box__input" type="text" name="search_btn"
                                        placeholder="Search...">
                                </form>
                            </div>
                        </a>
                    </div>
                    <!-- Search Icon -->
                    <span class="language-switch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M16 28C18.66 27.9998 21.2446 27.1163 23.348 25.488C25.4515 23.8598 26.9546 21.5791 27.6213 19.004M16 28C13.34 27.9998 10.7554 27.1163 8.65197 25.488C6.54854 23.8598 5.04544 21.5791 4.37867 19.004M16 28C19.3133 28 22 22.6267 22 16C22 9.37334 19.3133 4 16 4M16 28C12.6867 28 10 22.6267 10 16C10 9.37334 12.6867 4 16 4M27.6213 19.004C27.868 18.044 28 17.0373 28 16C28.0033 13.9361 27.4718 11.9067 26.4573 10.1093M27.6213 19.004C24.0656 20.9752 20.0656 22.0064 16 22C11.784 22 7.82267 20.9133 4.37867 19.004M4.37867 19.004C4.12633 18.0226 3.9991 17.0133 4 16C4 13.86 4.56 11.8493 5.54267 10.1093M16 4C18.1283 3.99911 20.2186 4.56448 22.0563 5.63809C23.894 6.71169 25.4129 8.25489 26.4573 10.1093M16 4C13.8717 3.99911 11.7814 4.56448 9.94375 5.63809C8.10606 6.71169 6.58708 8.25489 5.54267 10.1093M26.4573 10.1093C23.5542 12.6239 19.8407 14.0055 16 14C12.0027 14 8.34667 12.5333 5.54267 10.1093"
                                stroke="#172A42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <select>
                            <option selected>en</option>
                            <option>हिन्दी</option>
                            <option>العربية</option>
                        </select>

                    </span> <!-- Language Switch -->
                </div>
            </div>


        </div>
    </nav>
</header>

<body>