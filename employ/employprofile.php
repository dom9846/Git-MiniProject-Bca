<?php
session_start();
include("includes/headerprof.php");
$user=$_GET['user'];
$query="select * from employtable where id='$user'";
$query2="select * from emp_details where id='$user'";
$result=mysqli_query($conn,$query);
$result2=$conn->query($query2);
$c1 = mysqli_num_rows($result2);
$row=mysqli_fetch_assoc($result);
if ($c1 > 0) {
  $row2 = $result2->fetch_assoc();
  $age = $row2['age'];
  $dob = $row2['dob'];
  $gender = $row2['gender'];
  $addre = $row2['addre'];
  $descrip = $row2['descrip'];
  $email = $row2['email'];
  $nature1 = $row2['nature1'];
  $nature2 = $row2['nature2'];
} else {
  $row2 = $result2->fetch_assoc();
  $age = "Nill";
  $dob = "Nill";
  $gender = "Nill";
  $addre = "Nill";
  $descrip = "Nill";
  $email = "Nill";
  $nature1 = "Nill";
  $nature2 = "Nill";
}
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>
      <?php echo $row['fname'] ?>
      <?php echo $row['sname'] ?>
    </h1>
    <p>I'm <span class="typed"
        data-typed-items="<?php echo $row['username'] ?>,<?php echo $row['qualification'] ?> holder, <?php echo $nature1 ?>, <?php echo $nature2 ?>"></span>
    </p>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['certificate']); ?>"
            class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?php echo $row['qualification'] ?> Holder In
            <?php echo $row['branch'] ?> Field
          </h3>
          <p class="fst-italic">
          <h5>Myself:
            <?php echo $descrip ?>
          </h5>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Joined On:</strong> <span>
                    <?php echo $row['date'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Gender</strong> <span>
                    <?php echo $gender ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>
                    <?php echo $row['phnum'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>
                    <?php echo $row['place'] ?>,Ernakulam
                  </span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                    <?php echo $age ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Date Of Birth</strong> <span>
                    <?php echo $dob ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Qualification:</strong> <span>
                    <?php echo $row['qualification'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>
                    <?php echo $email ?>
                  </span></li>
              </ul>
            </div>
          </div>
          <p>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Address</strong> <span>
                <?php echo $addre ?>
              </span></li>
          </ul>
          </p>
        </div>
      </div>
      <div class="counter mt-5">
        <?php
        $que1 = "select * from compstatus where empid='$user'";
        $que2 = "select * from compstatus where empid='$user' and status1='Completed'";
        $que3 = "select * from compstatus where empid='$user' and status1='On Going'";
        $res1 = mysqli_query($conn, $que1);
        $res2 = mysqli_query($conn, $que2);
        $res3 = mysqli_query($conn, $que3);
        $cou1 = mysqli_num_rows($res1);
        $cou2 = mysqli_num_rows($res2);
        $cou3 = mysqli_num_rows($res3);
        ?>
        <div class="row">
          <div class="col-6 col-lg-4">
            <div class="count-data text-center">
              <h6 class="count h2" data-to="500" data-speed="500">
                <?php echo $cou1 ?>
              </h6>
              <p class="m-0px font-w-600">Total Projects</p>
            </div>
          </div>
          <div class="col-6 col-lg-4">
            <div class="count-data text-center">
              <h6 class="count h2" data-to="150" data-speed="150">
                <?php echo $cou2 ?>
              </h6>
              <p class="m-0px font-w-600">Project Completed</p>
            </div>
          </div>
          <div class="col-6 col-lg-4">
            <div class="count-data text-center">
              <h6 class="count h2" data-to="190" data-speed="190">
                <?php echo $cou3 ?>
              </h6>
              <p class="m-0px font-w-600">Project Ongoing</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <section id="message" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Message Me</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row justify-content-center">

        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="form" id="complaint">
            <h5 class="text-center">Send A Message To An Employ</h5>

            <form action="/seekyourjob/employ/empmessagecheck.php?employ=<?php echo $user ?>" method="post" role="form">
              <div class="form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="phnum" id="phnum" placeholder="Your Contact Number"
                  required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="FeedBack" required></textarea>
              </div>
              <div class="text-center mt-3"><button class="btn btn-success" type="submit" value="submit">Send
                  Message</button></div>
            </form>
          </div>
          <div class="mt-3">
            <h6 class="text-center text-success">
              <?php
                if (isset($_SESSION['success'])) {
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                } else {
                  // echo $_SESSION['error'];
                  // unset($_SESSION['error']);
                }
                ?>
            </h6>
          </div>
        </div>
        <div class="col-sm-3"></div>


      </div>
    </div>
  </section>




</main><!-- End #main -->


<?php
include("includes/footer.php");
?>