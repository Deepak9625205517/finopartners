<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url('public/assets/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('public/assets/css/lite-yt-embed.css')?>"/>
    <script src="<?=base_url('public/assets/js/lite-yt-embed.js')?>"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="<?=base_url('public/assets/css/style.css')?>" />
        <link rel="stylesheet" href="<?=base_url('public/assets/slick/slick.css')?>" />
        <title>The Fino Partner</title>
      </head>
      <body>
        <header>
          <div class="container-fluid">
            <div class="bs--top-header--">
              <div class="bs--coutry--flag">
                <div class="bs--coutry--flag-list">
                  <img src="<?=base_url('public/assets/images/USA.webp')?>" />
                  <p>USA</p>
                </div>
                <div class="bs--coutry--flag-list">
                  <img src="<?=base_url('public/assets/images/uk.webp')?>" />
                  <p>UK</p>
                </div>
                <div class="bs--coutry--flag-list">
                  <img src="<?=base_url('public/assets/images/UAE.webp')?>" />
                  <p>UAE</p>
                </div>
                <div class="bs--coutry--flag-list">
                  <img src="<?=base_url('public/assets/images/Australia.webp')?>" />
                  <p>Australia</p>
                </div>
              </div>
              <div class="bs--heder-mail-tel">
                <div class="bs--tell">
                  <a href="tel:+001202345678"
                  ><i class="fa-solid fa-phone"></i> +1312-667-8537</a
                  >
                </div>
                <div class="bs--maill">
                  <p>
                    <i class="fa-solid fa-envelope"></i>
                    contact@thefinopartners.com
                  </p>
                </div>
              </div>
              <div class="--bs-enquiry-sec">
                <div class="--bs-shedule-buuton">
                  <button class="custom-button"><i class="fa-solid fa-calendar-days"></i> Schedule Meeting</button>
                </div>
                <div >
                  <button class="custom-button" data-bs-toggle="modal" data-bs-target="#enquiryfrorm"><i class="fa-solid fa-phone"></i> Enquiry</button>
                </div>
              </div>
            </div>
          </div>
        </header>
        <section class="--bs-equiry-modal=section">
          <div class="modal fade" id="enquiryfrorm" tabindex="-1" aria-labelledby="enquiryfrormModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered --bs-modal-dialog-cust">
              <div class="modal-content">
                <!-- <div class="modal-header">
                  <h5 class="modal-title" id="enquiryfrormModalLabel">Free Consultation by Expert</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body -bs--modal-body">
                  <div class="--bs--modal-from-mainDiv">
                    <div class="--bs--modal-from-image">
                      <img src="<?=base_url('public/assets/images/login-bg.webp')?>" />
                    </div>
                    <div class="--bs--modal-from">
                      <button type="button" class="bs--modal-btn-close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      <h5 class="bs--enquirymodalfrorm-heading">Free Consultation by Expert</h5>
                      <form class="row g-3">
                        <div class="col-md-12">
                          <!-- <label for="inputEmail4" class="form-label">Email</label> -->
                          <input
                          type="text"
                          class="bs-modal-form-callbk"
                          id="name"
                          placeholder="Enter Name"
                          />
                        </div>
                        <div class="col-md-12">
                          <input
                          type="text"
                          class="bs-modal-form-callbk"
                          id="name"
                          placeholder="Business Name"
                          />
                        </div>
                        <div class="col-md-12">
                          <!-- <label for="inputPassword4" class="form-label">Password</label> -->
                          <input
                          type="email"
                          class="bs-modal-form-callbk"
                          id="email"
                          placeholder="Enter Email"
                          />
                        </div>
                        <div class="col-md-12">
                          <input type="text" id="mobile_code" class="mobile-code bs-modal-form-callbk" placeholder="Phone Number" name="name">
                        </div>
                        <div class="col-md-12">
                          <select name="name" id="" class="bs-modal-form-callbk" required="required" aria-required="true">
                            <option value="Select Services">Select Services</option>
                            <option value="Accounting Outsourcing Services">Accounting Outsourcing Services</option>
                            <option value="Bookkeeping Services">Bookkeeping Services</option>
                            <option value="Outsourced Tax Preparation">Outsourced Tax Preparation</option>
                            <option value="Digital Transformation Services">Digital Transformation Services</option>
                            <option value="Payroll Management">Payroll Management</option>
                            <option value="AR &amp; AP Management">AR &amp; AP Management</option>
                            <option value="Inventory Management">Inventory Management</option>
                            <option value="Virtual Accounting">Virtual Accounting</option>
                            <option value="Year End Services">Year End Services</option>
                            <option value="Control Account Reconciliation">Control Account Reconciliation</option>
                            <option value="QuickBooks Accounting">QuickBooks Accounting</option>
                            <option value="Xero Accounting">Xero Accounting</option>
                            <option value="Management Reporting">Management Reporting</option>
                            <option value="Cost Analysis">Cost Analysis</option>
                            <option value="Operational Analysis">Operational Analysis</option>
                            <option value="Virtual CFO">Virtual CFO</option>
                            <option value="Accounting Software Consulting">Accounting Software Consulting</option>
                            <option value="Preparation of Financial Statements">Preparation of Financial Statements</option>
                            <option value="Medical Process Outsourcing">Medical Process Outsourcing</option>
                            <option value="Audit Support Services">Audit Support Services</option>
                            <option value="None">None</option>
                          </select>
                        </div>
                        <div class="col-md-12 col-12 pt-3">
                          <button type="submit" class="bs-footer-form-btn w-100">
                          Submit
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Submit</button>
                </div> -->
              </div>
            </div>
          </div>
        </section>
        <div class="bs--navbar-main-div">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <a class="navbar-brand finopartner-logo" href="#"><img src="public/assets/images/TFP-The-fino-partner-logo.svg" alt="the fino partners"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bs--finopartner-navar">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?=base_url()?>">Company</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="<?=base_url('services')?>">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#">Industries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#">Library</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <section class="bs--show-navbar-link-section">
          <div class="--bs-show-navbar-link-heading">
            <h2>Know About us Better</h2>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 --bs-show-navbar-link-item">
                <div class="--bs-show-navbar-link-item-list">
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 --bs-show-navbar-link-item">
                <div class="--bs-show-navbar-link-item-list">
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 --bs-show-navbar-link-item">
                <div class="--bs-show-navbar-link-item-list">
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 --bs-show-navbar-link-item">
                <div class="--bs-show-navbar-link-item-list">
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>