<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Turn your ideas into REALITY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BoxIcons v2.1.2 -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Montserrat Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="product_style.css" />

    <?php
    include("includes/connect.php");
    include("functions/connect_function.php");

    
    ?>
  </head>

  <body class="body">
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <a href="/technotion/admin.php"
              ><img src="css/assets/logo.jpg" alt="logo"
            /></a>
          </span>
          <div class="text header-text">
            <span class="name">TechNotion <br /> </span>
            <span class="profession">
              <span class="flex">
                Turn your <span class="red"> &nbsp; NOTIONS</span></span
              >
              <span class="flex"
                ><span> Into <span class="red"> REALITY</span></span>
              </span>
            </span>
          </div>
        </div>

        <i class="bx bxs-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="text" placeholder="Search...." />
          </li>
          <ul class="menu-links">
            <li class="nav-link">
              <a href="">
                <i class="bx bxs-home-smile icon"></i>
                <span class="text nav-text"> Dashboard</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="">
                <i class="bx bx-news icon"></i>
                <span class="text nav-text">Blogs</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="">
                <i class="bx bxs-contact icon"></i>
                <span class="text nav-text">Contact Us</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="">
                <i class="bx bx-user icon"></i>
                <span class="text nav-text">About Us</span>
              </a>
            </li>
          </ul>
          <div class="bottom-content">
            <li class="nav-link">
              <a href="">
                <i class="bx bx-log-out icon"></i>
                <span class="text nav-text">Log Out</span>
              </a>
            </li>
            <li class="mode">
              <div class="moon-sun">
                <i class="bx bx-moon icon moon"></i>
                <i class="bx bx-sun icon sun"></i>
              </div>
              <span class="mode-text text"> Dark Mode</span>
              <div class="toggle-switch">
                <span class="switch"></span>
              </div>
            </li>
          </div>
        </div>
      </div>
    </nav>

  
    <section class="home">
 
      <div class="container">
      <?php
      getproduct();
//     $select_query="Select * from `products`";
//     $result_query=mysqli_query($con, $select_query);
//    // $row = mysqli_fetch_assoc($result_query);
//     //echo $row['product_title'];
//     while($row=mysqli_fetch_assoc($result_query)){
//         $product_id = $row['product_id'];
//         $product_title = $row['product_title'];
//         $product_keyword = $row['product_keyword'];
//         $product_image = $row['product_image'];
//         $product_price = $row['product_price'];
//         $category_id = $row['category_id'];
//         $brand_id = $row['brand_id'];
//         echo "<div class='card'>
//         <div class='card-image'>
//           <img src='product_images/$product_image' alt='...' />
//           <i class='bx bx-star'></i>

//         </div>
//         <div class='card-content'>
//         <div class='product__details'>
//           <h3>$product_title</h3>
//           <span>$product_price</span>
//         </div>
//           <p>$product_keyword</p>
//           <button class='add-to-cart'>Add To Cart</button>
//         </div>
//       </div>";
//     }
?>
       
      </div>
    </section>


    <script src="script.js"></script>
  </body>
</html>
