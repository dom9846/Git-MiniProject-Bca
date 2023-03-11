<?php
   include 'includes/header.php';
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#regform" class="btn-get-started">Register</a>
    </div>
  </section><!-- End Hero Section -->

<main id="main">
<section class="vh-100 gradient-custom" id="regform" style="background-color:#c6cdc0;">
  <div class="container py-5 ">
    <div class="row justify-content-center align-items-center ">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-3 text-center">Employee Registration Form</h3>
            <form  action="/seekyourjob/employ/registercheck.php" data-toggle="validator" role="form" method="POST" enctype="multipart/form-data">

              <div class="row form-group">
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="fname" class="form-control form-control-lg" required>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lname" class="form-control form-control-lg" required/>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" id="username" name="uname" class="form-control form-control-lg" required>
                    <label class="form-label" for="username">Username</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="password" id="lastName" name="pass" class="form-control form-control-lg" required/>
                    <label class="form-label" for="lastName">Passoword</label>
                  </div>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-2 pb-2">

                <select class="select form-control-lg" name="qualification" required>
                    <option value="1" disabled>Choose option</option>
                    <option value="BTech">BTech</option>
                    <option value="Diploma">Diploma</option>
                    <option value="ITI">ITI</option>
                </select>
                <label class="form-label select-label">Choose Qualification</label>

                </div>
                <div class="col-md-6 mb-2 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" name="phno" class="form-control form-control-lg" required/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-6 mb-2">

                  <select class="select form-control-lg" name="location">
                    <option value="1" disabled>Location</option>
                    <option value="Muvattupuzha">Muvattupuzha</option>
                    <option value="Vazhakulam">Vazhakulam</option>
                    <option value="Thodupuzha">Thodupuzha</option>
                    <option value="Kothamangalam">Kothamangalam</option>
                  </select>
                  <label class="form-label select-label">Choose Location</label>

                </div>
                <div class="col-6 mb-2">

                  <select class="select form-control-lg" name="branch">
                    <option value="1" disabled>Branch</option>
                    <option value="Construction">Construction</option>
                    <option value="Automobile">Automobile</option>
                    <option value="Computer">Computer</option>
                    <option value="Electronics">Electronics</option>
                  </select>
                  <label class="form-label select-label">Choose Branch</label>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4 mb-2">

                  <div class="form-outline">
                    <input type="file" id="propic" name="propic" class="form-control form-control-lg" required>
                    <label class="form-label" for="propic">Upload Profile Picture</label>
                  </div>

                </div>
                <div class="col-md-4 mb-2">

                  <div class="form-outline">
                    <input type="file" id="certificate" name="certificate" class="form-control form-control-lg" required/>
                    <label class="form-label" for="certificate">Upload Your Certificate</label>
                  </div>

                </div> <div class="col-md-4 mb-2">

                  <div class="form-outline">
                    <input type="file" id="adhar" name="adhar" class="form-control form-control-lg" required/>
                    <label class="form-label" for="certificate">Upload Your Aadhar</label>
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
        </div>
      </div>
    </div>
  </div>
</section>
</main><!-- End #main -->


<?php
   include 'includes/footer.php';
?>