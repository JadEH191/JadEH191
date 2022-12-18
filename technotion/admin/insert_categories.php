<?php
include('./includes/connect.php');

if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];


    //select data
    $select_query = "Select * from  `categories` where category_title = '$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number>0){
        echo "<script>alert('This is present inside the databases')</script>";
    }else{


    $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')"; ; 
    $result = mysqli_query($con, $insert_query);

    if($result){
        echo "<script>alert('Category has been inserted successfully')</script>";
    }
}}

?>
<form action="" method="POST">
<link rel="stylesheet" href="css/insertcat.css">
<div class="input-group">
    <input type="text" class="input" id="Email" name="cat_title" placeholder="Insert Categories" autocomplete="off">
    <input class="button--submit" value="Insert" type="submit" name="insert_cat">
</div>
</form>