<?php
include 'includes/header.php';
include("connection/connection.php");
$userid = $_SESSION['userid'];
$query1 = "select * from employtable where id='$userid'";
$query2 = "select * from emp_details where id='$userid'";
$query3 = "select * from emp_message where id='$userid'";
$result1 = $conn->query($query1);
$result2 = $conn->query($query2);
$c1 = mysqli_num_rows($result2);
$result3 = $conn->query($query3);
$row1 = $result1->fetch_assoc();
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
      <?php echo $row1['fname'] ?>
      <?php echo $row1['sname'] ?>
    </h1>
    <p>I'm <span class="typed"
        data-typed-items="<?php echo $row1['username'] ?>,<?php echo $row1['qualification'] ?> holder, <?php echo $nature1 ?>, <?php echo $nature2 ?>"></span>
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
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['picture']); ?>" class="img-fluid"
            alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?php echo $row1['qualification'] ?> Holder In
            <?php echo $row1['branch'] ?> Field
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
                    <?php echo $row1['date'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Gender</strong> <span>
                    <?php echo $gender ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>
                    <?php echo $row1['phnum'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>
                    <?php echo $row1['place'] ?>,Ernakulam
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
                    <?php echo $row1['qualification'] ?>
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

    </div>
  </section><!-- End About Section -->

  <!-- ======= Complaints Section ======= -->
  <?php
  $branch = $row1['branch'];
  $querya = "select * from regcomp where place='Muvattupuzha' and branch='$branch'";
  $queryb = "select * from regcomp where place='Vazhakulam' and branch='$branch'";
  $queryc = "select * from regcomp where place='Thodupuzha' and branch='$branch'";
  $queryd = "select * from regcomp where place='Kothamangalam' and branch='$branch'";
  $itema = $conn->query($querya);
  $itemb = $conn->query($queryb);
  $itemc = $conn->query($queryc);
  $itemd = $conn->query($queryd);
  ?>
  <section id="complaints" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Complaints Around Me</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-mvpa">Muvattupuzha</li>
            <li data-filter=".filter-vklm">Vazhakulam</li>
            <li data-filter=".filter-tdpa">Thodupuzha</li>
            <li data-filter=".filter-kmlm">Kothamangalam</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        <?php while ($row = $itema->fetch_assoc()) {
          $compid_a = $row["id"];
          $query_a = "select * from compstatus where id='$compid_a'";
          $result_a = mysqli_query($conn, $query_a);
          $count_a = mysqli_num_rows($result_a);
          if ($count_a == 0) {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-mvpa">
          <div class="card" style="width: 18rem;">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic1']); ?>"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NAME:
                <?php echo $row["fname"] ?>
                <?php echo $row["sname"] ?>
              </h5>
              <p class="card-text">Details:
                <?php echo $row["descrip"] ?>
              </p>
              <h5 class="card-title">Contact:
                <?php echo $row["phnum"] ?>
              </h5>
              <div>
                <form
                  action="/seekyourjob/employ/compstatus.php?emp=<?php echo $userid ?>&comp=<?php echo $row["id"] ?>"
                  data-toggle="validator" role="form" method="POST">
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Commit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>

        <?php while ($row = $itemb->fetch_assoc()) {
          $compid_b = $row["id"];
          $query_b = "select * from compstatus where id='$compid_b'";
          $result_b = mysqli_query($conn, $query_b);
          $count_b = mysqli_num_rows($result_b);
          if ($count_b == 0) {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-vklm">
          <div class="card" style="width: 18rem;">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic1']); ?>"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NAME:
                <?php echo $row["fname"] ?>
                <?php echo $row["sname"] ?>
              </h5>
              <p class="card-text">Details:
                <?php echo $row["descrip"] ?>
              </p>
              <h5 class="card-title">Contact:
                <?php echo $row["phnum"] ?>
              </h5>
              <div>
                <form
                  action="/seekyourjob/employ/compstatus.php?emp=<?php echo $userid ?>&comp=<?php echo $row["id"] ?>"
                  data-toggle="validator" role="form" method="POST">
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Commit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>

        <?php while ($row = $itemc->fetch_assoc()) {
          $compid_c = $row["id"];
          $query_c = "select * from compstatus where id='$compid_c'";
          $result_c = mysqli_query($conn, $query_c);
          $count_c = mysqli_num_rows($result_c);
          if ($count_c == 0) {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-tdpa">
          <div class="card" style="width: 18rem;">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic1']); ?>"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NAME:
                <?php echo $row["fname"] ?>
                <?php echo $row["sname"] ?>
              </h5>
              <p class="card-text">Details:
                <?php echo $row["descrip"] ?>
              </p>
              <h5 class="card-title">Contact:
                <?php echo $row["phnum"] ?>
              </h5>
              <div>
                <form
                  action="/seekyourjob/employ/compstatus.php?emp=<?php echo $userid ?>&comp=<?php echo $row["id"] ?>"
                  data-toggle="validator" role="form" method="POST">
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Commit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>

        <?php while ($row = $itemd->fetch_assoc()) {
          $compid_d = $row["id"];
          $query_d = "select * from compstatus where id='$compid_d'";
          $result_d = mysqli_query($conn, $query_d);
          $count_d = mysqli_num_rows($result_d);
          if ($count_d == 0) {
        ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-kmlm">
          <div class="card" style="width: 18rem;">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pic1']); ?>"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NAME:
                <?php echo $row["fname"] ?>
                <?php echo $row["sname"] ?>
              </h5>
              <p class="card-text">Details:
                <?php echo $row["descrip"] ?>
              </p>
              <h5 class="card-title">Contact:
                <?php echo $row["phnum"] ?>
              </h5>
              <div>
                <form
                  action="/seekyourjob/employ/compstatus.php?emp=<?php echo $userid ?>&comp=<?php echo $row["id"] ?>"
                  data-toggle="validator" role="form" method="POST">
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Commit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
        <?php
          }
        }
        ?>

      </div>
      <!-- error or success  after commit -->
      <div>
        <h6 class="text-center text-danger mb-1 mb-3">
          <?php
          if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }
          ?>
        </h6>
      </div>
      <div>
        <h6 class="text-center text-success mb-1 mb-3">
          <?php
          if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          }
          ?>
        </h6>
      </div>
      <!-- error or success  after commit -->

    </div>
  </section><!-- End Complaints Section -->

  <!-- ======= Inbox Section ======= -->
  <section id="inbox" class="services">
    <div class="container">

      <div class="section-title">
        <h2>My Inbox</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row">
        <?php
        while ($row3 = $result3->fetch_assoc()) {
        ?>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi bi-envelope-paper"></i></div>
          <h4 class="title">
            <?php echo $row3['name'] ?>
          </h4>
          <p class="description">Contact:
            <?php echo $row3['phnum'] ?>
          </p>
          <p class="description">
            <?php echo $row3['message'] ?>
          </p>
            <form  action="/seekyourjob/employ/delmessage.php?msgid=<?php echo $row3['slno'] ?>" data-toggle="validator" role="form" method="POST">
              <button type="submit" name="upload" value="upload" class="btn btn-danger btn-lg ms-2">Delete</button>
            </form>
        </div>
        <?php } ?>
      </div>

    </div>
  </section><!-- End Services Section -->

  <?php
  $count1 = mysqli_num_rows($result2);
  if ($count1 == 0) {
  ?>
  <!-- ======= edit Section ======= -->
  <section id="edit" class="services gradient-custom">
    <div class="container">

      <div class="section-title">
        <h2>Fill Up More Details</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row justify-content-center align-items-center ">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-3 text-center">Employee Registration Form</h3>
              <form action="/seekyourjob/employ/edit.php" data-toggle="validator" role="form" method="POST">

                <div class="row form-group">
                  <div class="col-md-6 mb-2">

                    <select class="select form-control-lg" name="age" required>
                      <option value="" disabled>Choose</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                    </select>
                    <label class="form-label select-label">Age</label>

                  </div>
                  <div class="col-md-6 mb-2">

                    <div class="form-outline">
                      <input type="date" id="dob" name="dob" class="form-control form-control-lg" required />
                      <label class="form-label" for="dob">Date Of Birth</label>
                    </div>

                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-sm-6 mb-2">

                    <h6 class="pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Male"
                        checked />
                      <label class="form-check-label" for="femaleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender" value="female" />
                      <label class="form-check-label" for="maleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                  </div>

                  <div class="col-md-6 mb-2 pb-2">

                    <div class="form-outline">
                      <input type="text" id="Address" name="address" class="form-control form-control-lg" required />
                      <label class="form-label" for="Address">Address</label>
                    </div>

                  </div>

                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-2 pb-2">

                    <div class="form-outline">
                      <input type="text" id="description" name="description" class="form-control form-control-lg"
                        required />
                      <label class="form-label" for="description">Describe Myself</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-2 pb-2">

                    <div class="form-outline">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                      <label class="form-label" for="email">Email ID</label>
                    </div>

                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-6 mb-2">

                    <select class="select form-control-lg" name="Nature1">
                      <option value="1" disabled>Location</option>
                      <option value="Honest">Honest</option>
                      <option value="Dedication">Dedicated</option>
                      <option value="Energetic">Energetic</option>
                      <option value="Lazy">Talkative</option>
                    </select>
                    <label class="form-label select-label">Nature 1</label>

                  </div>
                  <div class="col-6 mb-2">

                    <select class="select form-control-lg" name="Nature2">
                      <option value="1" disabled>Branch</option>
                      <option value="Lazy">Lazy</option>
                      <option value="Slow Work">Slow At Work</option>
                      <option value="Observative">Observative</option>
                      <option value="Preservative">Preservative</option>
                    </select>
                    <label class="form-label select-label">Nature 2</label>

                  </div>
                </div>

                <div class="row form-group my-2">
                  <div class="d-flex justify-content-end pt-3">
                    <button type="reset" value="reset" class="btn btn-light btn-lg">Reset all</button>
                    <button type="submit" name="submit_form" value="upload"
                      class="btn btn-primary btn-lg ms-2">Submit</button>
                  </div>
                </div>
                <div class="mt-5">
                  <h6 class="text-center text-danger">
                    <?php
    if (isset($_SESSION['error'])) {
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    }
                    ?>
                  </h6>
                </div>
                <div class="mt-5">
                  <h6 class="text-center text-success">
                    <?php
    if (isset($_SESSION['success'])) {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    }
                    ?>
                  </h6>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End edit Section -->

  <?php } ?>

  <?php
  $query5 = "select * from compstatus where empid='$userid' and status1='On Going'";
  $result5 = mysqli_query($conn, $query5);
  $count5 = mysqli_num_rows($result5);
  $query6 = "select * from compstatus where empid='$userid' and status1='Completed'";
  $result6 = mysqli_query($conn, $query6);
  $count6 = mysqli_num_rows($result6);
  ?>
  <!-- ======= My Works Section ======= -->
  <section id="works" class="services gradient-custom">
    <div class="container">

      <!-- on going works -->
      <div class="row">
        <div class="section-title">
          <h2>On Going Works</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row d-flex h-100">
          <?php
          if ($count5 > 0) {
            while ($row5 = $result5->fetch_assoc()) {
              $comp = $row5['id'];
              $query7 = "select * from regcomp where id='$comp'";
              $result7 = mysqli_query($conn, $query7);
              $row7 = mysqli_fetch_assoc($result7);
          ?>
          <div class="col-sm-6 mb-5">
            <div class="card">
              <img class="card-img-top"
                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row7['pic1']); ?>"
                alt="Card image cap">
              <div class="card-block">
                <h3 class="card-title ms-3">
                  <?php echo $row7["fname"] ?>
                  <?php echo $row7["sname"] ?>
                </h3>
                <p class="card-text ms-3">Description:
                  <?php echo $row7["descrip"] ?>
                </p>
              </div>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">Type:
                  <?php echo $row7["branch"] ?>
                </li>
                <li class="list-group-item">Contact Number:
                  <?php echo $row7["phnum"] ?>
                </li>
                <li class="list-group-item">Posted On:
                  <?php echo $row7["date"] ?>
                </li>
              </ul>
              <div class="card-block mb-3 mt-3 justify-content-center align-items-center">
                <form
                  action="/seekyourjob/employ/compstatusupdate.php?emp=<?php echo $userid ?>&comp=<?php echo $comp ?>"
                  data-toggle="validator" role="form" method="POST">
                  <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Mark As
                    Completed</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
          } else { ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-danger text-center">No Works On going.. <a
                  href="/seekyourjob/employ/employ.php#complaints">Commit One</a></h1>
            </div>
          </div>
        </div>
        <?php
          }
          ?>
      </div>
    </div>
    <!-- Completed works -->
    <div class="row">
      <div class="section-title">
        <h2>Completed Works</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row d-flex h-100">
        <?php
        if ($count6 > 0) {
          while ($row6 = $result6->fetch_assoc()) {
            $comp = $row6['id'];
            $query8 = "select * from regcomp where id='$comp'";
            $result8 = mysqli_query($conn, $query8);
            $row8 = mysqli_fetch_assoc($result8);
        ?>
        <div class="col-sm-6 mb-5">
          <div class="card">
            <img class="card-img-top"
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row8['pic1']); ?>" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title ms-3">
                <?php echo $row8["fname"] ?>
                <?php echo $row8["sname"] ?>
              </h3>
              <p class="card-text ms-3">Description:
                <?php echo $row8["descrip"] ?>
              </p>
            </div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item">Type:
                <?php echo $row8["branch"] ?>
              </li>
              <li class="list-group-item">Contact Number:
                <?php echo $row8["phnum"] ?>
              </li>
              <li class="list-group-item">Posted On:
                <?php echo $row8["date"] ?>
              </li>
            </ul>
            <div class="card-block mb-3 mt-3 justify-content-center align-items-center">
            </div>
          </div>
        </div>
      </div>
      <?php
          }
        } else { ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-danger text-center">You Have No Completed Work..<a
                href="/seekyourjob/employ/employ.php#complaints">Commit One</a></h1>
          </div>
        </div>
      </div>
      <?php
        }
        ?>
    </div>
    </div>


    </div>
  </section><!-- End edit Section -->


</main><!-- End #main -->



<?php
include 'includes/footer.php';
?>