<?php
   session_start();
   include 'includes/header.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#check" class="btn-get-started">Your Complaint Status</a>
    </div>
</section><!-- End Hero Section -->


<section class="vh-100" id="check">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="/seekyourjob/assets/icon/logo.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h3 class="text-center text-primary mb-5 mt-5">Enter The Phone Number Given With The Complaint</h3>
        <form  action="/seekyourjob/files/statuscheck.php" data-toggle="validator" role="form" method="POST">

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="number" id="form3Example4" class="form-control form-control-lg" name="number"
              placeholder="Enter Phone Number" />
            <label class="form-label" for="form3Example4">Enter Phone Number</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" value="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Check</button>
          </div>
          <div><h6 class="text-center text-danger mt-4">
            <?php
                if(isset($_SESSION['error'])){
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }
            ?>
          </h6></div>

        </form>
      </div>
    </div>
  </div>
</section>



<?php
   include 'includes/footer.php';
?>