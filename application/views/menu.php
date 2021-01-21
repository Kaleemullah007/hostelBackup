<!DOCTYPE HTML>
<html>
<head>
<base href="<?php echo site_url(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Welcom Imperial Dormitary</title>
<!-- Files of Bootstrap-->
<link href="theme/dist/css/menu.css" rel="stylesheet" type="text/css"/>
<link href="theme/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="theme/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

     <div class="container-fluid">
      
         <div class="row">
          
            <div class="col-sm-12">
             <img src="theme/images/logo.png" width="200" class="logo_pic img-responsive">
            </div><!-- End of col-md-3-->
        
         </div><!-- End of row-->   
        
         <div class="row">
            <div class="col-sm-2 col-sm-offset-4 Admin_div">
        
              <a href="staff-login" class="anchorr btn btn-lg btn-info">Staff Login</a>
    
            </div><!-- End of col-md-4 btn_div -->
            
           <div class="col-sm-2 Teacher_div">
    
              <a href="student-login" class="btn btn-lg btn-info anchorr">Student Login</a>
       
            </div><!-- End of col-md-4 btn_div -->
            
            </div><!-- End of row-->
         
      </div><!-- End of Container-fluid -->
      <?php include(APPPATH."views/includes/footer.php"); ?>
</body>
</html>