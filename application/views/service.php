<style>
  .full-width {
    width: 100%;
  }

  #parallax-container {
    position: relative;
    height: 80vh;
    overflow: hidden;
    background: black;
  }


  .parallax-inner {
    position: absolute;
    top: 0;
    left: -380px;
    width: 200%;
    height: 100%;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    transition: transform 0.2s;
    opacity: 0.3;
  }

  .fusion-builder-row {
    position: relative;
    z-index: 2;
  }

  .fusion-builder-row h1 {
    font-size: 50px;
    font-weight: 600;
    color: #fff;
    padding-bottom: 20px;
  }


  .fusion-text {
    color: white;
    text-align: center;
    padding: 20px;
  }

  @media screen and (max-width:680px) {
    .fusion-builder-row h1 {
      font-size: 24px;
      color: #fff;
      padding-bottom: 10px;
    }

    .fusion-builder-row .contiontt p {
      max-width: 100% !important;
    }

    .cstm_key_people .member_txt {
      text-align: start;
      width: 100%;
      padding: 10px !important;
      transition: .4s ease-in-out;
    }

    .cstm_key_people .member_txt h5 {
      font-size: 16px;
    }

    .cstm_key_people .member_txt span {
      font-size: 14px;
    }
  }
</style>
<style>
  /* Popup container */
  .popup {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 999;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Popup content */
  .popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 40px;
    border: 1px solid #888;
    width: 80%;
    max-height: 80vh;
    overflow-y: scroll;
    z-index: 9999999;
    border-radius: 20px;
  }

  /* Close button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  .sses .row {
    margin-top: 20px;
  }

  @media (max-width:680px) {
    .popup-content {

      width: 91%;
      max-height: 85vh;
      overflow-y: scroll;
      z-index: 9999999;
    }
  }

  .ttb .nav-item .active {
    background-color: #3a89c9;
    color: #fff !important;
  }

  .ttb .nav-item .nav-link {
    text-align: center;
    font-size: 18px;
    color: #000;
  }

  .tab-pane h5 {
    text-transform: uppercase;
  }
</style>

<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<section class="full-width p-0">
  <div class="post-content">
    <div class="fusion-fullwidth fullwidth-box" id="parallax-container">
      <div class="parallax-inner" style="background-image: url('assets/img/servicemain.png');">
      </div>
      <div class="fusion-builder-row fusion-row" style="height:100%;align-items: center;
    display: flex;   justify-content: start;">
        <div class="container">
          <div class>
            <h1>OFFERINGS</h1>
            <p style="height: 2px;width:10%;background:#fff;"></p>
            <div class="contiontt">
              <p style="color: #fff;max-width:50%;line-height:1.9">
                Vinod Singhal & Co. LLP, with more than three decades of experience, delivers expert financial controls
                and performance reporting. Serving PSUs, banks, and private sectors, we are empanelled with major
                regulatory bodies, ensuring comprehensive, top-tier solutions across Bharat.
              </p>
              <br>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Add more content here to enable scrolling -->
  </div>

</section>

<div id="COMPLIANCE_PROTFOLIO"></div>
<div id="ADVISORY_PROTFOLIO"></div>
<section>

  <div id="popup1" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Accounting/ Policy Drafting </h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as1.jpg" alt="" width="100%">
        </div>
        <div class="col-md-7 mt-3">


          <p> &#x2022; Design, implementation and review of accounting manuals
          </p>
          <p> &#x2022; Various Policy drafting </p>




          <p> &#x2022; Advice on various accounting issues including those
            related to Indian GAAPs, & IFRS</p>
          <p> &#x2022; SOP drafting & implementation</p>


        </div>
      </div>
    </div>

  </div>
  <div id="popup2" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Agro & MSME </h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as2.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Preparation of DPRs</p>
          <p> &#x2022; Help in getting various Central & State govt.
            Subsidies</p>
          <p> &#x2022; Finance under various MSME schemes</p>
          <p> &#x2022; Various related Compliances</p>
          <p> &#x2022; End to End consultancy</p>
        </div>
      </div>

    </div>
  </div>
  <div id="popup3" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Corporate Consultancy</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as3.jpg" alt="" width="100%">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Share Valuations</p>
          <p> &#x2022; Advising on various matters under the Companies Act, 2013
            including appearance before the CLB</p>
            <p> &#x2022; Corporate Restructuring</p>
            <p> &#x2022; Merger & Acquisitions</p>
            <p> &#x2022; Project financing</p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup4" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Cross Border Services</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as4.jpg" alt="" width="100%">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Foreign Company Incorporation</p>
          <p> &#x2022; International Taxation Advisory</p>
          <p> &#x2022; Laision office setup</p>
          <p> &#x2022; Transfer Pricing</p>
          <p> &#x2022; FEMA/RBI Compliances</p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup5" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>INSOLVENCY AND BANKRUPTCY</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/inss.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p>&#x2022;Asset Tracing and Investigation Services</p>
          <p>&#x2022;Due Diligence on Debtors' Creditworthiness</p>
          <p>&#x2022;Litigation Support For Debt Recovery</p> <p>&#x2022;Debt Restructuring and Negotiation</p>
          <p>&#x2022;Debt Recovery through Insolvency and Bankruptcy</p>
        </div>
      </div>
      

    </div>
  </div>
  <div id="popup6" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>IT & Blockchain</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as6.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Blockchain development</p>
          <p> &#x2022; Blockchain consultancy</p><p> &#x2022; Strategy workshop & training</p>
          <p> &#x2022; Ideation & Integration</p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup7" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Labour Laws </h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as7.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; PF/ESI Consultancy</p>
          <p> &#x2022; Surrender of Trusts</p> <p> &#x2022; CLRA/ BOCW/ PT/ LWF/ Factories related consultancy</p>
          <p> &#x2022; Payroll management consultancy</p>
        </div>
      </div>
     
    </div>
  </div>
  <div id="popup8" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Start-up Solutions</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as8.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Company Incorporation</p>
          <p> &#x2022; Accounting Advisory</p><p> &#x2022; Regular Compliances</p>
          <p> &#x2022; Fund Raising</p>
        </div>
      </div>
      

    </div>
  </div>
  <div id="popup9" class="popup">
    <div class="popup-content" style="    width: 54%;">
      <span class="close">&times;</span>
      <h2>Taxation</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/taxad.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; International and Domestic Tax Planning</p>
          <p> &#x2022; Related consultancy</p>
        </div>
      </div>
     
    </div>
  </div>
  <div id="popup10" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Valuation Services</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/val.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Business Valuation</p>
          <p> &#x2022; Financial Reporting Valuation</p>
          <p> &#x2022; Specialised Valuation</p><p> &#x2022; Financial Modeling</p>
          <p> &#x2022; Liquidation Value, Arbitration & Dispute</p>
          <p> &#x2022; Intangible Assets Valuation</p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup11" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Other Services</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/as11.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Virtual CFO Services</p>
          <p> &#x2022; Capital Budgeting & Planning</p>
          <p> &#x2022; ISO Registration</p>
          <p> &#x2022; FSSAI Registration</p>
          <p> &#x2022; PSARA Licence</p> <p> &#x2022; Formation of Trusts/NGOs & registration</p>
          <p> &#x2022; Any Other Related Services</p>
          <p> &#x2022; UDYAM Registration</p>
          <p> &#x2022; Shop & Establishment Act</p>
          <p> &#x2022; Wage Compliances</p>
        </div>
      </div>
     
    </div>
  </div>

  <!-- COMPLIANCE PORTFOLIO   -->

  <div id="popup21" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Audit & Assurance</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/cs1.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Statutory Audit </p>
          <p> &#x2022; Tax Audit</p>
          <p> &#x2022; GST Audit</p>
          <p> &#x2022; Internal Audit</p>
          <p> &#x2022; Management Audit </p> <p> &#x2022; Stock/FA Audit with barcoding </p>
          <p> &#x2022; Revenue Audit</p>
          <p> &#x2022; Internal Control Review</p>
          <p> &#x2022; Due Diligence</p>
          <p> &#x2022; Forensic/ Special Inspections </p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup22" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Taxation</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/taxc.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          
          <p> &#x2022; Corporate and personal tax compliance </p>
          <p> &#x2022; Income-tax assessments</p>
          <p> &#x2022; Appeals before the Commissioner (Appeals) and the
            Income-tax Appellate Tribunal</p><p> &#x2022; Indirect Tax Compliances and advisory </p>
            <p> &#x2022; Compliance with law relating to GST</p>
            <p> &#x2022; GST new registration</p>
            <p> &#x2022; GST Assessments</p>
        </div>
      </div>
      
    </div>
  </div>
  <div id="popup23" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Labour Law</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/lab1.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <h3 class="mt-4">PF/ESI</h3>
          <p> &#x2022; Registration and Monthly Compliances </p>
          <p> &#x2022; Litigations </p> <p> &#x2022; Soft Audit/ Compliance Audit </p>
          <p> &#x2022; Exempted Trust Audit</p>
          <h3 class="mt-4">CLRA/ BOCW/ PT/ LWF/ Factories</h3>
          <div class="row">
            <div class="col-md-6">
    
              <p> &#x2022; Registration, Licence & Compliances </p>
              <p> &#x2022; Litigations </p>
    
    
            </div>
            <div class="col-md-6">
    
              <p> &#x2022; Soft Audit/ Compliance Audit </p>
    
    
            </div>
          </div>
          <h3 class="mt-4">Payroll Management</h3>
          <div class="row">
            <div class="col-md-6">
    
              <p> &#x2022; Payroll Preparation, Storage and Management </p>
              <p> &#x2022; Litigations </p>
    
    
            </div>
            <div class="col-md-6">
    
              <p> &#x2022; Soft Audit/ Compliance Audit </p>
              <p> &#x2022; TDS and Tax Planning </p>
    
    
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </div>
  <div id="popup24" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Company Law Matters & Secretarial Services</h2>
      <hr>
      <div class="row align-items-center">
        <div class="col-md-5 mt-3">
          <img src="assets/sout/corp.jpg" width="100%" alt="">
        </div>
        <div class="col-md-7 mt-3">
          <p> &#x2022; Formation of Indian & Offshore Companies </p>
          <p> &#x2022; Maintenance of Statutory records & register </p>
          <p> &#x2022; Assistance in preparation & filing of various forms with
            the registrar</p>
            <p> &#x2022; Assisting in Winding Up of Companies </p>
            <p> &#x2022; Maintenance of Minutes book</p>
        </div>
      </div>
      
    </div>
  </div>


  <div class="container ttb mt-4">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" style="width: 100%;max-width:50%;">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">ADVISORY PORTFOLIO</a>
      </li>
      <li class="nav-item" style="width: 100%;max-width:50%;">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">COMPLIANCE PORTFOLIO</a>
      </li>

    </ul>
    <!-- Tab content -->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row justify-content-between sses">
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as1.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">ACCOUNTING/ POLICY DRAFTING </h5>
              <p class="mt-3">Design, implementation and review of accounting
                manuals</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup1"> Read More</button>
            </div>

          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as2.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">AGRO & MSME </h5>
              <p class="mt-3">Help in getting various Central & State govt.
                Subsidies</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup2"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as3.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">CORPORATE CONSULTANCY</h5>
              <p class="mt-3">Advising on various matters under the Companies
                Act, 2013 including appearance before the CLB</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup3"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as4.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">CROSS BORDER SERVICES</h5>
              <p class="mt-3">Foreign Company Incorporation</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup4"> Read More</button>
            </div>
          </div>

          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/inss.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">INSOLVENCY AND BANKRUPTCY</h5>
              <p class="mt-3">Asset Tracing and Investigation Services</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup5"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as6.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">IT & BLOCKCHAIN SERVICES</h5>
              <p class="mt-3">Blockchian development</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup6"> Read More</button>
            </div>
          </div>

          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as7.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">LABOUR LAWS </h5>
              <p class="mt-3">PF/ESI Consultancy</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup7"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as8.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">START-UP SOLUTIONS</h5>
              <p class="mt-3">Company incorporation
              </p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup8"> Read More</button>
            </div>
          </div>

          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/taxad.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">TAXATION</h5>
              <p class="mt-3">International and Domestic Tax Planning</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup9"> Read More</button>
            </div>
          </div>

          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/val.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">VALUATION SERVICES</h5>
              <p class="mt-3">Business Valuation</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup10"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/as11.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">OTHER SERVICES</h5>
              <p class="mt-3">Formation of Trusts/NGOs & registration</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup11"> Read More</button>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <!-- <p>This is the profile tab content.</p> -->
        <div class="row justify-content-between sses">
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/cs1.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">AUDIT & ASSURANCE</h5>
              <p class="mt-3">Statutory Audit </p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup21"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/taxc.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">Taxation</h5>
              <p class="mt-3"> Corporate and personal tax compliance</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup22"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/lab1.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">Labour Law</h5>
              <p class="mt-3">Registration and Monthly Compliances</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup23"> Read More</button>
            </div>
          </div>
          <div class="col-md-6 text-black row mt-5">
            <div class="col-md-4" style="    align-items: center;display:flex;">
              <img src="assets/sout/corp.jpg" alt>
            </div>
            <div class="col-md-8 mt-3">
              <h5 style="font-weight: 500;">Company Law</h5>
              <p class="mt-3"> Formation of Indian & Offshore Companies</p>
              <button class="btn btn-outline-primary readMoreBtn" data-popup="popup24"> Read More</button>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Get all buttons that open a popup
  var buttons = document.querySelectorAll(".readMoreBtn");

  // Attach click event listeners to each button
  buttons.forEach(function (button) {
    button.onclick = function () {
      var popupId = this.getAttribute("data-popup");
      var popup = document.getElementById(popupId);
      popup.style.display = "block";
    }
  });

  // Get all close elements
  var closes = document.querySelectorAll(".close");

  // Attach click event listeners to each close element
  closes.forEach(function (close) {
    close.onclick = function () {
      var popup = this.closest(".popup");
      popup.style.display = "none";
    }
  });

  // Close popup when clicking outside of it
  window.onclick = function (event) {
    var popups = document.querySelectorAll(".popup");
    popups.forEach(function (popup) {
      if (event.target == popup) {
        popup.style.display = "none";
      }
    });
  }
</script>