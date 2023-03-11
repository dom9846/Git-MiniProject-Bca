<?php
     include("includes/header.php");
     include("connection/connection.php")
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Employees</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Employees</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Place</th>
                        <th scope="col">Date Of Join</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query="select * from employtable";
                            $result=mysqli_query($conn,$query);
                        ?>    
                      <?php while($row = $result->fetch_assoc()){ ?>
                      <tr>
                        <th scope="row"><a href="/seekyourjob/admin/empprofile.php?emp=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a></th>
                        <td> <?php echo $row['fname'] ?> <?php echo $row['sname'] ?> </td>
                        <td><?php echo $row['phnum'] ?></td>
                        <td><?php echo $row['qualification'] ?></td>
                        <td><?php echo $row['branch'] ?></td>
                        <td><?php echo $row['place'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td>
                          <form  action="/seekyourjob/admin/delcomplaint.php?empid=<?php echo $row['id'] ?>&check=1" data-toggle="validator" role="form" method="POST">
                            <button type="submit" name="upload" value="upload" class="btn btn-primary btn-lg ms-2">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



        </div>
    </section>

</main><!-- End #main -->


<?php
     include("includes/footer.php");
?>