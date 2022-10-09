<?php
  session_start();
include('shared/header.php');
?>
<div id="wrapper" class="wrapper bg-ash">
    <?php
    include('shared/navbar.php');
    ?>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <?php include('shared/sidemenu.php') ?>
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Students Admission List</h3>
                <ul>
                    <li> <?php if ($_SESSION['um']=="bd")  {  ?> <a href="branchadmin.php">Home</a> <?php    }    else    {     ?>    <a href="admindashboard.php">Home</a>  <?php  }   ?>
                    <li>Admission List</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Admission List</h3>
                        </div>
                    </div>
                    <form class="mg-b-20" action="newadmission.php">
                        <div class="row gutters-8">
                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Enq Roll ..." class="form-control">
                            </div>
                            <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Name ..." class="form-control">
                            </div>
                            <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by Course ..." class="form-control">
                            </div>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="button" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                            </div>
                            <?php
                              if ($_SESSION['um']=="bd")
                              {
                             ?>
                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">Add New</button>
                            </div>
                            <?php
                          }
                             ?>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll">
                                            <label class="form-check-label">Roll</label>
                                        </div>
                                    </th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Branch</th>
                                    <th>Staff</th>
                                    <th>Address</th>
                                    <th>Date Of Admission</th>
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0021</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                    <td>Tambaram</td>
                                    <td>Jack Sparrow </td>
                                    <td>TA-107 Newyork</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0022</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                                    <td>Jessia Rose</td>
                                    <td>Female</td>
                                    <td>DCA</td>
                                    <td>Tambaram</td>
                                    <td>Maria Jamans</td>
                                    <td>59 Australia, Sydney</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0023</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                    <td>Pallavaram</td>
                                    <td>Jack Sparrow </td>
                                    <td>TA-107 Newyork</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0024</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                                    <td>Jessia Rose</td>
                                    <td>Female</td>
                                    <td>DCA</td>
                                    <td>Pallavaram</td>
                                    <td>Maria Jamans</td>
                                    <td>59 Australia, Sydney</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0025</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                  <td>Pallavaram</td>
                                    <td>Jack Sparrow </td>
                                    <td>TA-107 Newyork</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0026</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                                    <td>Jessia Rose</td>
                                    <td>Female</td>
                                    <td>DCA</td>
                                  <td>Pallavaram</td>
                                    <td>Maria Jamans</td>
                                    <td>59 Australia, Sydney</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label">#0027</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                    <td>Pallavaram</td>
                                    <td>Jack Sparrow </td>
                                    <td>TA-107 Newyork</td>
                                    <td>02/05/2001</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Student Table Area End Here -->

            <?php
            include('shared/copyright.php');
            ?>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
<?php
include('shared/footer.php');
?>
