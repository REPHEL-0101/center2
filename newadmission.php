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
                <h3>Customer Admission</h3>
                <ul>
                    <li>
                        <a href="admindashboard.html">Home</a>
                    </li>
                    <li>Course Admission</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                  <div class="heading-layout1">
                      <div class="item-title">
                          <h3>New Admission</h3>
                      </div>
                  </div>
                    <div class="table-responsive">
                        <table class="table display" border="1">

                            <tbody>
                                  <tr>
                                    <td>Branch Name </td><td colspan="3"> Pallavaram </td>
                                  </tr>

                                  <tr>
                                    <td>Ent.No</td>
                                    <td><input type="text" class="form-control"></td>
                                    <td>Admission Date</td>
                                    <td><input type="date"></td>
                                  </tr>

                                <tr rold="row">

                                    <td>Course Name  </td> <td><select class="" name="">
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
                                  </td></td>
                              <td>Session </td><td><input type="text" class="form-control"></td>
                            </tr>
                              <tr><td>Name Mr. /Ms.    </td><td><input type="text" class="form-control"></td><td>Farther's/ Husband's Name  </td><td><input type="text" class="form-control" ></td></tr>
                              <tr><td>Occupation of father/guardian   </td>
                                <td><select>
                                  <option value="" style="height: 21px;">Select</option>
                                    <option>Accountant</option><option>Actor</option><option>Actress</option>
                                    <option>Advocate</option><option>Agent</option><option>Architect</option><option>Artist</option>
                                    <option>Auctioneer</option><option>Author</option><option>Baker</option><option>Barber</option>
                                    <option>Betel Seller</option><option>Blacksmith</option><option>Boatman</option>
                                    <option>Book Binder</option><option>Broker</option><option>Bus driver</option>
                                    <option>Butcher</option><option>Butler</option><option>Carpenter</option><option>Cashier</option><option>Chauffeur</option><option>Chemist</option><option>Cleaner</option><option>Clerk</option><option>Coachman</option><option>Cobbler</option><option>Collector</option><option>Compositor</option><option>Compounder</option><option>Conductor</option>
                                    <option>Confectioner</option><option>Constable</option><option>Contractor</option><option>Cook</option>
                                    </select>

                                </td>
                                <td>Date of Birth </td>
                                <td><input type="date"></td></tr>
                              <tr><td>Educational Qualification    </td>
                                <td>
                                  <select class="" name="">
                                    <option value="" style="height: 21px;">Select</option>
                                  <option value="" style="height: 21px;">10TH</option>
                                  <option value="" style="height: 21px;">12Th</option>
                                  <option value="" style="height: 21px;">BSC</option>
                                  <option value="" style="height: 21px;">OTHERS</option></select>
                                </td> <td>Community & Religion     </td><td>
                                  <select class="" name="">
                                    <option value="" style="height: 21px;">Select</option>
                                    <option value="">BC</option>
                                    <option value="">SC</option>
                                    <option value="">MBC</option>
                                    <option value="">Others</option>
                                  </select>
                                  <select class="" name="">
                                    <option value="" style="height: 21px;">Select</option>
                                   <option value="">Hindu</option>
                                   <option value="">Christian</option>
                                   <option value="">Muslim</option>
                                   <option value="">OTHERS</option>
                                  </select>
                                </td>


                           </tr>


                              <tr><td>Occupation    :</td>
                                <td>
                                  <select class="" name="">
                                    <option value="" style="height: 21px;">Select</option>
                                    <option value="">Student</option>
                                      <option value="">House Wife</option>
                                        <option value="">Employed</option>
                                          <option value="">Un-employed</option>
                                      <option value="">Business</option>
                                  </select>
                                </td>
                            <td>Aadhar Card No.      </td><td><input type="text" class="form-control"></td></tr>
                              <tr><td>If Employed, Company Name</td><td><input type="test" class="form-control"></td> <td>Address for Communication</td><td><input type="text" class="form-control"></td></tr>
                              <tr><td>Telephone/ Mobile No</td>
                                <td><input type="text" class="form-control" class="form-control"></td>
                                 <td>Email ID </td><td><input type="test" class="form-control"></td> </tr>
                              <tr><td  colspan="4" align="center">
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
