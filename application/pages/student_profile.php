<?php

    // This File will show types of profiles like 
    // student Profile
    // staff profile

?>


        <?php include("../header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">John Doe</h3>
                    </div>
                </div>
                <!-- end of row -->
               <div class="row border inner-top-20 inner-left-15">
                       <div class="col-md-3">
                       <!-- <img src="../images/profile.jpg" class="img-responsive outer-bottom-20"> -->
                          
                              <div class="row">
                                 <ul class="nav nav nav-pills nav-stacked outer-bottom-20">
                                <li class="active"><a href="#personaldetail" data-toggle="pill">Personal Details</a></li>
                                <li><a href="#academicdetail" data-toggle="pill">Acedemic Details</a></li>
                                <li><a href="#visitordetail" data-toggle="pill">Visitors Details</a></li>
                                <li><a href="#feeandvoucher" data-toggle="pill">Fee & Vouchers &nbsp;&nbsp;</a></li>
                                <li><a href="#accountsetting" data-toggle="pill">Account Settings</a></li>
                                <li><a href="#attendance" data-toggle="pill">Attendance Details</a></li>
                               </ul>
                              </div>
                       </div>
                   <!-- end of profile -->  
                   

                   <div class="col-md-9">

                   <!-- <ul class="nav nav-pills outer-bottom-20">
                          <li class="active"><a href="#personaldetail" data-toggle="pill">Personal Details</a></li>
                          <li><a href="#academicdetail" data-toggle="pill">Acedemic Details</a></li>
                          <li><a href="#visitordetail" data-toggle="pill">Visitors Details</a></li>
                          <li><a href="#feeandvoucher" data-toggle="pill">Fee & Vouchers &nbsp;&nbsp;</a></li>
                          <li><a href="#accountsetting" data-toggle="pill">Account Settings</a></li>
                          <li><a href="#attendance" data-toggle="pill">Attendance</a></li>
                    </ul> -->
                  <!-- end of tab section -->
               <div class="tab-content">
                    <div id="personaldetail" class="tab-pane fade in active">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Personal Details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                            <div class="col-sm-3">
                              <img src="../images/profile.jpg" class="img-responsive outer-bottom-20">
                            </div>
                                  <div class="col-sm-9">
                                    <table class="table">
                                          <tr>
                                            <th>Username</th>
                                            <td>Amm Ai</td>
                                          </tr>
                                          <tr>
                                            <th>Name</th>
                                            <td>imran</td>
                                          </tr>
                                          <tr>
                                            <th>Fathewr Name</th>
                                            <td>Allah Ditta</td>
                                          </tr>
                                          <tr>
                                            <th>DOB</th>
                                            <td>1-1-1993</td>
                                          </tr>
                                          <tr>
                                            <th>CNIC</th>
                                            <td>35040-6986127-3</td>
                                          </tr>
                                          <tr>
                                            <th>E-mail</th>
                                            <td>imranjigr@yahoo.com</td>
                                          </tr>
                                          <tr>
                                            <th>Cell No</th>
                                            <td>0300-9487512</td>
                                          </tr>
                                          <tr>
                                            <th>Resident No</th>
                                            <td>0300-9487512</td>
                                          </tr>
                                          <tr>
                                            <th>Postal Address</th>
                                            <td>131313</td>
                                          </tr>
                                          <tr>
                                            <th>Address</th>
                                            <td>Farroq abad Shiekhupura</td>
                                          </tr>
                                    </table>

                                    </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    </div>
                    <!-- end of personael detail -->

                    <div id="academicdetail" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Acedmic Details
                            </div>
                            <div class="panel-body">
                                    <table class="table">
                                          <tr>
                                            <th>Department</th>
                                            <td>Software Engineering</td>
                                          </tr>
                                          <tr>
                                            <th>Semester</th>
                                            <td>7th</td>
                                          </tr>
                                          <tr>
                                            <th>Degree of Addmission</th>
                                            <td>BS(SE)</td>
                                          </tr>
                                          <tr>
                                            <th>Degree Start Date</th>
                                            <td>1-1-2012</td>
                                          </tr>
                                          <tr>
                                            <th>Degree end Date</th>
                                            <td>1-1-2016</td>
                                          </tr>
                                  </table>
                                <!-- /.table-responsive -->
                            </div>
                        </div>
                    </div>
                            <!-- end of ademic detail -->

                    <div id="visitordetail" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Visitor Details
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                    <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Picture</th>
                                        <th>Relation</th>
                                        <th>CNIC</th>
                                        <th>Cell No</th>
                                        <th>Rights of Visiotr</th>
                                      </tr>
                                      <tr>
                                        <td>112</td>
                                        <td>1-1-1193</td>
                                        <td>1234</td>
                                        <td>7th</td>
                                        <td>1076</td>
                                        <td>Noor</td>
                                      </tr>
                                  </table>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                   </div>
               <!-- end of visitor detail -->
              <div id="feeandvoucher" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fee & Voucher
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <table class="table">
                                      <tr>
                                        <th>SR.</th>
                                        <th>Entry Date</th>
                                        <th>Voucher No</th>
                                        <th>Semester</th>
                                        <th>Roll NO</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Program Tilte</th>
                                        <th>Fee Amount</th>
                                        <th>Paid Amount</th>
                                      </tr>
                                      <tr>
                                        <td>112</td>
                                        <td>1-1-1193</td>
                                        <td>1234</td>
                                        <td>7th</td>
                                        <td>1076</td>
                                        <td>Noor</td>
                                        <td>Akram</td>
                                        <td>SE</td>
                                        <td>3500</td>
                                        <td>3500</td>
                                      </tr>
                                       <tr>
                                        <td>112</td>
                                        <td>1-1-1193</td>
                                        <td>1234</td>
                                        <td>7th</td>
                                        <td>1076</td>
                                        <td>Noor</td>
                                        <td>Akram</td>
                                        <td>SE</td>
                                        <td>3500</td>
                                        <td>3500</td>
                                      </tr>
                              </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
               </div>
               <!-- end of fee and voucher -->
               <div id="accountsetting" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Account Settings
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="col-sm-offset-2 col-sm-8">
                        <form>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" disabled="disabled" value="UserName">
                            </div>
                            <div class="form-group">
                                <input type="text" name="crntpass" class="form-control" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <input type="text" name="newpass" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="text" name="confrmpass" class="form-control" placeholder="Confirm Password">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Change Password">
                        </form>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
               </div>
               </div>
               <!-- end of tab section content -->
               </div>
               <!-- end of row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
