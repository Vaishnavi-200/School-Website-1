<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>VivaTech- login</title>
    <?php 
     include("php_include/head.php")
    ?> 
</head>

<body>
    <!-- ====== Header Top Area ====== --> 
    
    <?php 
     include("php_include/header.php")
    ?>

    <!-- ====== Page Header ====== -->
    <div class="page-header nevy-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Login</h2>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header --> 

    <!-- ====== Page Header ====== -->
    <div class="contact-us-area mr-top-60">
        <div class="container">
           
            <div class="row">
                
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
					
                        <form action="#">
                            <h3 class="from-title">Login</h3>
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <div class="input-content clearfix">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="User ID*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="password*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    
                                   
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Submit" class="submit yellow-button">
                                </div><!-- /.subimt -->
                            </div><!-- /.input-content -->
                        </form>
						
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us -->

    <!-- ====== Map Block ====== -->
    

    <!-- ======footer area======= -->
    <div class="container footer-top-border">
        <div class="vehicle-multi-border yellow-black"></div><!-- /.vehicle-multi-border -->
    </div><!-- /.container -->

    <?php 
     include("php_include/footer.php")
    ?>
       
    <!-- All The JS Files
    ================================================== --> 
  
    <?php 
     include("php_include/all_scripts.php")
    ?>
</body>

</html>