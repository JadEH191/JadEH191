<?php
include('./includes/connect.php');

if(isset($_POST['insert-brand'])){
    $brand_title = $_POST['brand_title'];


    //select data
    $select_query = "Select * from  `brands` where brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number>0){
        echo "<script>alert('This is present inside the databases')</script>";
    }else{


    $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')"; ; 
    $result = mysqli_query($con, $insert_query);

    if($result){
        echo "<script>alert('Brand has been inserted successfully')</script>";
    }
}}

?>
<form action="" method="POST">
<link rel="stylesheet" href="css/insertcat.css">
<div class="input-group">
    <input type="text" class="input" name="brand_title"  placeholder="Insert Brands" autocomplete="off">
    <input class="button--submit" value="Insert" name="insert-brand" type="submit">
</div>
</form>