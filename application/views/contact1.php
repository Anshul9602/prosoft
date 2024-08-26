<style>
  .mainb {
    background-image: url(assets/img/ab.jpg);
    background-position: 50% 235%;
    background-size: cover;
    height: 50vh;
  }

  .section-title-w {
    padding-bottom: 40px;
    margin-top: 30vh;
  }

  .section-title-w h2 {
    color: #f1f1f1;
    font-size: 14px;
    font-weight: 500;
    padding: 0;
    margin: 0 0 5px 0;
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  .section-title-w p {
    color: #fff;
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    font-family: "Poppins", sans-serif;
  }

  .review-box {

    display: none !important;
  }

  ::marker {
    display: none !important;
  }
</style>

<main id="main">
  <div class="mainimg" style="position: relative;background:black;">
    <img src="assets/img/contact.jpg" alt width="100%"
      style="    opacity: 0.4;">
    <div class="over"
      style="position: absolute;  top: 50%;left: 50%; transform: translate(-50%, -50%)">
      <h1 class="h0 mt-30 mt-4 mtt"> <span class="orange text-white">Contact
          Us</span></h1>
    </div>
  </div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="row mt-md-5 mt-3 justify-content-center pb-5">

        <div class="col-lg-4 mt-5 mt-lg-0 text-black row align-content-center" data-aos="fade-right">
          <h4 class="pb-3 col-12">Contact Info</h4>
          <div class="info mt-4 col-md-12 ">
            <div class="address row ">

              <h6 class="col-md-12 col-12" style="font-weight: 700;"><span><i
                    class="bi bi-geo-alt"></i>
                  &nbsp;</span>Location:</h6>
              <p class="col-md-12 col-12"> 207, 222, IInd Floor, Ganpati Plaza,
                M.I.Road, Jaipur-302001</p>
            </div>

            <div class="email row mt-md-4 mt-3">

              <h6 class="col-md-12 col-12" style="font-weight: 700;"><span><i
                    class="bi bi-envelope"></i>
                  &nbsp;</span>Email:</h6>
              <p class="col-md-12 col-12"> info@vsc.co.in
              </p>
            </div>

            <div class="phone row mt-md-5 mt-3">

              <h6 class="col-md-12 col-12" style="font-weight: 700;"><span><i
                    class="bi bi-phone"></i> &nbsp;</span>Call:
              </h6>
              <p class="col-md-12 col-12">+91 -141 2389290,<br>
                +91 141 4009291</p>
            </div>

          </div>

        </div>
        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          <form action="CTA_mail" method="post" role="form"
            class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name"
                  placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="desig" id="desig"
                  placeholder="Your Designation">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="org" id="org"
                  placeholder="Your Organization">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="city" id="city"
                  placeholder="Your city">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email"
                  placeholder="Your Email" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone" id="phone"
                  placeholder="Phone" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="area" id="area"
                  placeholder="Area of Query" required>
              </div>

              <div class="col-md-6 form-group mt-3 mt-md-0">
                <h6 class="text-black text-start mt-3">Area of Query<span class="star">*</span></h6>
                <select class="form-control" id="ser">
                  <option> -- select a service -- </option>
                  <option>Assurance</option>
                  <option>Taxation</option>
                  <option>Financial</option>
                  <option>Business Process Outsourcing</option>
                  <option>Company Law Matters</option>
                  <option>Secretarial Services</option>
                  <option>Insolvency And Bankruptcy Consultancy</option>
                  <option>Labour Laws Related Services</option>
                  <option>Real Estate Consultancy Related Services
                    (RERA)</option>
                </select>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">

                <h6 class="text-black text-start mt-3" >Attachment Upload </h6>
                <input type="file" class="form-control-file" style="    border: 1px solid #ced4da;padding:3px 20px;"
                  id="exampleFormControlFile1">

              </div>
            </div>

            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject"
                id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5"
                placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank
                you!</div>
            </div>
            <div class="text-center"><button type="submit">Send
                Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= F.A.Q Section ======= -->

</main><!-- End #main -->