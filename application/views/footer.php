<style>
    @media (max-width: 767px) {
        .mt-2 {
            text-align: center;
        }

        .tc {
            text-align: start;
            margin-top: 20px !important;
        }
    }

    .social_icon {
        font-size: 25px;
        color: #f26522 !important;
        display: none;
    }

    hr {
        border-top: 2px solid;
        opacity: 1;
    }

    .formPopup {
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100vh;
        display: none;
        position: fixed;
        left: 50%;
        top: 0%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 4;
    }

    .formContainer {
        max-width: 700px;
        padding: 20px;
        background-color: #f26522;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .formContainer .cancel {
        width: 50px;
    }

    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }

    .col-footer {
        margin-top: 20px;
    }

    .bi-chevron-right {
        color: #4494D4;
    }

    @media (max-width: 768px) {}
</style>


<footer class="footer-no-negative wf-section">
    <div>
        <div style="max-width: 90%;margin:auto;">
            <div class="  footer-row-1 row tc m-0" style="    justify-content: space-around;">
                <div class="col-md-4  mb-3 mt-3" style="color:black;">
                    <img src="assets/img/logof.png" alt="" width="100">
                    <div class="info mt-4 col-md-12  row">
                        <div class="phone row col-md-12 col-12 m-0 pt-md-0 pt-2" style="align-items: center;">
                            <h6 class="col-md-2 col-2" style="font-weight: 700;"><span><i class="bi bi-phone"></i>
                                    &nbsp;</span>
                            </h6>
                            <p class="col-md-10 col-10 p-0">
                                <a href="" style="color:#000 !important;">+91 98765 43210</a><br>
                            </p>
                        </div>
                        <div class="email row col-md-12 m-0 pt-md-0 pt-2" style="align-items: center;">
                            <h6 class="col-md-2 col-2" style="font-weight: 700;"><span><i
                                        class="bi bi-globe-americas"></i>
                                    &nbsp;</span></h6>
                            <p class="col-md-10 col-10 p-0"> admin@prosoft.org.in
                            </p>
                        </div>
                        <div class="address row col-md-12 m-0" style="align-items: center;">
                            <h6 class="col-md-2 col-2" style="font-weight: 700;"><span><i class="bi bi-geo-alt"></i>
                                </span></h6>
                            <p class="col-md-10 col-10 p-0">PROSOFT LLC,
                                Office No 10, Level 1,
                                Sharjah Media City, Sharjah,UAE</p>
                        </div>
                    </div>
                </div>
                <div class=" row col-md-8 mt-md-3 mb-md-3 mb-0 mt-0">
                    <div class="col-lg-3 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Sitemap</div>
                        </div>
                        <div class="col-footer ">
                            <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Home</a>
                            <a href="<?php echo base_url('About_Us'); ?>" class="footer-links mt-16">About</a>
                            <a href="<?php echo base_url('Services'); ?>" class="footer-links mt-16">Services</a>
                            <a href="<?php echo base_url('Product'); ?>" class="footer-links mt-16">Product</a>
                            <a href="<?php echo base_url('News'); ?>" class="footer-links mt-16">News</a>
                            <a href="<?php echo base_url('Contact'); ?>" class="footer-links mt-16">Contact </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Useful links</div>
                        </div>
                        <div class="col-footer ">

                            <a href="<?php echo base_url('Accreditation'); ?>" class="footer-links mt-16">Accreditation
                                info</a>
                            <a href="<?php echo base_url('Accreditation_Process'); ?>"
                                class="footer-links mt-16">Accreditation Process</a>

                            <a href="<?php echo base_url('Copyright'); ?>" class="footer-links mt-16">Copyright Notice
                            </a>
                            <a href="<?php echo base_url('Privacy'); ?>" class="footer-links mt-16">Privacy Policy</a>
                            <a href="<?php echo base_url('Terms'); ?>" class="footer-links mt-16">Terms & Services</a>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 col-12 mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Subscribe</div>

                        </div>
                        <div class="col-footer">
                            <p>Stay connected with us and receive all updates directly in your inbox.</p>
                            <form action="" method="post" class="footer-form "
                                style="align-items: center;display: flex;">

                                <input type="email"
                                    style="width:80%;border:none; border-radius: 0px;    background: #eeeeee;"
                                    class="text-field w-input" maxlength="256" name="email"
                                    placeholder="eg. emailadd@email.com" required="" fdprocessedid="s494sn">
                                <button type="submit" class="sub-send sub-send-btn-trigger  ml-0"
                                    style="border-radius: 0px;width:20%;margin-left:0px;    background: #f6aa00;">→</button>
                            </form>
                            <div class="col-12 mt-5 row">
                                <div class="col-md-3 text-center"><img src="assets/img/fac.png" alt=""></div>
                                <div class="col-md-3 text-center"><img src="assets/img/wha.png" alt=""></div>
                                <div class="col-md-3 text-center"><img src="assets/img/ins.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-row-3 " style="    text-align: center;">
                <div class="footer-copyw ">

                    <p class="text-center container mob-size"
                        style=" font-size:14px; color:#f1f1f1; padding:5px;font-weight: 300;">
                        Copyright © 2024 PROSOFT . All Rights Reserved. Developed By
                        <a href="https://theodin.in/" style="color:#fff;    text-decoration: underline;">
                            The Odin</a> .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Vendor JS Files -->
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll <= 500) {
            $(".addclass").removeClass("addclass").addClass("stick");
        }
    })
</script>

<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }

    function openForm1() {
        document.getElementById("popupForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
    }
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>