<?php
   include 'includes/header.php';
?>
<?php
   include("connection/connection.php");
   $query1="select * from employtable where place='Muvattupuzha' and branch='Computer'";
   $query2="select * from employtable where place='Vazhakulam' and branch='Computer'";
   $query3="select * from employtable where place='Thodupuzha' and branch='Computer'";
   $query4="select * from employtable where place='Kothamangalam' and branch='Computer'";
   $item1=$conn->query($query1);
   $item2=$conn->query($query2);
   $item3=$conn->query($query3);
   $item4=$conn->query($query4);
?>


<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#portfolio" class="btn-get-started">Welcome</a>
    </div>
  </section><!-- End Hero Section -->

<main id="main">
    <!-- ======= Employee In Construction ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Employees In Computer Field</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
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

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php while($row = $item1->fetch_assoc()){ ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mvpa">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>NAME:<?php echo $row["fname"]?> <?php echo $row["sname"]?></h4>
              <p>Contact:<?php echo $row["phnum"]?></p>
              <p>ID:<?php echo $row["id"]?></p>
              <h6>Qualification:<?php echo $row["qualification"]?></h6>
              <a href="/seekyourjob/employ/employprofile.php?user=<?php echo $row['id'] ?>" class="preview-link"><i class="bi bi-exclamation-octagon"></i></a>
              <a href="/seekyourjob/files/employmessage.php?set=<?php echo $row['id'] ?>" class="details-link"><i class="bi bi-send-plus"></i></a>
            </div>
          </div>
          <?php } ?>
          
          <?php while($row = $item2->fetch_assoc()){ ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-vklm">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>NAME:<?php echo $row["fname"]?> <?php echo $row["sname"]?></h4>
              <p>Contact:<?php echo $row["phnum"]?></p>
              <p>ID:<?php echo $row["id"]?></p>
              <h6>Qualification:<?php echo $row["qualification"]?></h6>
              <a href="/seekyourjob/employ/employprofile.php?user=<?php echo $row['id'] ?>" class="preview-link"><i class="bi bi-exclamation-octagon"></i></a>
              <a href="/seekyourjob/files/employmessage.php?set=<?php echo $row['id'] ?>" class="details-link"><i class="bi bi-send-plus"></i></a>
            </div>
          </div>
          <?php } ?>
          <?php while($row = $item3->fetch_assoc()){ ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tdpa">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>NAME:<?php echo $row["fname"]?> <?php echo $row["sname"]?></h4>
              <p>Contact:<?php echo $row["phnum"]?></p>
              <p>ID:<?php echo $row["id"]?></p>
              <h6>Qualification:<?php echo $row["qualification"]?></h6>
              <a href="/seekyourjob/employ/employprofile.php?user=<?php echo $row['id'] ?>" class="preview-link"><i class="bi bi-exclamation-octagon"></i></a>
              <a href="/seekyourjob/files/employmessage.php?set=<?php echo $row['id'] ?>" class="details-link"><i class="bi bi-send-plus"></i></a>
            </div>
          </div>
          <?php } ?>
          <?php while($row = $item4->fetch_assoc()){ ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kmlm">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>NAME:<?php echo $row["fname"]?> <?php echo $row["sname"]?></h4>
              <h6>Contact:<?php echo $row["phnum"]?></h6>
              <p>ID:<?php echo $row["id"]?></p>
              <h6>Qualification:<?php echo $row["qualification"]?></h6>
              <a href="/seekyourjob/employ/employprofile.php?user=<?php echo $row['id'] ?>" class="preview-link"><i class="bi bi-exclamation-octagon"></i></a>
              <a href="/seekyourjob/files/employmessage.php?set=<?php echo $row['id'] ?>" class="details-link"><i class="bi bi-send-plus"></i></a>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->


<?php
   include 'includes/footer.php';
?>