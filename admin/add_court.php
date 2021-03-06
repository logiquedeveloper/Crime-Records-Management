<?php
# Core Configuration
include_once "../config/core.php";
# Set page title
$page_title = "add_court";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>
<div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2 class="text-center">Add Court Details</h2>
      <p class="text-center">Please fill this form to Add court Details</p>
      <form action="" method="post">
        <div class="form-group">
            <label for="court_type">Court type</label>
            <select class="custom-select" id="gender2">
                <option selected>Select Court...</option>
                <option value="1">Customary Court</option>
                <option value="2">Supreme Court</option>
                <option value="3">Court of Appeal</option>
            </select> 
        </div>
        <div class="form-group">
            <label>Court Name:<sup>*</label>
            <input type="text" name="court_name" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        <div class="form-group">
            <label>Location:<sup>*</label>
            <input type="text" name="court_location" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        <div class="form-group">
            <label>Description:<sup>*</sup></label>
            <textarea type="date" name="crime_description" class="form-control form-control-lg"></textarea>
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