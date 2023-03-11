<?php
    session_start();
    include 'includes/header.php';
    include("connection/connection.php");
    $num=$_POST['number'];
    $query1="select * from regcomp where phnum='$num'";
    $result1=$conn->query($query1);
    $row1=mysqli_fetch_assoc($result1);
    $compid=$row1['id'];
    $count1=mysqli_num_rows($result1);
    if($count1>0){
        $query2="select * from compstatus where id='$compid'";
        $result2=mysqli_query($conn,$query2);
        $row2=mysqli_fetch_assoc($result2);
        $count2=mysqli_num_rows($result2);
        if($count2>0){
            $status=$row2['status1'];
            $empid=$row2['empid'];
            $query3="select * from employtable where id='$empid'";
            $result3=mysqli_query($conn,$query3);
            $row3=mysqli_fetch_assoc($result3);
        }else{
            $status="Not Attended";
        } ?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to SeekYourJob</h1>
      <h2>We Are Team Of Entrepreneurs Providng Jobs for Educated Young Bloods</h2>
      <a href="#login" class="btn-get-started">Your Complaint Status</a>
    </div>
</section><!-- End Hero Section -->


<section class="vh-100" id="login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['pic1']);?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h1 class="card-title text-center mt-3 mb-5"><?php echo $row1["branch"]?></h1>
                <h2 class="mb-3">Description:<?php echo $row1["descrip"]?></h2>
                <h2 class="mb-3"><small class="text-muted">Posted On: <?php echo $row1["date"]?></small></h2>
            <?php if($count2>0){ ?>
                <h2 class="text-success">Status:<?php echo $status ?></h2>
            <?php }else{?> 
                <h2 class="text-danger">Status:<?php echo $status ?></h2>
            <?php }?>    
              </div>
              <?php if($count2>0){ ?>
                <div class="card-body">
                    <h1 class="card-title text-center">Commited by: <?php echo $row3["fname"]?> <?php echo $row3["sname"]?></h1>
                    <h2 class="">Employ Id:<?php echo $row3["id"]?></h2>
                    <h2 class=""><small class="text-muted">Commited On:</small></h2>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php        
   include 'includes/footer.php';
    }
    else{ 
        $_SESSION['error']="No Complaints From This Number!";
        header("location:/seekyourjob/files/compstatus.php#check");
    }
?>