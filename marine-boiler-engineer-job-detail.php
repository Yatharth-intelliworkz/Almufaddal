<?php include('header.php') ?>
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/tm_bg.png" alt="Terms and Conditions" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url(./images/Marine_Boiler_Engineer_bg.png);">
            <div class="breadcrumbs">
                <a href="#"><b>Home </b> ></a> <a href="#"><b>Career </b> ></a> <a href="#"><b>Current Vacancies </b> ></a> <span>Marine Boiler Engineer</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Marine Boiler Engineer</h1>
        </div>
    </div>
</section>
<section class="section-space-mt">
    <div class="ym_container">
        <div class="row sidebar">
            <div class="col-md-6">
                <h2 class="main_head">Marine Boiler Engineer</h2>
                <ul class="two-column-list">
                    <li class="sub_title "> <b>Location :</b> <span class="fw-light">Dubai</span></li>
                    <li class="sub_title "> <b>Experience Required :</b> <span class="fw-light">4 Years</span></li>
                    <li class="sub_title "> <b>Job Type :</b> <span class="fw-light">Full-Time</span></li>
                    <li class="sub_title "> <b>Department :</b> <span class="fw-light">Engineering & Technical Services</span></li>
                </ul>
                <h4 class="sub_title mt-5 mb-3">Job Overview</h4>
                <p>We are looking for a skilled Marine Boiler Engineer to join our team. The ideal candidate will have expertise in boiler maintenance, repairs, troubleshooting, and installation within the marine industry. This role requires hands-on experience with marine boiler systems, heat exchangers, and combustion technology to ensure optimal vessel performance.</p>
                <h4 class="sub_title mt-5 mb-3">Key Responsibilities</h4>
                <ul class="item_disc_ul">
                    <li>Perform inspection, troubleshooting, and maintenance of marine boiler systems.</li>
                    <li>Conduct preventive and corrective maintenance to ensure operational efficiency.</li>
                    <li>Work with steam and hot water boilers, burners, and control systems.</li>
                    <li>Analyze and resolve faults in combustion, pressure vessels, and piping.</li>
                    <li>Collaborate with ship engineers and technical teams for smooth operations.</li>
                    <li>Ensure compliance with marine safety and environmental standards.</li>
                </ul>
                <h4 class="sub_title mt-5 mb-3">Tasks & Responsibilities</h4>
                <p>Lorem ipsum dolor sit amet consectetur. Magna at hendrerit augue a in. Mauris molestie eget amet ut. Rhoncus vel vitae quis tortor id eros massa. Facilisis tincidunt suspendisse nisi amet. Vitae ipsum ante pellentesque turpis lacinia urna malesuada mi. Gravida felis vel consectetur tempor id dictumst nibh suspendisse. Faucibus fringilla at velit in gravida suscipit. Ut nunc porta sit ac congue risus condimentum nulla. At aliquam non tellus at sapien at dignissim consequat ac. Id ut iaculis elementum hac suspendisse facilisis. Donec libero amet pretium tellus turpis est nam ut. Vitae lectus sagittis quis nisl tellus. Nibh nec sagittis tellus amet cursus adipiscing id commodo lectus. Sodales enim accumsan proin dignissim.</p>
                <h4 class="sub_title mt-5 mb-3">Skills & Experience</h4>
                <ul class="item_disc_ul">
                    <li>Perform inspection, troubleshooting, and maintenance of marine boiler systems.</li>
                    <li>Conduct preventive and corrective maintenance to ensure operational efficiency.</li>
                    <li>Work with steam and hot water boilers, burners, and control systems.</li>
                    <li>Analyze and resolve faults in combustion, pressure vessels, and piping.</li>
                    <li>Collaborate with ship engineers and technical teams for smooth operations.</li>
                    <li>Ensure compliance with marine safety and environmental standards.</li>
                </ul>
            </div>
            <div class="col"></div>
            <div class="col-md-5 sticky-sidebar">
                <div class="">
                    <form class="apply-form contact_input">
                        <!-- First Name and Last Name in a single row -->
                        <h4 class="sub_head mb-0">Apply Now</h4>
                        <div class="form">
                            <div class="row">
                                <div class="col-lg-6 form_item">
                                    <label for="firstName">First name *:</label><br>
                                    <input type="text" id="firstName" name="firstName" required placeholder="John Carter">
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="lastName">Email Id *:</label><br>
                                    <input type="text" id="lastName" name="lastName" required placeholder="John@gmail.com">
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="phone">Phone number *:</label><br>
                                    <input type="tel" id="phone" name="phone" required placeholder="US - (555) 000-0000">
                                </div>
                                <div class="col-lg-6 form_item">
                                    <label for="Location">Current Location *:</label><br>
                                    <input type="text" id="Location" name="Location" required placeholder="you@company.com">
                                </div>
                                <div class="col-lg-12 form_item">
                                    <label for="linkedInprofile">LinkedIn Profile *:</label><br>
                                    <input type="text" id="linkedInprofile" name="linkedInprofile" required placeholder="@John_carter">
                                </div>
                                <div class="col-md-12 form_item">
                                <label for="uploadResume" class="form-label">Upload Resume *:</label>
                                <label class="custom-file-upload">
                                    <input type="file" id="uploadResume" accept=".pdf,.doc,.docx">
                                    <p>Attach Your Resume In PDF, Word Format</p>
                                    <p><small>Max Size: 5 Mb</small></p>
                                </label>
                            </div>
                            </div>
                            <a href="javascript:void(0)" class="main_btn">Submit 
                                <span class="btn_svg">
                                    <img src="./images/blue_gear.svg" alt="" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('uploadResume').addEventListener('change', function() {
    if (this.files.length > 0) {
        this.nextElementSibling.innerHTML = `<p>${this.files[0].name}</p>`;
    }
});

</script>
<?php include('footer.php') ?>