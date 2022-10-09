<?php
include('shared/cheader.php');
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
                <h3>Client Dashboard</h3>
                <ul>
                    <li>
                        <a href="clientadmin.php">Home</a>
                    </li>
                    <li>Client</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->
            <div class="row gutters-20">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="dashboard-summery-one mg-b-20">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="item-icon bg-light-green ">
                                    <i class="flaticon-classmates text-green"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item-content">
                                    <div class="item-title">Students</div>
                                    <div class="item-number"><span class="counter" data-num="1000">1,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-xl-6 col-6-xxxl">
                        <div class="card dashboard-card-five pd-b-20">
                            <div class="card-body pd-b-14">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Status</h3>
                                    </div>
                                </div>
                                <h6 class="traffic-title">Overall Students</h6>
                                <div class="traffic-number">1,000</div>
                                <div class="traffic-bar">
                                    <div class="direct" data-toggle="tooltip" data-placement="top" title="Direct">
                                    </div>
                                    <div class="search" data-toggle="tooltip" data-placement="top" title="Search">
                                    </div>
                                    <div class="referrals" data-toggle="tooltip" data-placement="top" title="Referrals">
                                    </div>
                                    <div class="social" data-toggle="tooltip" data-placement="top" title="Social">
                                    </div>
                                </div>
                                <div class="traffic-table table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="t-title pseudo-bg-Aquamarine">Java</td>
                                                <td>200</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-blue">Tally</td>
                                                <td>200</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-yellow">.Net</td>
                                                <td>200</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-red">PHP</td>
                                                <td>200</td>
                                                <td>25%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6 col-xl-6 col-6-xxxl">
                    <div class="card dashboard-card-six pd-b-20">
                        <div class="card-body">
                            <div class="heading-layout1 mg-b-17">
                                <div class="item-title">
                                    <h3>Notice Board</h3>
                                </div>
                            </div>
                            <div class="notice-box-wrap">
                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">2022</div>
                                    <h6 class="notice-title"><a href="#">200 studnets Completed their certification</a></h6>

                                </div>
                                <div class="notice-list">
                                  <div class="post-date bg-skyblue">2021</div>
                                  <h6 class="notice-title"><a href="#">100 studnets Completed their certification</a></h6>

                                </div>
                                <div class="notice-list">
                                  <div class="post-date bg-skyblue">2020</div>
                                  <h6 class="notice-title"><a href="#">100 studnets Completed their certification</a></h6>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End Here -->

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
