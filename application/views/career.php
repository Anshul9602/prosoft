<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<style>
    .main_bg {
        background-color: aliceblue;
    }

    .job_bg {
        background-color: #fff;
    }

    #more {
        display: none;
    }

    .zoom:hover {
        transition: transform 1.2s;
        transform: scale(1.4);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .star {
        color: red;
    }

    .small {
        font-size: 10px;
        line-height: 18px;
    }

    .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 3px;
    }

    .formbg {
        width: 100%;
        padding: 20px;


    }

    input {
        width: calc(100% - 10px);
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        vertical-align: middle;
    }

    input:hover,
    textarea:hover,
    select:hover {
        outline: none;
        border: 1px solid #095484;
        background: #e6eef7;
    }

    .title-block select,
    .title-block input {
        margin-bottom: 10px;
    }

    select {
        padding: 7px 0;
        border-radius: 3px;
        border: 1px solid #ccc;
        background: transparent;
    }

    select,
    table {
        width: 100%;
    }

    option {
        background: #fff;
    }

    .day-visited,
    .time-visited {
        position: relative;
    }

    input[type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    input[type="time"]::-webkit-inner-spin-button {
        margin: 2px 22px 0 0;
    }

    .day-visited i,
    .time-visited i,
    input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        top: 8px;
        font-size: 20px;
    }

    .day-visited i,
    .time-visited i {
        right: 5px;
        z-index: 1;
        color: #a9a9a9;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        right: 0;
        z-index: 2;
        opacity: 0;
    }

    .question-answer label {
        display: block;
        padding: 0 20px 10px 0;
    }

    .question-answer input {
        width: auto;
        margin-top: -2px;
    }

    th,
    td {
        width: 18%;
        padding: 15px 0;
        border-bottom: 1px solid #ccc;
        text-align: center;
        vertical-align: unset;
        line-height: 18px;
        font-weight: 400;
        word-break: break-all;
    }

    .first-col {
        width: 25%;
        text-align: left;
    }

    textarea {
        width: calc(100% - 6px);
    }

    .btn-block {
        margin-top: 20px;
        text-align: center;
    }

    button {
        width: 150px;
        padding: 10px;
        border: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #3a89c9;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0666a3;
    }

    @media (min-width: 568px) {
        .title-block {
            display: flex;
            justify-content: space-between;
        }

        .title-block select {
            width: 30%;
            margin-bottom: 0;
        }

        .title-block input {
            width: 31%;
            margin-bottom: 0;
        }

        th,
        td {
            word-break: keep-all;
        }
    }
</style>

<section class="top p-0 main_bg">
    <div class="mainimg" style="position: relative;background:black;">
        <img src="assets/img/carer.png" alt="" width="100%" style="    opacity: 0.4;">
        <div class="over" style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
            <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">Career</span></h1>
        </div>
    </div>
<div class="container">
    <div class="row mt-md-5 mt-3 pb-4">
        <div class="col-md-6 ">
            <div class="card p-4">
                <h3>As An Employee</h3>
                <img src="assets/img/car1.jpg" alt="">
                <p style="text-align: justify;">Join us as an employee with assigned roles & responsibilities and get remunerated on monthly basis as
                    per applicable HR norms. Take up a role befitting your futuristic vision and career aspirations.
                    Advance your skills holistically with guidance of senior mentors, ample practical exposure and
                    consistent team support. Get opportunities to grow with transparent appraisal policies.</p>
                    <br>
            </div>

        </div>
        <div class="col-md-6 ">
            <div class="card p-4">
                <h3>As An Article</h3>
                <img src="assets/img/car1.jpg" alt="">
                <p style="text-align: justify;">Join us as an article to gain a wholesome training through our nurturing way of practice. We treat
                    our articles as futuristic professionals and provide them with the dignity and work experience like
                    a professional. Through rotation of areas of work, weekly training sessions, outing activities and
                    outstation exposure they gain thorough insight to the demands of the Chartered Accountancy
                    profession and gain proficiency in handling the same.</p>
                <a href="<?php echo base_url('article'); ?>">Click Here For Registration</a>
            </div>

        </div>
    </div>
</div>
    

    <div class="hero-section ehite wf-section ">
        <div class="testbox container job_bg">
            <form action="Job_form" method="post" class="formbg" enctype="multipart/form-data">
                <div>
                    <h4>Apply for this Job</h4>
                </div>
                <hr>
                <div class="container">
                    <div class="row mt-4" style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>First Name<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" required placeholder="First name" />
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Last Name<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" required placeholder="Last name" />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Gender<span class="star">*</span></h6>
                            <select name="gender" required style="color: #000;">
                                <option value="title" selected style="color: #000;"> &nbsp;&nbsp;Gender</option>
                                <option value="Male"> Male</option>
                                <option value="Female"> Female</option>
                                <option value="Other"> Other</option>
                            </select>
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Date Of Birth<span class="star">*</span></h6>
                            <input type="text" id="dob" name="dob" class="form-control" required
                                placeholder="dd-mm-yyyy" />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Email<span class="star">*</span></h6>
                            <input class="email" type="email" name="email" required placeholder="Email" />
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Contact Number<span class="star">*</span></h6>
                            <input type="tel" name="number" required placeholder="Phone number" />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">

                        <div class="col-md-5 mt-3">
                            <h6>Year Of Experience </h6>
                            <input type="text" name="exp" placeholder="No. of years" />
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Last Employment </h6>
                            <input type="text" name="last_com" placeholder="Company Name" />
                        </div>

                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-11 mt-3">
                            <h6>Resume<span class="star">*</span></h6>
                            <input type="file" name="img" required>
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-11 mt-3">
                            <h6>Message</h6>
                            <textarea name="message" id="message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-11 mt-3">
                        <div class="btn-block">
                            <button type="submit" value="submit">Submit</button>
                        </div>
                    </div>
                    <br><br>
                </div>

            </form>
        </div>
    </div>

</section>
<script>
    $(document).ready(function () {
        $('#dob').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>