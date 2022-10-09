<?php
include('shared/header.php');
?>
<div id="wrapper" class="wrapper bg-ash">
    <?php
    include('shared/navbarc.php');
    ?>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <?php include('shared/sidemenuc.php') ?>
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Students List</h3>
                <ul>
                    <li>
                        <a href="clientadmin.php">Home</a>
                    </li>
                    <li>Students List</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Students List</h3>
                        </div>
                    </div>
                    <form class="mg-b-20">
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
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                            </div>

                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <label class="form-check-label">Roll</label>
                                        </div>
                                    </th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">#0021</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">#0021</label>
                                        </div>
                                    </td>
                                    <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                    <td>Mark Willy</td>
                                    <td>Male</td>
                                    <td>DCA</td>
                                    <td>+ 123 9988568</td>
                                    <td>kazifahim93@gmail.com</td>

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
