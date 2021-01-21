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
                        <h2 class="page-header">All Staff Profile</h2>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff Records
                            <a href="staff_registration.php" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper"><div class="row"><div class="col-sm-6"><div id="dataTables-example_length" class="dataTables_length"><label>Show <select class="form-control input-sm" aria-controls="dataTables-example" name="dataTables-example_length"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="dataTables-example_filter"><label>Search:<input aria-controls="dataTables-example" placeholder="" class="form-control input-sm" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr role="row">
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>CNIC</th>
                                            <th>Designation</th>
                                            <th>Actions</th>
                                            
                                                                                  </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="gradeA odd">
                                            <td class="sorting_1">John</td>
                                            <td>Doe</td>
                                            <td>Mon Doe</td>
                                            <td class="center">2493482</td>
                                            <td class="center">Sweeper</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                            </td>
                                    </tr>
                                    <tr role="row" class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                            </td>
                                    </tr>
                                    <tr role="row" class="gradeA odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                            </td>
                                    </tr>
                                      </tbody>
                                </table></div></div><div class="row"><div class="col-sm-6"><div aria-live="polite" role="status" id="dataTables-example_info" class="dataTables_info">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div id="dataTables-example_paginate" class="dataTables_paginate paging_simple_numbers"><ul class="pagination"><li id="dataTables-example_previous" tabindex="0" aria-controls="dataTables-example" class="paginate_button previous disabled"><a href="#">Previous</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button active"><a href="#">1</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">2</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">3</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">4</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">5</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">6</a></li><li id="dataTables-example_next" tabindex="0" aria-controls="dataTables-example" class="paginate_button next"><a href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
