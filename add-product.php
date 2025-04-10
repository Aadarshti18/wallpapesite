<?php
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
                                <strong>Add</strong> Product
                            </div>
                            <div class="card-body card-block">
                                <form action="submit-product.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="p_name" placeholder="product name" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="price" placeholder="price Rs." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9"><textarea class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" name="img"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                        <div class="col-12 col-md-9"><select class="form-control" tabindex="1" name="category">
                                        <option value="" >select category</option>
                                
                                            </select>   
                                    </div>
                                    </div>

                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subcategory</label></div>
                                        <div class="col-12 col-md-9"><select class="form-control" tabindex="1" name="subcategory">
                                        <option value="" >select subcategory</option>
                                
                                            </select>   
                                    </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <button class="btn btn-success">Submit</button>
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