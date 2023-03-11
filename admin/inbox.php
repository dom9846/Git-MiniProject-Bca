<?php
     include("includes/header.php");
     include("connection/connection.php");
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Inbox</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

    
        <!-- Sales Card -->
            <div class="col-xxl-12 col-md-6">
              <div class="card info-card sales-card">
              <?php
                $query="select * from adm_message order by date desc";
                $result=mysqli_query($conn,$query);
                while($row = $result->fetch_assoc()){
              ?>
                <div class="card-body" id="message">
                  <h5 class="card-title">Message <span>| <?php echo $row['date'] ?></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="mb-3 text-primary"><?php echo $row['name'] ?></h6>
                      <h6 class="mb-2"><?php echo $row['phnum'] ?></h6>
                      <h6 class="mb-2">Subject :<?php echo $row['subject'] ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $row['message'] ?></span>
                    </div>
                    <div>
                    <form  action="/seekyourjob/admin/delmessage.php?msgid=<?php echo $row['slno'] ?>" data-toggle="validator" role="form" method="POST">
                      <button type="submit" name="upload" value="upload" class="btn btn-danger btn-lg ms-2">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
            </div><!-- End Sales Card -->
        </div>
    </section>

</main><!-- End #main -->


<?php
     include("includes/footer.php");
?>