<html>
<?php include_once "db_conn.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>New Product</h3>

                 <?php
if(isset($_GET['new_item'])){
        switch($_GET['new_item']){
            case "added": echo "<div class='alert alert-success'>Product Added.</div>";
                  break;
            case "failed":  echo "<div class='alert alert-danger'>Product Not Added</div>";
                  break;
        }
    }
?>

<form action="newproduct.php" method="POST">
  <div class="mb-4">
    <label for="new_item_name" class="form-label">Item Name</label>
    <input type="text" id="new_item_name" name="new_item_name" class="form-control" required>
  </div>
  <div class="mb-4">
    <label for="new_item_price" class="form-label">Item Price</label>
    <input type="number" id="new_item_price" name="new_item_price" class="form-control" required>
  </div>
  <input type="submit" value="Add Product" class="btn btn-primary">
</form>
 <div class="col-8">
               <h3>Update Product</h3>
               <?php
    $productList = query($conn, "SELECT item_id, item_name, item_price FROM products");
    
    echo "<hr>";
    if (isset($_GET['update_status'])) {
        switch ($_GET['update_status']) {
            case "success":
                echo "<div class='alert alert-success'>Product updated.</div>";
                break;
            case "failed":
                echo "<div class='alert alert-danger'>Product failed to be updated.</div>";
                break;
        }
    }
    echo "<hr>";
    
    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<th>Item Name</th>";
    echo "<th>Item Price</th>";
    echo "<th>Action</th>";
    echo "</thead>";
    foreach ($productList as $key => $row) {
        echo "<tr>";
        echo "<td>" . $row['item_name'] . "</td>";
        echo "<td>" . $row['item_price'] . "</td>";
        echo "<td> <a class='btn btn-success' href='submit_item.php?product_id=" . $row['item_id'] . "' > Update </a> </td>";
        echo "<td> <a class='btn btn-danger' href='delete.php?item_id=" . $row['item_id'] . "' > Delete </a> </td>";
        echo "</tr>";
    }
    echo "</table>";

?>

   </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>