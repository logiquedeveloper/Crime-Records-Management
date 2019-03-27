<?php
# Core Configuration
include_once "../config/core.php";
# Set page title
$page_title = "add_police";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>

<div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Add Police</h2>
      <p>Please fill this form to register with us</p>
      <form action="" method="post">
        <div class="form-group">
            <label>Name:<sup>*</label>
            <input type="text" name="name" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        <div class="form-group">
            <label>Username:<sup>*</sup></label>
            <input type="text" name="username" class="form-control form-control-lg ">
            <span class="invalid-feedback"></span>
        </div>    
        <div class="form-group">
            <label>Password:<sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg ">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Email:<sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Mobile No:<sup>*</sup></label>
            <input type="tel" name="mobile_no" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Date of Birth:<sup>*</sup></label>
            <input type="date" name="date_of_birth" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Address:<sup>*</sup></label>
            <input type="text" name="addresss1" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>City:<sup>*</sup></label>
            <input type="text" name="city" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>State:<sup>*</sup></label>
            <input type="text" name="state" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Country:<sup>*</sup></label>
            <input type="text" name="country" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="custom-file mb-5">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Upload photo</label>
        </div>

        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Register">
          </div>
          
        </div>
      </form>
    </div>
  </div>
</div>

























<?php include_once "includes/footer.php"; ?>