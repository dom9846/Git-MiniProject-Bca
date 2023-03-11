<?php
   session_start();
   include("includes/header.php");
?>


<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#complaint" class="btn-get-started">Message</a>
    </div>
</section><!-- End Hero Section -->

<main id="main">


<section class="vh-100 gradient-custom" id="complaint" style="background-color:#c6cdc0;">

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 col-md-8 mt-5" id="message">
            <div class="form"  id="complaint">
              <h5 class="text-center">Send A Message To An Employ</h5>
              
              <form action="/seekyourjob/files/empmessagecheck.php" method="post" role="form">
                <div class="form-group mt-3">
                  <input type="number" name="empid" class="form-control" id="name" placeholder="Id=<?php $set=$_GET['set']; echo $set; ?>" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="phnum" id="phnum" placeholder="Your Contact Number" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="FeedBack" required></textarea>
                </div>
                <div class="text-center mt-3"><button class="btn btn-success"type="submit" value="submit">Send Message</button></div>
              </form>
            </div>
            <div class="mt-3"><h6 class="text-center text-success"><?php
            if(isset($_SESSION['success'])){
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            }
            ?></h6></div>
            <div class="mt-3"><h6 class="text-center text-danger"><?php
            if(isset($_SESSION['error'])){
              echo $_SESSION['error'];
              unset($_SESSION['error']);
            }
            ?></h6></div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>


</section>


</main><!-- End #main -->


<?php
   include("includes/footer.php");
?>