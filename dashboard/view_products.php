<?php
include("base/header.php");

if (isset($_POST['findProduct'])) {
    $select_query = "CALL productSearching('$_POST[productName]')";
    $result = mysqli_query($conn, $select_query);
} else {
    $select_query = "SELECT * FROM products";
    $result = mysqli_query($conn, $select_query);
}
?>


<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">My Inventory</h6>

        <form method="POST">
            <input type="text" name="productName">
            <button name="findProduct">  <i class="ri-search-line"></i>  </button>
            <a style="text-decoration: none;" href="view_products.php">  <i class="ri-filter-off-line"></i>   </a>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Detail</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($display = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $display['product_id'];  ?></td>
                            <td><?= $display['product_name'];  ?></td>
                            <td><?= $display['product_category'];  ?></td>
                            <td><?= $display['product_price'];  ?></td>
                            <td><?= $display['product_stock'];  ?></td>
                            <td><?= $display['product_detail'];  ?></td>
                            <td><?= $display['product_image'];  ?></td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include("base/footer.php");
?>