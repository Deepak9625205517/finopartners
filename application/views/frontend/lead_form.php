<?php 
$attributes = array('class' => 'row g-3', 'id' => 'lead_form');
echo form_open('email/send', $attributes);
?>
  <div class="col-md-6">
    
    <?php 
     $input1 = array(
          'name'          => 'name',
          'id'            => 'name',
          'placeholder'   => 'Enter Name',
          'class'         => 'bs-footer-form-callbk'
      );
     echo form_input($input1);
    ?>
  </div>
  <div class="col-md-6">    
    <?php 
     $input2 = array(
          'name'          => 'email',
          'type'          => 'email'
          'id'            => 'email',
          'placeholder'   => 'Enter Email',
          'class'         => 'bs-footer-form-callbk'
      );
     echo form_input($input2);
    ?>
  </div>
  <div class="col-md-6">
    <input
    type="tel"
    class="bs-footer-form-callbk mobile-code"
    id="contactNumber"
    placeholder="Enter Mobile Number"
    />
    <?php 
     $input3 = array(
          'name'          => 'mobile',
          'type'          => 'tel'
          'id'            => 'contactNumber',
          'placeholder'   => 'Enter Mobile Number',
          'class'         => 'bs-footer-form-callbk mobile-code'
      );
     echo form_input($input3);
    ?>
  </div>
  <div class="col-6">
    <?php 
    $data = array(
      'name' => 'submit',
      'class' => 'bs-footer-form-btn');
    echo form_submit($data);
    ?>
  </div>
<?=form_close()?>