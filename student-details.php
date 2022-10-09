<?php   session_start();

include('shared/header.php'); ?>
<div id="wrapper" class="wrapper bg-ash">
    <?php

     if ($_SESSION['um']=="bd")  {
       include('shared/navbarb.php');
     } else if ($_SESSION['um']=="sd")  {
       include('shared/navbars.php');
     } else if ($_SESSION['um']=="cd")  {
       include('shared/navbarsc.php');
     }else {
       include('shared/navbar.php');
     }
     ?>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <?php
        if ($_SESSION['um']=="bd")  {
          include('shared/sidemenb.php');
        } else if ($_SESSION['um']=="sd")  {
          include('shared/sidemenus.php');
        } else if ($_SESSION['um']=="cd")  {
          include('shared/sidemenuc.php');
        }else {
          include('shared/sidemenu.php');
        }

         ?>
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Students Details</h3>
                <ul>
                    <li>
                        <a href="admindashboard.html">Home</a>
                    </li>
                    <li>Students Details</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <div class="card ui-tab-card">
                <div class="card-body">
                    <div class="heading-layout1 mg-b-25">
                        <div class="item-title">
                            <h3>John's Details</h3>
                        </div>
                    </div>
                    <div class="vertical-tab">
                        <ul class="nav nav-tabs flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab10" role="tab" aria-selected="true">Basic Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab11" role="tab" aria-selected="false">Course Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab12" role="tab" aria-selected="false">Payment Info</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab10" role="tabpanel">
                                <div class="single-info-details">
                                    <div class="item-img">
                                        <img src="img/figure/student1.jpg" alt="student">
                                    </div>
                                    <div class="item-content">
                                        <div class="header-inline item-header">
                                            <h3 class="text-dark-medium font-medium">Jessia Rose</h3>
                                            <div class="header-elements">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-edit"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-print"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale
                                            word moun taiery.Aliquam erat volutpaturabiene natis massa sedde sodale
                                            word moun taiery.</p>
                                        <div class="info-table table-responsive">
                                            <table class="table text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td class="font-medium text-dark-medium">Jessia Rose</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender:</td>
                                                        <td class="font-medium text-dark-medium">Female</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Name:</td>
                                                        <td class="font-medium text-dark-medium">Steve Jones</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mother Name:</td>
                                                        <td class="font-medium text-dark-medium">Naomi Rose</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth:</td>
                                                        <td class="font-medium text-dark-medium">07.08.2016</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Religion:</td>
                                                        <td class="font-medium text-dark-medium">Islam</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Occupation:</td>
                                                        <td class="font-medium text-dark-medium">Graphic Designer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail:</td>
                                                        <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Admission Date:</td>
                                                        <td class="font-medium text-dark-medium">07.08.2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Class:</td>
                                                        <td class="font-medium text-dark-medium">2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Section:</td>
                                                        <td class="font-medium text-dark-medium">Pink</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roll:</td>
                                                        <td class="font-medium text-dark-medium">10005</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address:</td>
                                                        <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone:</td>
                                                        <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab11" role="tabpanel">
                                <div class="heading-layout1 mg-b-25">
                                    <div class="item-title">
                                        <h3>DCA</h3>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Staff</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Subject 1</td>
                                                <td>Jack Sparrow </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Inprogress</div>
                                                </td>
                                                <td>02/05/2001</td>
                                                <td>02/05/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Subject 2</td>
                                                <td>Jack Sparrow </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Inprogress</div>
                                                </td>
                                                <td>02/05/2001</td>
                                                <td>02/05/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Subject 3</td>
                                                <td>Jack Sparrow </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Inprogress</div>
                                                </td>
                                                <td>02/05/2001</td>
                                                <td>02/05/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Subject 4</td>
                                                <td>Jack Sparrow </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Inprogress</div>
                                                </td>
                                                <td>02/05/2001</td>
                                                <td>02/05/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Subject 5</td>
                                                <td>Jack Sparrow </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Inprogress</div>
                                                </td>
                                                <td>02/05/2001</td>
                                                <td>02/05/2001</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab12" role="tabpanel">
                                <div class="heading-layout1 mg-b-25">
                                    <div class="item-title">
                                        <h3>DCA Payment</h3>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Payment</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rs.10,000</td>
                                                <td>Cash </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Completed</div>
                                                </td>
                                                <td>02/05/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Rs.10,000</td>
                                                <td>Cash </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Completed</div>
                                                </td>
                                                <td>02/06/2001</td>
                                            </tr>
                                            <tr>
                                                <td>Rs.10,000</td>
                                                <td>- </td>
                                                <td>
                                                    <div class="post-date bg-skyblue">Pending</div>
                                                </td>
                                                <td>02/07/2001</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('shared/copyright.php'); ?>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
<?php include('shared/footer.php'); ?>
