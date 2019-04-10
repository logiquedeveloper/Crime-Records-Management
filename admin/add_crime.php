<?php
# Core Configuration
include_once "../config/core.php";
# Set page title
$page_title = "add_crime";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>
     
  <div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2 class="text-center">Add Crime Details</h2>
      <p class="text-center">Please fill this form to Add crime Details</p>
      <form action="" method="post">
        <div class="form-group">
            <select class="custom-select" id="gender2">
                <option selected>Select Criminal...</option>
                <option value="1">Emmy</option>
                <option value="2">logic</option>
            </select> 
        </div>
        <div class="form-group">
            <select class="custom-select" id="gender2">
                <option selected>Select Category...</option>
                <option value="1">Murder</option>
                <option value="2">Theft</option>
            </select> 
        </div> 
        <div class="form-group">
            <select class="custom-select" id="gender2">
                <option selected>Select Prison...</option>
                <option value="1">Prison Break</option>
                <option value="2">kirikiri</option>
            </select> 
        </div>   
        <div class="form-group">
            <select class="custom-select" id="gender2">
                <option selected>Select Court...</option>
                <option value="1">Supreme Court</option>
                <option value="2">Customary Court</option>
            </select> 
        </div>  
        <div class="form-group">
            <label>Crime Date:<sup>*</sup></label>
            <input type="date" name="crime_date" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label>Crime Scene<sup>*</sup></label>
            <input type="text" name="crime_scene" class="form-control form-control-lg">
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