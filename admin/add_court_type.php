<?php
# Core Configuration
include_once "../config/core.php";
# Set page title
$page_title = "add_court_type";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>
<div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2 class="text-center">Add Court Details</h2>
      <p class="text-center">Please fill this form to Add court Details</p>
      <form action="" method="post">
    
        <div class="form-group">
            <label>Court Type:<sup>*</label>
            <input type="text" name="court_type" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        
        <div class="form-group">
            <label>Description:<sup>*</sup></label>
            <textarea type="text" name="crime_description" class="form-control form-control-lg"></textarea>
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