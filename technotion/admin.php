<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/insert_product.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
            <a href="/technotion/index.php"><img src="css/assets/logo.jpg" alt="logo"></a>
            </span>
            <div class="text header-text">
                <span class="name">TechNotion <br> </span>
                <span class="profession"> <span class="flex"> Turn your <span class="red"> &nbsp; NOTIONS</span></span> 
                <span class="flex"><span> Into <span class="red"> REALITY</span></span> </span> </span>
            </div>
        </div>

        <i class='bx bxs-chevron-right toggle'></i>
    </header>


    <div class="menu-bar">
<div class="menu">
<li class="search-box">
            <i class='bx bx-search icon'></i>
           <input type="text" placeholder="Search....">
</li>
    <ul class="menu-links">
        <li class="nav-link">
            <a href="">
            <i class='bx bxs-home-smile icon'></i>
            <span class="text nav-text"> Dashboard</span>
            </a>
</li>

    
     
        <li class="nav-link">
            <a href="admin.php?insert_products">
            <i class='bx bxs-plus-square icon'></i>
            <span class="text nav-text">Insert Products</span>
            </a>
</li>

        <li class="nav-link">
            <a href="">
            <i class='bx bxs-show icon'></i>
            <span class="text nav-text">View Products</span>
            </a>
</li>

 
        <li class="nav-link">
            <a href="">
            <i class='bx bxs-package icon'></i>
            <span class="text nav-text">All orders</span>
            </a>
</li>
</ul>
<div class="bottom-content">
<li class="nav-link">
            <a href="">
            <i class='bx bx-credit-card icon'></i>
            <span class="text nav-text">All payments</span>
            </a>
</li>
<li class="mode">
    <div class="moon-sun">
    <i class='bx bx-moon icon moon' ></i>
    <i class='bx bx-sun icon sun' ></i>
    </div>
    <span class="mode-text text">
        Dark Mode
    </span>
    <div class="toggle-switch">
        <span class="switch"></span>
    </div>
</div>




</div>
</div>
   </nav>

   <section class="home admin-home">
    <div class="admin-dashboard">
    
    </div>
    
<div class="admin-center">






<div class="product-sidebar">
        <div class="card1">
  <div class="tools">
    <div class="circle">
      <span class="red1 box"></span>
    </div>
    <div class="circle">
      <span class="yellow box"></span>
    </div>
    <div class="circle">
      <span class="green box"></span>
    </div>
  </div>
  <div class="card__content">
    <h1>Admin Nav</h1>
    <div class="my-category">
        <ul>
            <li><a href="admin.php?insert_category">Insert Categories</a></li>
            <li><a href="">View Categories</a></li>
            <li><a href="admin.php?insert_brands">Insert Brand</a></li>
            <li><a href="">View Brands</a></li>
            <li><a href="">List Users</a></li>

        </ul>
    </div>
  </div>
</div>
        </div>
        <div class="admin-content">
<div class="my-admin">
<h1>Admin <span class="red"> Dashboard</span></h1>
<br>
   <?php 
   if(isset($_GET['insert_category'])){
    include("admin/insert_categories.php");
   }
   if(isset($_GET['insert_brands'])){
    include("admin/insert_brands.php");
   }
   if(isset($_GET['insert_products'])){
    include("admin/insert_product.php");
   }
   ?>
</div>
</div>
      </div>
      
      </div>
     
</div>

    
</section>
<script src="admin/insert_img.js"></script>
   <script src="script.js"></script>
</body>
   </html>