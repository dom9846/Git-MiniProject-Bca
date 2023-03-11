<?php
    include("includes/header.php");
?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img class="rounded-5 mb-5 mt-5 w-50 h-50" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['picture']);?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?php echo $row['fname']?> <?php echo $row['sname']?></h5>
              <p><?php echo $row['designation']?></p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6><?php echo $row['username']?></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $row['email']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo $row['phnum']?></p>
                  </div>
                </div>
                <h6>About</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted"><?php echo $row['age']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Status</h6>
                    <p class="text-muted"><h6 class="text-success">online</h6></p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        </div>
    </section>

</main><!-- End #main -->


<?php
    include("includes/footer.php");
?>

