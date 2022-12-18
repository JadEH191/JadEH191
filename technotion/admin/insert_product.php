<?php

include('./includes/connect.php');

if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $description = $_POST['product_description'];
    $keyword = $_POST['product_keyword'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';


    //images
    $product_image = $_FILES['product_image']['name'];
    //tmp name
    $temp_image = $_FILES['product_image']['tmp_name'];
    //check empty condition
    if($product_title == '' or $description == '' or $keyword == ''or $product_category == '' or $product_brand == '' or $product_price == '' or $product_image == '') {
        echo "<script> alert('Please fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image, './product_images/'.$product_image);

        //insert query

        $insert_products = "insert into `products` (product_id, product_title, product_keyword, category_id, brand_id, product_price, stats, product_image) values('$product_title', '$keyword', '$description',  '$product_category', '$product_brand', '$product_price', '$product_status', '$product_image')";
        $result_query = mysqli_query($con, $insert_products);
        if($result_query){
            echo "<script> alert('Successfully inserted the products')</script>";
        }
    }






}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/insert_product.css">
    <title>Document</title>
</head>
<body>
    <div class="insert_product">
        <h1> <span class="red"> </span></h1>
    <form action="" method="post" enctype="multipart/form-data" class="form">

        <div class="basic_info">
            <div class="product_info">
                <!-- Title  -->
                <div class="info-table">
                <label for="product_title">Product keyword</label>
             <input type="text" name="product_title" placeholder="Enter Product keyword" required>
                </div>
  <!-- Description  -->
                <div class="info-table">
                <label for="product_description">Product Description</label>
             <input type="text" name="product_description" placeholder="Enter Product Description">
                </div>
                 <!-- keyword -->
                 <div class="info-table">
                <label for="product_keyword">Product Title</label>
             <input type="text" name="product_keyword" placeholder="Enter Product Title">
                </div>
                 <!-- category -->
                 <div class="info-table">
                <select name="product_category" id="" class="product_category select_category">
                    <option value="">Select Category</option>
                    <?php

                    $select_query = "Select * from `categories`";
                    $result_query = mysqli_query($con, $select_query);
                    while($row = mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo"<option value='$category_id'>$category_title</option>";
                    }

                    ?>
                </select>
                </div>
                    <!-- brands -->
                <div class="info-table">
                <select name="product_brands" id="" class="product_category select_brands">
                    <option value="">Select Brand</option>
                    <?php

$select_query = "Select * from `brands`";
$result_query = mysqli_query($con, $select_query);
while($row = mysqli_fetch_assoc($result_query)){
    $brand_title=$row['brand_title'];
    $brand_id=$row['brand_id'];
    echo"<option value='$brand_id'>$brand_title</option>";
}

?>
                </select>
                </div>

                <div class="info-table">
                <label for="product_price">Price</label>
             <input type="text" name="product_price" placeholder="Enter Product Price" required="required">
                </div>
          
       
        <div class="container">
         <div class="wrapper">
            <div class="image">
               <img src="" alt="" class="img">
            </div>
            <div class="content">
               <div class="icon">
                  <i class="fas fa-cloud-upload-alt"></i>
               </div>
               <div class="text">
                  No file chosen, yet!
               </div>
            </div>
            <div id="cancel-btn">
               <i class="fas fa-times"></i>
            </div>
            <div class="file-name">
               File name here
            </div>
         </div>
         <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
         <input id="default-btn" type="file" hidden required="required" name="product_image">
      </div>

      <br>
      <br>
    
      <div class="info-table submit_button">
             <input type="submit" class="submit" name="insert_product">
                </div>
                

            </div>
            
        </div>

    </div>

</form>


<script src="insert_img.js"></script>
</body>
</html>