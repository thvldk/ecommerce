<?php

if(isset($_GET['item_id'])){
    $item_id  = $_GET['item_id'];
    $item_name = $_GET['item_name'];
    $item_price = $_GET['item_price'];

}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post" action="update_item.php">
                    <div class="mb-3">
                       <label for="">Products</label>
                        <input type="text" hidden name="u_itemid" value="<?php echo $user_id; ?>" class="form-control">
                        <input type="text" name="u_item_name" value="<?php echo $item_name; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                       <label for="">Item Price</label>
                        <input type="input" name="u_item_price" value="<?php echo $item_price; ?>" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
                
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>