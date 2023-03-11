<?php
   session_start();
   include 'includes/header.php';
   include("connection/connection.php");
   $query1="select * from employtable";
   $result1=mysqli_query($conn,$query1);
   $count1=mysqli_num_rows($result1);
   $query2="select * from regcomp";
   $result2=mysqli_query($conn,$query2);
   $count2=mysqli_num_rows($result2);
?>


<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Us</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Join On Our Streams</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Solution For Your Problems</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-person-heart"></i></div>
              <h4 class="title"><a href="">Rate Our Crew(Coming Soon)</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
            <img style="width:650px;" src="/seekyourjob/assets/icon/logo.png" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">The Facts About The Crew We Are Hiding Inside.</p>
        </div>
        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count1 ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Employees</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count2 ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Complaints Recieved</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description">We Have Started 4 branches Initialy. Join On Our Crew.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="/seekyourjob/files/constemp.php"><i class="bi bi-building"></i></a></div>
              <h4 class="title"><a href="/seekyourjob/files/constemp.php">Construction Field</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="/seekyourjob/files/autoemp.php"><i class="bi bi-car-front"></i></a></div>
              <h4 class="title"><a href="/seekyourjob/files/autoemp.php">AutoMobile Field</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="/seekyourjob/files/compemp.php"><i class="bi bi-pc-display-horizontal"></i></a></div>
              <h4 class="title"><a href="/seekyourjob/files/compemp.php">Computer Field</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href="/seekyourjob/files/electroemp.php"><i class="bi bi-phone-flip"></i></a></div>
              <h4 class="title"><a href="/seekyourjob/files/electroemp.php">Electronics Field</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">The Founders Of The Company.Providing A New Earning Shortcut For Educated Fellows.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img class="pic" src="assets/img/ceo.jpg" alt=""></div>
              <h4>Danny Dominic</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img class="pic" src="assets/img/cofounder.jpg" alt=""></div>
              <h4>Besto Jojo</h4>
              <span>Co Founder</span>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img class="pic" src="assets/img/team-2.jpg" alt=""></div>
              <h4>Soumya Miss</h4>
              <span>Advisor</span>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Contact Us For More Services.Thank You For Visiting Us.</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31435.334932221118!2d76.56729855673541!3d9.982382067800756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07dd8c9df6f0f3%3A0xb4506cffcc7062e5!2sMuvattupuzha%2C%20Kerala!5e0!3m2!1sen!2sin!4v1666337197931!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-6 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Muvattupuzha<br>Ernakulam, Kerala 686668</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>dbcompany@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+91-9876543212</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-6 col-md-8" id="message">
            <div class="form">
              <h5 class="text-center">Send A Message To The Admin</h5>
              <form action="/seekyourjob/files/admmessage.php" method="post" role="form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="number" class="form-control" name="phnum" id="phnum" placeholder="Your Contact Number" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
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

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<?php
   include 'includes/footer.php';
?>