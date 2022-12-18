<?php

include('./includes/connect.php');
$conn = $con;

function getproduct(){
  global $conn;

//   if(!isset($_GET('category'))){
//  if(!isset($_GET('brands'))){
    $select_query="SELECT * FROM `products` order by rand() LIMIT 0,9";
    $result_query=mysqli_query($conn, $select_query);
   // $row = mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_keyword = $row['product_keyword'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='card'>
        <div class='card-image'>
          <img src='product_images/$product_image' alt='...' />
          <i class='bx bx-star'></i>

        </div>
        <div class='card-content'>
        <div class='product__details'>
          <h3>$product_title</h3>
          <span>$product_price</span>
        </div>
          <p>$product_keyword</p>
          <button class='add-to-cart'>Add To Cart</button>
        </div>
      </div>";
    }
}
// ---

function getbrands(){
  global $con;
  $select_brands = "Select * from `brands`";
  $result_brands = mysqli_query($con, $select_brands);

  while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title = $row_data['brand_title'];
      $brand_id = $row_data['brand_id'];
      echo "<li class='brands_list' style='list-style: none;'>
      <a style='text-decoration: none; color: var(--black);'href='index.php?brand=$brand_id' class='brands_links'>$brand_title</a></li>";
  }
}

function getcategory(){
  global $con;
  $select_category = "Select * from `categories`";
  $result_category = mysqli_query($con, $select_category);

  while($row_data=mysqli_fetch_assoc($result_category)){
      $category_title = $row_data['category_title'];
      $category_id = $row_data['category_id'];
      echo "<li class='brands_list' style='list-style: none;'>
      <a style='text-decoration: none; color: var(--black);'href='index.php?brand=$category_id' class='brands_links'>$category_title</a></li>";
  }
}

function featureproducts(){
  global $con;
  $select_query="SELECT * FROM `products` order by rand() LIMIT 0,9";
  $result_query=mysqli_query($con, $select_query);
 // $row = mysqli_fetch_assoc($result_query);
  //echo $row['product_title'];
  while($row=mysqli_fetch_assoc($result_query)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_keyword = $row['product_keyword'];
      $product_image = $row['product_image'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "<div class='card'>
      <div class='card-img' style=''> <img style= 'height: 100%;
      width: 100%; object-fit: cover;'src='product_images/$product_image' alt='...' /></div>
      <div class='card-info'>
        <p class='text-title'>$product_title</p>
        <p class='text-body'>$product_keyword</p>
      </div>
      <div class='card-footer'>
      <span class='text-title'>$product_price</span>
      <div class='card-button'>
        <svg class='svg-icon' viewBox='0 0 20 20'>
          <path d='M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z'></path>
          <path d='M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z'></path>
          <path d='M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z'></path>
        </svg>
      </div>
    </div></div>";
  }
}
?>