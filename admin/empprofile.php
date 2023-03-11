<?php
    include("includes/header.php");
    $employ=$_GET["emp"];
    $query1="select * from employtable where id='$employ'";
    $query2="select * from emp_details where id='$employ'";
    $result1=mysqli_query($conn,$query1);
    $result2=mysqli_query($conn,$query2);
    $count=mysqli_num_rows($result2);
    $row1 = $result1->fetch_assoc();
    $row2 = $result2->fetch_assoc();
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


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Employees</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color"> <?php echo $row1['fname'] ?> <?php echo $row1['sname'] ?> </h3>
                            <h6 class="theme-color lead"><?php echo $row['username']?>,<?php echo $gender ?></h6>
                            <p><mark><?php echo $nature1 ?> &amp;<?php echo $nature2 ?></mark> | <?php echo $descrip ?></p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Joined On</label>
                                        <p><?php echo $row1['date']?></p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p><?php echo $age?></p>
                                    </div>
                                    <div class="media">
                                        <label>Place</label>
                                        <p><?php echo $row1['place']?>,Ernakulam</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p><?php echo $addre ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p><?php echo $email?></p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p><?php echo $row1['phnum']?></p>
                                    </div>
                                    <div class="media">
                                        <label>Qualification</label>
                                        <p><?php echo $row1['qualification']?></p>
                                    </div>
                                    <div class="media">
                                        <label>DOB</label>
                                        <p><?php echo $dob ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['picture']);?>" title="" alt="">
                        </div>
                    </div>
                </div>
                <?php
                    $que1="select * from compstatus where empid='$employ'";
                    $que2="select * from compstatus where empid='$employ' and status1='Completed'";
                    $que3="select * from compstatus where empid='$employ' and status1='On Going'";
                    $res1=mysqli_query($conn,$que1);
                    $res2=mysqli_query($conn,$que2);
                    $res3=mysqli_query($conn,$que3);
                    $cou1=mysqli_num_rows($res1);
                    $cou2=mysqli_num_rows($res2);
                    $cou3=mysqli_num_rows($res3);
                ?>
                <div class="counter mt-5">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500"><?php echo $cou1 ?></h6>
                                <p class="m-0px font-w-600">Total Projects</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150"><?php echo $cou2 ?></h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190"><?php echo $cou3 ?></h6>
                                <p class="m-0px font-w-600">Project Ongoing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse mt-5">
                    <div class="col-lg-6">
                        <h4 class="text-center text-success mb-3">Course Certificate</h4>
                        <div class="about-avatar ms-2 me-2">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['certificate']);?>" title="" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="text-center text-success mb-3">Identification|Aadhar</h4>
                        <div class="about-avatar ms-2 me-2">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['adhar']);?>" title="" alt="">
                        </div>
                    </div>
            </div>
    </section>

</main><!-- End #main -->


<?php
    include("includes/footer.php");
?>