<?php
include('shared/header.php');
?>
<style>
th, td {
border-color: #96D4D4;
}
</style>
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
                <h3>New Bill</h3>
                <ul>
                    <li>
                        <a href="admindashboard.html">Home</a>
                    </li>
                    <li>Bill</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                  <div class="heading-layout1">
                      <div class="item-title">
                          <h3>New Bill Entry</h3>
                      </div>
                  </div>
                    <div class="table-responsive">
                        <table class="table display" border="1">

                            <tbody>
                                  <tr>
                                    <td>Branch Name </td>
                                    <td> Pallavaram </td>
                                    <td>Ent.No</td>
                                    <td><input type="text" class="form-control"></td>
                                  </tr>

                                  <tr>
                                    <td>Bill.No</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td>Bill Date</td>
                                    <td><input type="date"></td>
                                  </tr>

                                  <tr>
                                    <td>Student Name</td>
                                    <td><input type="text" class="form-control" placeholder="Pulled from DB"></td>
                                    <td>Amount</td>
                                    <td>₹<input type="text" class="form-control"></td>

                                  </tr>
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow" style="width:125px">Submit</button>
                              <button type="submit" class="fw-btn-fill btn-gradient-yellow" style="width:125px">Reset</button></td></tr>

                              </table>
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
