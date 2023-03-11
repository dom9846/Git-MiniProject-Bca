<?php
  session_start();
   include("includes/header.php");
?>



<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#complaint" class="btn-get-started">Complaint</a>
    </div>
</section><!-- End Hero Section -->

<main id="main">


<section class="vh-100 gradient-custom" id="complaint" style="background-color:#c6cdc0;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Complaint Registration Form</h3>
            <form  action="checkcomp.php" data-toggle="validator" role="form" method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="fname" class="form-control form-control-lg" required />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lname" class="form-control form-control-lg" required />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" maxlength="10" minlength="10" pattern="(6|7|8|9)\d{9}" name="phnum" class="form-control form-control-lg w-100" required />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="description" name="description" class="form-control form-control-lg" required />
                    <label class="form-label" for="lastName">Describe</label>
                  </div>

                </div>

              </div>

              <div class="row form-group">
                <div class="col-6 mb-4">

                  <select class="select form-control-lg w-100" name="location"  required>
                    <option value="1" disabled>Location</option>
                    <option value="Muvattupuzha">Muvattupuzha</option>
                    <option value="Vazhakulam">Vazhakulam</option>
                    <option value="Thodupuzha">Thodupuzha</option>
                    <option value="Kothamangalam">Kothamangalam</option>
                  </select>
                  <label class="form-label select-label">Choose Location</label>

                </div>
                <div class="col-6 mb-4">

                  <select class="select form-control-lg w-100" name="branch"  required>
                    <option value="1" disabled>Branch Of Work</option>
                    <option value="Construction">Construction</option>
                    <option value="Automobile">Automobile</option>
                    <option value="Computer">Computer</option>
                    <option value="Electronics">Electronics</option>
                  </select>
                  <label class="form-label select-label">Choose Branch</label>

                </div>
              </div>

              

              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="file" id="propic" name="Picture1" class="form-control form-control-lg" required>
                    <label class="form-label" for="propic">Upload Picture 1</label>
                  </div>

                </div>
              </div>

              <div class="row form-group my-2">
                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" value="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Submit</button>
                </div>
              </div>

            </form>
          </div>
          <div><h6 class="text-center text-success mb-1 mb-3">
            <?php
                if(isset($_SESSION['success'])){
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                }
            ?>
          </h6></div>
        </div>
      </div>
    </div>
  </div>
</section>


</main><!-- End #main -->


<?php
   include("includes/footer.php");
?>