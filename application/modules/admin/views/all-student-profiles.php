<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><?php echo $title; ?></h2>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Records
                            <a href="student-registration" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
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
                                            <th>Reg# No</th>
                                            <th>Actions</th>
                                            
                                                                                  </tr>
                                    </thead>
                                    <tbody>
                                       <?php $serial=0;  
                                       if(count($data)>0)
                                       foreach ($data as $value) {

                                       ?>
                                    <tr role="row" class="gradeA odd">
                                            <td class="sorting_1"><?php echo ++$serial; ?></td>
                                            <td><?php echo $value->staff_name; ?></td>
                                            <td><?php echo $value->staff_father_or_husband; ?></td>
                                            <td class="center"><?php echo $value->staff_cnic; ?></td>
                                            <td class="center"><?php echo $value->staff_name; ?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                            </td>
                                    </tr>
                                     <?php }
                                         else{?>

                                          <tr role="row"><td colspan="6"><h3 class="text-center">No Student Added Yet</h3></td></tr>
                                         <?php 

                                         }
                                       ?>
                                      </tbody>
                                </table></div></div>
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

    <?php include(APPPATH."views/includes/footer.php");?>

</body>

</html>
