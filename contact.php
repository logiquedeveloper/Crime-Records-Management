<?php
# Core Configuration
include_once "config/core.php";
# Set page title
$page_title = "contact";
include_once "includes/header.php";
include_once "includes/navigation.php";
?>
    <div class="row mb-5">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2 class="text-center">Contact  Us</h2>
      <p class="text-center">Give us a feedback..</p>
      <form action="" method="post">
        <div class="form-group">
            <label>Name:<sup>*</label>
            <input type="text" name="contact_name" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        <div class="form-group">
            <label>Email:<sup>*</label>
            <input type="email" name="contact_email" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        
        <div class="form-group">
            <label>Company:<sup>*</label>
            <input type="text" name="company" class="form-control form-control-lg">
            <span class="invalid-feedback"></span>
        </div> 
        <div class="form-group">
            <label>Message:<sup>*</sup></label>
            <textarea type="text" name="message_body" class="form-control form-control-lg"></textarea>
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
<?php echo include_once "includes/footer.php"; ?>