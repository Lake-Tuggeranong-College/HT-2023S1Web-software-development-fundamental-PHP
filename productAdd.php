<?php include "template.php";
/**  @var $conn */
?>
<title>Add Products</title>
<h1 class='text-primary'>Add Products</h1>


    <!-- Front End -->

<?php
// Check to see if User is Administrator (level 1)
// If they are, allow functionality, otherwise redirect them back to the front page.
if ($_SESSION['AccessLevel'] == 1) {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <!--Customer Details-->

                <div class="col-md-6">
                    <h2>Products Details</h2>
                    <p>Product Name<input type="text" name="prodName" class="form-control" required="required"></p>
                    <p>Product Category
                        <input type="text" name="prodCategory" class="form-control" required="required">
                    </p>
                    <p>Quantity<input type="number" name="prodQuantity" class="form-control" required="required"></p>
                </div>
                <div class="col-md-6">
                    <h2>More Details</h2>
                    <!--Product List-->
                    <p>Price<input type="number" step="0.01" name="prodPrice" class="form-control" required="required">
                    </p>
                    <p>Product Code<input type="text" name="prodCode" class="form-control" required="required"></p>
                    <p>Product Picture <input type="file" name="prodImage" class="form-control" required="required"></p>
                </div>
            </div>
        </div>
        <input type="submit" name="formSubmit" value="Submit">
    </form>

    <?php
} else {
    header("location:index.php");
}
?>

<?php
// Back End
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    Customer Details
    $prodName = sanitiseData($_POST['prodName']);
    $prodCategory = sanitiseData($_POST['prodCategory']);
    $prodQuantity = sanitiseData($_POST['prodQuantity']);
    $prodPrice = sanitiseData($_POST['prodPrice']);
    $prodCode = sanitiseData($_POST['prodCode']);

//check if product exists.
    $query = $conn->query("SELECT COUNT(*) FROM Products WHERE code='$prodCode'");
    $data = $query->fetchArray();
    $numberOfProducts = (int)$data[0];

    if ($numberOfProducts > 0) {
        echo "Sorry, product already taken";
    } else {
// Product Registration commences
    }
}
