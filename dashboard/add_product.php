<?php
include("base/header.php");

if (isset($_POST['addproduct'])) {
    extract($_POST);

    $image = $_FILES["image"]["name"]; //file name
    $tmpImage = $_FILES["image"]["tmp_name"];  // file/save on temporary location.

    $destination = "uploads/" . $image;  // file path
    $extension = pathinfo($image, PATHINFO_EXTENSION);  // extension info

    if ($extension == "png" || $extension == "jpg" || $extension == "jpeg") {
        if (move_uploaded_file($tmpImage, $destination)) {
            $insert_query = "INSERT INTO products(product_name, product_price, product_stock, product_detail, product_image, product_category) VALUES('$name', $price, $stock, '$detail', '$image', '$category')";

            $result = mysqli_query($conn, $insert_query);
        } else {
            echo "Error";
        }
    }
    else {
        echo "File Format Not Supported";
    }
}

?>

<div class="container-fluid">
    <h1>Add Product</h1>

    <form method="POST" enctype="multipart/form-data">
        <label for="exampleFormControlInput" class="form-label mb-2">Product Name</label>
        <input type="text" class="form-control" name="name">

        <label for="exampleFormControlInput" class="form-label mb-2">Product Category</label>
        <select class="form-control" name="category">
            <option value="---">Select</option>
            <option value="men">MEN</option>
            <option value="women">WOMEN</option>
        </select>

        <label for="exampleFormControlInput" class="form-label mb-2">Product Price</label>
        <input type="number" class="form-control" name="price">

        <label for="exampleFormControlInput" class="form-label mb-2">Product Stock</label>
        <input type="number" class="form-control" name="stock">

        <label for="exampleFormControlInput" class="form-label mb-2">Product Detail</label>
        <textarea name="detail" class="form-control"></textarea>

        <label for="exampleFormControlInput" class="form-label mb-2">Product Image</label>
        <input type="file" class="form-control" name="image">

        <button class="btn btn-primary mt-3" name="addproduct">ADD PRODUCT</button>
    </form>

</div>

<?php
include("base/footer.php");
?>