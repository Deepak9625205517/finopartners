<?php $this->load->view('frontend/layouts/navbar'); ?>
<section class="--bs-contact-page-section">
  <div class="container-fluid">
    <div class="--bs-contact-page-main-div">
      <h1>Contact Us</h1>
      <p>Your one stop solution for all accounting and bookkeeping needs.</p>
    </div>
  </div>
</section>
<section class="--bs-contact-page-detials-section mt-5">
  <div class="container-fluid">
    <div class="--bs-contact-page-heading mb-5">
      <h2>Contact Us For Accounting Related Queries</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="--bs-contact-page-details-items">
                <h3>For Business Queries</h3>
                <p><i class="fa-solid fa-phone"></i> +1312-667-8537</p>
                <p><i class="fa-solid fa-envelope"></i> contact@thefinopartners.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="--bs-contact-page-details-items">
                <h3>For Business Queries</h3>
                <p><i class="fa-solid fa-phone"></i> +1312-667-8537</p>
                <p><i class="fa-solid fa-envelope"></i> contact@thefinopartners.com</p>
              </div>
            </div>
          </div>
        <div class="row mt-5">
          <div class="bs--show-office-adress-header">
            <h3>Head Office</h3>
          </div>
          <div class="col-md-6">
            <div class="-bs--show-office-adress text-black" >
              <img src="<?=base_url('public/assets/images/india-flag.svg')?>" alt="india flag">
              <p> <b>Head Office:</b> <br>22, 2nd Floor Vaishali, Pitampura, Delhi 110034</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="-bs--show-office-adress text-black">
              <img src="<?=base_url('public/assets/images/USA.webp')?>" alt="india flag">
              <p><b>USA Office:</b> <br>401 North Michigan Avenue STE 1200, Chicago, IL 60611</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 offset-md-1">
      <div class="-bs--rightside-from">
        <h5 class="bs--rightside-heading">Free Consultation by Expert</h5>
        <form class="row g-3">
          <div class="col-md-6 col-12">
            <input
              type="text"
              class="bs-modal-form-callbk"
              id="name"
              placeholder="Enter Name"
            />
          </div>
          <div class="col-md-6 col-12">
            <input
              type="text"
              class="bs-modal-form-callbk"
              id="name"
              placeholder="Business Name"
            />
          </div>
          <div class="col-md-12">
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
  </div>
</section>
<section class="mt-5">
<div class="container-fluid" style="padding:0px; margin:0px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.171090393754!2d-87.6268597131255!3d41.88917746472198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2caeb76119c5%3A0x868c4146101f5ec4!2s401%20Michigan%20Ave%20%231200%2C%20Chicago%2C%20IL%2060611%2C%20USA!5e0!3m2!1sen!2sin!4v1715341272094!5m2!1sen!2sin" width="100vw" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>
<?php $this->load->view('frontend/layouts/footer'); ?>