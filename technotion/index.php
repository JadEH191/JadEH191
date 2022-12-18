<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/hero.css" />
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/product.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

  </head>
  <body>
    <?php
    include("includes/connect.php");
    include("functions/connect_function.php");
    ?>
    <!--

---------Main NavBar-------------------

===================================================================================================
--->
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <a href="/technotion/admin.php"><img src="css/assets/logo.jpg" alt="logo" /></a>
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
    <!--

---------Main NavBar-------------------

=============================================================================================
--->
<!--

---------Home-------------------


--->
    <section class="home">
      <div class="text">
        <div class="hero1">
          <div class="title">
            <h1>Tech<span class="red">Notion</span></h1>
            <p>&nbsp; &nbsp; TURN YOUR IDEAS INTO REALITY</p>
          </div>

          <div class="click">
            <button class="button1">
              <a href="#products"><span>PRODUCTS</span></a>
            </button>
          </div>
        </div>
      </div>
      <hr />
      <div class="products-page" id="products">
        <div class="greet">
          <div class="greet-logo">
            <div class="logo">
              <img src="css/assets/logo-1.jpg" alt="" />
            </div>
          </div>
          <div class="greet-text">
            <h1>Products</h1>
            <p>Looking for the best gadgets you can own?</p>
          </div>
        </div>
 <!--

---------Home-------------------

=====================================================================================================================
--->


<!--

---------Products-------------------

==========================================================================================================================================
--->
<!--

---------Row 1-------------------


--->
        <div class="product-content">
        <div class="my-products">
            <div class="product-row1">
               <?php
               featureproducts();
               ?>
            </div>
        </div>

<!--

---------Products-------------------

==============================================================================================
--->

<!--

---------sidebar for products-------------------

==============================================================================================
--->

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
    <h1>Categories</h1>
    <div class="my-category">
        <ul>
        <?php 
       
        getcategory();
        
        
        ?>
        </ul>
    </div>
    <div class="my-category">
        <br>
        <h1>Products</h1>
        <ul>
        <?php 
       getbrands();
        
        
        ?>
        </ul>
    </div>
  </div>
</div>
        </div>
      </div>
      </div>
     
  <!--

---------End of content-------------------


--->    
    </section>
    <div class="notifs">
     <a href="/technotion/product.php" style="
  color: var(--black);
  text-decoration: none;
"> <i class="bx bx-shopping-bag notif"></i></a>
      <i class="bx bx-cart my-cart notif"></i>
    </div>
    <script src="script.js"></script>
  </body>
</html>
