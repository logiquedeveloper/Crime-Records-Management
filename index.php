<?php
# Core Configuration
include_once "config/core.php";
# Set page title
$page_title = "Index";
include_once "includes/header.php";
include_once "includes/navigation.php"; ?>
    <!--Top container-->
<div class="wrapper-class">
    <section class="top-container">
        <header class="showcase">
            <img src="images/crime-img.png" alt="">
            <h1><strong>Keeping Crime in check</strong></h1>
            <p>We ensure the security and safety of the citizens of this great Nation</p>
            <a href="#" class="btn">Read More</a>
        </header>
        <div class="top-box top-box-a">
            <h4>Safety Tips</h4>
            <p class="news">Get Informed</p>
            <a href="#" class="btn">Read More</a>
        </div>
        <div class="top-box top-box-b">
            <h4>Latest News</h4>
            <p class="news">Read News</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section><!--top-container ends-->
</div>

<?php include_once "includes/footer.php"; ?>