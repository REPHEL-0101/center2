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
                <h3>Customer Course Enquiry</h3>
                <ul>
                    <li>
                        <a href="admindashboard.php">Home</a>
                    </li>
                    <li>Course Enquiry</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>New Enquiry</h3>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table width="80%" border="1" cellpadding="5">
                        <tr>
                          <td>Branch Name </td><td> Pallavaram </td>
                          <td>Enq.No</td><td><input type="text" class="form-control"></td></td>
                        </tr>
                         <tr rold="row">
                            <td>Name</td>
                            <td><input type="text" class="form-control" name="n1" value="" class="form-control" style="height: 21px;" style="height: 21px;"></td>
                                <td>Date</td><td><input type="date"></td>



                         </tr>
                         <tr>
                            <td>Address</td>
                            <td colspan="3">
                            <input type="text" class="form-control" name="n1" value="" style="height: 21px;width:560px">
                         </td>
                         </tr>
                         <tr>
                            <td>Phone1</td>
                            <td><input type="text" class="form-control" name="n1" value="" style="height: 21px;"></td>
                            <td>Email</td>
                            <td><input type="text" class="form-control" name="n1" value="" style="height: 21px;"></td>
                         </tr>
                         <tr>
                            <td>Phone2</td>
                            <td><input type="text" class="form-control" name="n1" value="" style="height: 21px;"></td>
                            <td>Qualification</td>
                            <td><select class="" name="">
                              <option value="" style="height: 21px;">Select</option>
                            <option value="" style="height: 21px;">10TH</option>
                            <option value="" style="height: 21px;">12Th</option>
                            <option value="" style="height: 21px;">BSC</option>
                            <option value="" style="height: 21px;">OTHERS</option></select></td>
                         </tr>
                         <tr>
                            <td class="sorting_1">Father's Name:</td><td><input type="text" class="form-control" name="n1" value="" style="height: 21px;"></td>
                            <td>Gender</td>
                            <td>
                              <select class="" name="">
                               <option value="" style="height: 21px;">Select</option>
                               <option value="">Male</option>
                               <option value="">Female</option>
                             </select>
                            </td>

                         </tr>
                         <tr>
                            <td>Religion</td>
                            <td> <select class="" name="">
                              <option value="" style="height: 21px;">Select</option>
                              <option value="">Hindu</option>
                              <option value="">Christian</option>
                              <option value="">Muslim</option>
                              <option value="">OTHERS</option>
                             </select></td>
                            <td>Community</td>
                            <td>
                            <select class="" name="">
                              <option value="" style="height: 21px;">Select</option>
                              <option value="">BC</option>
                              <option value="">SC</option>
                              <option value="">MBC</option>
                              <option value="">Others</option>
                            </select>
                            </td>
                         </tr>


                             <tr>
                          <td >
                              Course</td>
                              <td colspan="3"><select class="" name="">
                                <option value="" style="height: 21px;">Select</option>
                              <option value="" style="height: 21px;">HDCA Programming</option>
                              <option value="" style="height: 21px;">HDCA Tally</option>
                              <option value="" style="height: 21px;">DCA C&C++</option>
                              <option value="" style="height: 21px;">DCA Python</option>
                              <option value="" style="height: 21px;">DCA Tally</option>
                              <option value="" style="height: 21px;">ADPP</option>
                              <option value="" style="height: 21px;">ADJP</option>
                              <option value="" style="height: 21px;">Python</option>
                              <option value="" style="height: 21px;">DJP</option>
                              <option value="" style="height: 21px;">Tally</option>
                              <option value="" style="height: 21px;">DMO</option>
                            </select>
                          </td>
                        </tr>
                        <tr><td  colspan="4" align="center"><button type="submit" class="fw-btn-fill btn-gradient-yellow" style="width:125px">Submit</button>
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow" style="width:125px">Reset</button></td></tr>

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
