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
                

                <div class="col-lg-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Category</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>category</td>
                                        <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger">Delete</button></td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
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