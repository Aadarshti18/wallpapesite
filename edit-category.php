<?php
include "db.php";
$id=$_GET['id'];
$sql="select * from category where id='$id'" ;
$q=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($q);

//exit();
include "head.php" ;
?>

<body>
    <!-- Left Panel -->

   <?php
   include "sidebar.php" ;
   ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php
            include "topbar.php" ;
        ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                  

                    <div class="col-lg-8 offset-2">
                        <div class="card">
                            <div class="card-header">
                                 <strong>Add</strong> Category
                            </div>
                            <div class="card-body card-block">
                                <form action="update-category.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                  
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" value="<?php echo $data['id']; ?>" name='id'>
                                            <input type="text" id="text-input" name="category" value="<?php echo $data['category']; ?>" placeholder="category" class="form-control"><small class="form-text text-muted">This is a product category</small></div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                   
                                    
                                   
                                </form>
                            </div>
                            <div class="card-footer">
                               
                            </div>
                        </div>
                       
                    </div>
                  
                </div>               

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

     <?php
include "footer.php" ;
  ?>