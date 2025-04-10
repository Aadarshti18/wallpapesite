<?php
include "db.php";

// Fetch all categories from the database
$sql = "SELECT * FROM category";
$query = mysqli_query($con, $sql);

// Error checking
if (!$query) {
    die("Query failed: " . mysqli_error($con));
}
?>

<?php include "head.php"; ?>

<body>
    <!-- Left Panel -->
    <?php include "sidebar.php"; ?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include "topbar.php"; ?>
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
                            <div class="page-title"></div>
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
                                    <?php
                                    $sn = 1;
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $sn++; ?></th>
                                            <td><?php echo htmlspecialchars($data['category']); ?></td>
                                            <td>
                                                <a href="edit-category.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="delete-category.php?catid=<?php echo $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    // If no categories exist
                                    if (mysqli_num_rows($query) === 0) {
                                        echo "<tr><td colspan='3'>No categories found.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .content -->

        <div class="clearfix"></div>

        <?php include "footer.php"; ?>
    </div>
</body>
</html>
