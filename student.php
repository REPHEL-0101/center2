<?php
include('shared/header.php');
?>
<div id="wrapper" class="wrapper bg-ash">
    <?php
    include('shared/navbars.php');
    ?>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <?php include('shared/sidemenus.php') ?>
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Arun Kumar</h3>
                <ul>
                    <li>
                        <a href="studnet.php">Home</a>
                    </li>
                    <li>Branch : Pallavaram , Course : DCA  </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Dashboard summery Start Here -->

            <!-- Dashboard summery End Here -->
            <!-- Dashboard Content Start Here -->
            <div class="row gutters-20">


                <div class="col-lg-6 col-xl-6 col-6-xxxl">
                        <div class="card dashboard-card-five pd-b-20">
                            <div class="card-body pd-b-14">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Course Details</h3>
                                    </div>
                                </div>


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
                                                <td class="t-title pseudo-bg-Aquamarine">MS-Office</td>
                                                <td>B</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-blue">Tally</td>
                                                <td>B</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-yellow">Adv.Excel</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td class="t-title pseudo-bg-red">Project</td>
                                                <td>A</td>

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
                                    <div class="post-date bg-skyblue">16 June, 2021</div>
                                    <h6 class="notice-title"><a href="#">MS-Office Completed.</a></h6>
                                </div>
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">16 July, 2021</div>
                                    <h6 class="notice-title"><a href="#">Tally Completed.</a></h6>
                                </div>

                                <div class="notice-list">
                                    <div class="post-date bg-skyblue">16 Aug, 2019</div>
                                    <h6 class="notice-title"><a href="#">Adv.Excel Completed
                                            printing.</a></h6>
                                    <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
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
