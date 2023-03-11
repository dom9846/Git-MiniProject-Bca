<?php
    include("includes/header.php");
    $comp=$_GET["comp"];
    $query1="select * from regcomp where id='$comp'";
    $query2="select * from compstatus where id='$comp'";
    $result1=mysqli_query($conn,$query1);
    $result2=mysqli_query($conn,$query2);
    $count=mysqli_num_rows($result2);
    $row1 = $result1->fetch_assoc();
    $row2 = $result2->fetch_assoc();
    if($count>0){
      $status=$row2["status1"];
      $emp=$row2['empid'];
      $date=$row2["date"];
      $query3="select * from employtable where id='$emp'";
      $result3=mysqli_query($conn,$query3);
      $row3 = $result3->fetch_assoc();
      $id=$row3["id"];
      $fname=$row3["fname"];
      $sname=$row3["sname"];
    }
    else{
      $status="No one Committed!";
      $id="null";
      $fname="null";
      $sname="";
      $date="null";
    }
    // $emp=$row2['empid'];
    // $query3="select * from employtable where id='$emp'";
    // $result3=mysqli_query($conn,$query3);
    // $row3 = $result3->fetch_assoc();
?> 
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Complaint</a></li>
      <li class="breadcrumb-item active">Status</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="vh-100" id="login">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="card">
          <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['pic1']);?>" alt="Card image cap">
          <div class="card-block">
            <h3 class="card-title ms-3"><?php echo $row1["fname"]?> <?php echo $row1["sname"]?></h3>
            <p class="card-text ms-3">Description:<?php echo $row1["descrip"]?></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">Type:<?php echo $row1["branch"]?></li>
            <li class="list-group-item">Contact Number:<?php echo $row1["phnum"]?></li>
            <li class="list-group-item">Posted On: <?php echo $row1["date"]?></li>
            <li class="list-group-item text-success">Status: <?php echo $status ?></li>
          </ul>
          <div class="card-block mb-3 mt-3 justify-content-center align-items-center">
              <div class="card-body">
                    <h1 class="card-title text-center">Commited by: <?php echo $fname ?><?php echo $sname?></h1>
                    <h2 class="">Employ Id:<?php echo $id ?></h2>
                    <h2 class=""><small class="text-muted">Commited On:<?php echo $date?></small></h2>
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