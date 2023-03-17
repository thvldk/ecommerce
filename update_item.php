<?php
include_once "db_conn.php";


if(isset($_POST['u_item_id'])){
    $table = "users";
    
    $p_item_id  = $_POST['u_item_id'];
    $p_item_name = $_POST['u_item_name'];
    $p_item_price = $_POST['u_item_price'];
    
    
    $fields = array( 'item_name' => $u_item_name
                   , 'item_price' => $u_item_price
                   );
    $filter = array( 'item_id' => $u_item_id );
    
   
   if( update($conn, $table, $fields, $filter )){
       header("location: index.php?update_item=success");
       exit();
   }
    else{
        header("location: index.php?update_item=failed");
        exit();
    }
 }
?>