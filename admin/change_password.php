<?php
# Core Configuration
include_once "../config/core.php";
# Set page title
$page_title = "change_password";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>
<div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2 class="text-center">Change Password</h2>
      <form action="" method="post">
        
        <div class="form-group">
            <label>Current Password:<sup>*</sup></label>
            <input type="password" name="current_password" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>New Password:<sup>*</sup></label>
            <input type="password" name="new_password" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        

        <div class="form-row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Submit">
          </div>
          
        </div>
      </form>
    </div>
  </div>
</div>

 
<?php include_once "includes/footer.php"; ?>