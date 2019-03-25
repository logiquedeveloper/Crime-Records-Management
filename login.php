<?php
# Core Configuration
include_once "config/core.php";
# Set page title
$page_title = "login";
include_once "includes/header.php";
include_once "includes/navigation.php";
?>
     <div class="wrapper">
        <div class="left_section">
            <div id="sign-in">
                    <h1>Login</h1>
                <form>
                    <div>
                    <i class="fa fa-user"></i>
                        <label>Username</label>
                        <input type="text" class="text-input">
                    </div>
                    <div>
                    <i class="fa fa-lock"></i>
                        <label>Password</label>
                        <input type="password" class="text-input">
                    </div>
                    <button class="primary-btn">Sign in</button>
                </form>
                <div class="links">
                    <a href="#">Forgot password?</a>
                    <a href="#">Sign in with Gmail or Facebook</a>
                </div>
                <div class="or-rule">
                    <hr class="bar">
                    <span>OR</span>
                    <hr class="bar">
                </div>
                <input type="button" value="Create Account" class = "secondary-btn">
            </div><!--close of sign-in id-->
           
        </div><!--close of left_sectioin-->
            <div class="right_section">
                <div id="showcase">
                    <div class="showcase-content">
                        <h1 class="showcase-text">Help us to keep <strong>Crime</strong> in Check</h1> 
                        <a href="#" class="secondary-btn">View Criminals</a>
                    </div>
                </div>
            </div><!--close of right_sectioin-->
        
    </div><!--close of  wrapper class -->
<?php echo include_once "includes/footer.php"; ?>