<link href="<?php echo base_url(); ?>assets/css/mainpage.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script
  src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"> </script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
  section {
    z-index: 999;
  }
  
  .header {
    background: rgba(7,27,48, 0.2);
       box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(7,27,48, 0.3);
    position: absolute;
  }

  .mobile-nav-toggle {
    color: #000;
  }

  .navbar a {
    color: #fff;
  }

  .sticked .navbar a {
    color: #fff;
  }

  .sticked .mobile-nav-toggle {
    color: #fff !important;
  }

  .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
  }

  #backgroundVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
  }

  .text-overlay {
    position: absolute;
    top: 44%;
    left: 10%;
    transform: translate(-10%, -50%);
    text-align: start;
    color: #fff;
    z-index: 1;
  }

  .text-overlay1 {
    position: absolute;
    top: 44%;
    left: 10%;
    transform: translate(-50%, -50%);
    text-align: start;
    color: #fff;
    z-index: 1;
  }

  .text-overlay h1 {
    margin: 0;
    font-size: 2.9em;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .text-overlay h3 {
    margin: 0;
    font-size: 2em;
    line-height: 1.2;
    letter-spacing: 2px;
    line-height: 36px;
  }

  .def {
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    min-height: 30vh;
    position: relative;
    z-index: 2;
  }

  .def .container {
    height: 70%;
    margin: auto;
    text-align: center;
    color: #fff;
  }

  .defh2 {
    font-size: 48px;
    line-height: 1;
  }

  .whhh {
    background-color: #0D4771;
    border-radius: 0 30px 30px 30px;
    padding: 10px 20px;
    width: fit-content;
    text-align: center;
    color: #fff;
  }

  .def.un {
    height: 2px;
    width: 200px;
    background: #fff;
    margin: 0 auto;
  }

  .def h3 {
    font-size: 22px;
    line-height: 1.2;
    margin-top: 20px;
  }


  .def p {
    color: #fff;
  }

  .mob {
    display: none;
  }

  .cstm_key_people .member_txt h5 {
    font-size: 16px;
    margin-bottom: 10px;
  }

  .cstm_key_people .member_txt span {
    font-size: 14px;
    margin-bottom: 5px;
  }

  @media screen and (max-width: 768px) {
    .whhh {
      text-align: center;

      color: #fff;
      margin: 0 auto 20px;
    }

    .mobile-nav-toggle {
      color: #fff;
    }

    .def .container {

      text-align: center;

    }

    .bg-black1 {

      min-height: 30vh !important;

    }

    .def {

      min-height: 30vh !important;

    }

    .text-overlay h1 {
      margin: 0;
      font-size: 2em;
    }

    .desk {
      display: none;
    }

    .mob {
      display: block !important;
    }

    .text-overlay h3 {
      margin: 0;
      font-size: 1em;
      line-height: 1;
      letter-spacing: 2px;
      line-height: 28px;
    }

    .cou .col-8 {
      margin: 20px;
    }

    .cou {
      justify-content: center;
      padding: 0;
    }

    .co1 {
      margin: 2%;
    }

    .tc1 {
      text-align: center;
    }

    .mtm {
      margin-top: 50px;
    }

    .service .card {
      margin-top: 20px;
    }

    .cstm-key-popup .member_profile {
      display: block !important;

    }

    .cstm-key-popup .member_profile .member_profile_left {

      width: 100% !important;
    }

    .cstm-key-popup .member_profile .member_profile_right {

      width: 100% !important;
    }

    .cstm_key_people .member_txt {
      min-height: 75px !important;
    }

    .cstm_key_people .member_txt {
      text-align: start;
      width: 100%;
      padding: 10px !important;
      transition: .4s ease-in-out;
    }

    .cstm_key_people .member_txt h5 {
      font-size: 14px;
      margin-bottom: 5px;
    }

    .cstm_key_people .member_txt span {
      font-size: 13px;
    }

  }

  .dd .card {

    border: none;
    outline: none;
    color: #fff;
    background: #00243a;

    position: relative;
    z-index: 0;
    border-radius: 10px;
  }

  .dd .card:before {
    content: '';
    background: linear-gradient(45deg, #ff7300, #ff0000);
    position: absolute;
    top: -4px;
    left: -4px;
    background-size: 400%;
    z-index: -1;
    filter: blur(1px);
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
  }

  .dd .card:active {
    color: #000
  }



  .dd .card:hover:before {
    opacity: 1;
  }

  .dd .card:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #00243a;
    left: 0;
    top: 0;
    border-radius: 10px;
  }


  .bg-black1 {
    width: 100%;
    height: 100%;
    opacity: 0.7;
    min-height: 60vh;
    justify-content: center;
    display: flex;

  }

  .dds {
    display: none;
    max-width: 250px;
  }

  .ds {
    display: block;
    max-width: 250px;
  }

  /* Custom styles if needed */
  .modal-content {
    border-radius: 10px;
  }

  .close {
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 1.5rem;
  }

  .pic {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .mmd1 {
    top: 55% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;

  }

  .foot {
    margin-top: 20px;
    font-size: 20px;
    letter-spacing: 1px;
  }
</style>

<div class="video-section desk">
  <div class="splide sp" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <div class="video-overlay" style="position: relative;">
            <img src="<?php echo base_url(); ?>assets/img/main.png" alt="" style="width: 100%;">
            <div class="text-overlay">
              <h1 style="font-weight:600;">Hospital Information<br>Management System</h1>
              <p class="foot">Feature rich, secure and effective HIMS by Prosoft.</p>
              <a href="#" class="ban " style="padding:10px 30px;color:#fff;">Get Started →</a>
            </div>
          </div>
        </li>


      </ul>
    </div>
  </div>


</div>
<div class="mob">
  <div class="video-overlay" style="position: relative;">
    <img src="<?php echo base_url(); ?>assets/img/main.png" alt="" style="width: 100%;">
    <div class="text-overlay1" style="WIDTH: 100%;">
      <h1>Hospital Information<br>Management System</h1>
      <p class="foot">Feature rich, secure and effective HIMS by Prosoft.</p>
      <a href="#" class="ban">Get Started</a>
    </div>
  </div>

</div>
<section>
  <div class="container  pump">
    <h1 class=" text-center" style="font-weight: 700;">An all in one<br> software solution.</h1>

    <p class="text-center">Prosoft’s Hospital Information System delivers complete, reliable solutions for medical
      service management.<br> Manage all major functions effortlessly on one intuitive platform. Get Prosoft today!</p>

    <div class="row mt-md-5 mt-3 asds" style="width: 100%;">

      <img src="<?php echo base_url(); ?>assets/img/all.png" alt="">

    </div>

  </div>
</section>
<section>
  <div class="container  pump">
    <h1 class=" text-center" style="font-weight: 700;text-transform: capitalize;;">services we offer.</h1>


    <div class="row mt-md-5 mt-3 asds" style="width: 100%;    justify-content: space-around;">

      <div class="col-md-5 mt-3">
        <img src="assets/img/s1.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s2.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s3.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s4.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s5.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s6.png" alt="" width="100%">
      </div>
      <div class="col-md-5 mt-3">
        <img src="assets/img/s7.png" alt="" width="100%">
      </div>
    

    </div>

  </div>
</section>
<section>
  <img src="assets/img/sl.png" alt="" width="100%">
</section>
<section>
  <div class="container  pump">
    <h1 class=" text-center" style="font-weight: 700;">About Us    </h1>

    

    <div class="row mt-md-5 mt-3 asds" style="width: 100%;">

      <div class="col-md-7">
   <img src="assets/img/text.png" alt="">
   <br><br>
          <a href="#" class="ban mt-4" style="background-color: #f6aa00;color:#000;">Learn More</a>
      </div>
      <div class="col-md-5"><img src="assets/img/abb.png" alt="" width="100%"></div>
    </div>

  </div>
</section>
<section>
  <div class="container  pump">
    <h1 class=" text-center" style="font-weight: 700;">Trusted by Leading Healthcare<br> Providers Worldwide.</h1>

    

    <div class="row mt-md-5 mt-3 asds" style="width: 100%;">

      
      <img src="assets/img/tru.png" alt="" width="100%">
    </div>

  </div>
</section>
<script>
  var splide = new Splide('.sp', {
    perPage: 1,
    rewind: true,
  });
  splide.mount();

  var splide = new Splide('.sp1', {
    perPage: 7,
    type: 'loop',
    drag: 'free',
    focus: 'center',
    rewind: true,
    autoplay: true,
    pagination: false, // Hide pagination
    breakpoints: {
      768: { // Screen width up to 768px (example for tablets and mobiles)
        perPage: 3,
      },
    },
  });

  splide.mount(window.splide.Extensions);


</script>