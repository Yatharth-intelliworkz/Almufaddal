<?php include('header.php') ?>
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/privacy-policy-bg.png" alt="Privacy Policy" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url(./images/privacy-policy-bg.png);">
            <div class="breadcrumbs">
                <a href="#"><b>Home</b></a> > <span>Privacy Policy</span>
            </div>
            <h1 class="main_white_head  col-md-6 col-xl-6 col-xxl-6">Privacy Policy</h1>
        </div>
    </div>
</section>
<section class="privacy-policy">
    <div class="ym_container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4">
                <nav class="sidebar">
                    <ul class="nav flex-column" id="sidebarMenu">
                        <li class="nav-item mb-3">
                            <a class="nav-link active" href="#your-rights">Your Rights.</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#cookies">Cookies Etc.</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#security">Security</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#grievance">Grievance / Data Protection Officer</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#storage">Application and Storage</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content -->
            <main class="col-md-8 bd_left">
                <section id="your-rights" class="mb-4">
                    <h2 class="sub_head">Lorem ipsum dolor sit ametYour Rights.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="border_btm_line mt-4"></div>
                </section>
                   
                <section id="cookies" class="mb-4">
                    <h2 class="sub_head">Cookies Etc.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="border_btm_line mt-4"></div>
                </section>

                <section id="security" class="mb-4">
                    <h2 class="sub_head">Security</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>                    <div class="border_btm_line mt-4"></div>
                </section>

                <section id="grievance" class="mb-4">
                    <h2 class="sub_head">Grievance / Data Protection Officer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>                    <div class="border_btm_line mt-4"></div>
                </section>

                <section id="storage" class="">
                    <h2 class="sub_head">Application and Storage of Collected Personal Data</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>                    <div class="border_btm_line mt-4"></div>
                </section>
            </main>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll("#sidebarMenu .nav-link").forEach((item) => {
        item.addEventListener("click", function () {
            document.querySelectorAll("#sidebarMenu .nav-link").forEach((nav) => nav.classList.remove("active"));
            this.classList.add("active");
        });
    });
</script>
<?php include('footer.php') ?>