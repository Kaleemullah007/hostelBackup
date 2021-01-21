<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Student Registration</h1>
                    </div>
                </div>
                <!-- end of student-registration heading -->
                <div class="row">
                <div class="row form-group">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#step-1" class="deactive">
                                <h4 class="list-group-item-heading">Step 1</h4>
                                <p class="list-group-item-text">General Detail</p>
                            </a></li>
                            <li class="disabled"><a href="#step-2" class="deactive">
                                <h4 class="list-group-item-heading">Step 2</h4>
                                <p class="list-group-item-text">Academic Detial</p>
                            </a></li>
                            <li class="disabled"><a href="#step-3" class="deactive">
                                <h4 class="list-group-item-heading">Step 3</h4>
                                <p class="list-group-item-text">Accomodation Detail</p>
                            </a></li>
                            <li class="disabled"><a href="#step-4" class="deactive">
                                <h4 class="list-group-item-heading">Step 4</h4>
                                <p class="list-group-item-text">Parents/Guradian Detail</p>
                            </a></li>
                            <li class="disabled"><a href="#step-5" class="deactive">
                                <h4 class="list-group-item-heading">Step 5</h4>
                                <p class="list-group-item-text">visitors Detail</p>
                            </a></li>
                            <li class="disabled"><a href="#step-6" class="deactive">
                                <h4 class="list-group-item-heading">Step 6</h4>
                                <p class="list-group-item-text">Emergency Cntact</p>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <!-- end of button with steps1 step2..... -->
                <div class="row">
                <form>
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Father Name:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Emial:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Cell No:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Resident No:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Address:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Postal Address:</label><input type="text" class="form-control"></div></div>
                            </div>
                              <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">DOB:</label><input type="date" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Gender:</label><select class="form-control"><option value="male">Male</option><option value="female">Female</option></select></div></div>
                               <!--  <div class="col-md-6">
                                <div class="form-group"><label class="pull-left">Gender:</label><br><div class="btn-radio form-control"><input type="radio" name="sex" class="pull-left"><span class="pull-left">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" class="pull-left">&nbsp;&nbsp;<span class="pull-left">&nbsp;&nbsp;Female</span></div></div>
                                </div> -->
                            </div>
                            <div class="row">
                            <div class="col-md-6"><div class="form-group"><label class="pull-left">Scanned CNIC:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            <div class="col-md-6"><div class="form-group"><label class="pull-left">Picture:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            </div>

                            <button id="activate-step-2" class="btn btn-primary pull-right">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Department:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Degree:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Degree start date</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Degree end date:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Semester:</label><input type="text" class="form-control"></div></div> 
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Scanned admission letter:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            </div>
                            <button id="activate-step-3" class="btn btn-primary pull-right">Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Admission Date:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Applied for:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <button id="activate-step-4" class="btn btn-primary pull-right">Next</button>
                        </div>
                    </div>
                </div>


                <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Parents/Guradian Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Cell No:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Resident No:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Address</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Postal Address:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Saanned CNIC:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            </div>
                            <button id="activate-step-5" class="btn btn-primary pull-right">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">
                        <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Visitor Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Relation:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Cell No:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Right of Visitor</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Saanned CNIC:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                                <!-- <div class="col-md-6"><label class="pull-left">Right of Visitor</label><span class="btn btn-primary file-type"><input type="file"></span></div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Picture:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            </div>
                            <!-- <input type="submit" value="Submit" class="btn btn-primary pull-right"> -->
                            <button id="activate-step-6" class="btn btn-primary pull-right">Next</button>
                        </div>
                    </div>
                </div>
                      <div class="row setup-content" id="step-6">
                    <div class="col-xs-12">
                        <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Relation:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Cell No:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Residence No</label><input type="text" class="form-control"></div></div>                                <!-- <div class="col-md-6"><label class="pull-left">Right of Visitor</label><span class="btn btn-primary file-type"><input type="file"></span></div> -->
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Picture:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary pull-right">
                            <!-- <button id="activate-step-5" class="btn btn-primary btn-lg">Next</button> -->
                        </div>
                    </div>
                </div>
                </form>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include(APPPATH."views/includes/footer.php");?>
</body>
</html>
