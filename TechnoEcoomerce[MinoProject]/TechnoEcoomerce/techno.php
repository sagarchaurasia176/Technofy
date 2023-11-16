<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technokarts</title>
    <!-- bootsrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- favicon  -->
    <link rel="shortcut icon" href="shopping-cart-shopping.gif" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="techno.css">

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- owl carousel  -->
<link rel="stylesheet" href="owl.carousel.min.css">
<link rel="stylesheet" href="owl.theme.green.css">
<link rel="stylesheet" href="owl.theme.default.min.css">
<!-- aos lib -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- swipper js lib -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


    <!-- jquery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

<div class="pre-loader">
    <div class="pre-loader-box">
      <div class="loader-logo"><img src="shopping-cart-shopping.gif" alt="" width="180px"></div>
      <div class='loader-progress' id="progress_div">
        <div class='bar' id='bar1'></div>
      </div>
      <div class='percent' id='percent1'>0%</div>
      <div class="loading-text">
        Loading...
      </div>
    </div>
  </div>

    <!-- header sections -->
    <nav class="navbar navbar-expand-lg bg-white p-md-3" style="box-shadow:
            rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="container-fluid">
            <span><img src="shopping-cart-shopping.gif"> Technokart</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-acuto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/TechnoEcoomerce/techno.php#" target="_blank">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#shop">Top Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mobile" target="_blank">Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#http://localhost/TechnoEcoomerce/laptop%20html/laptop.php>Computer">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#customer">Social Links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/TechnoEcoomerce/Fashion/Fashion.php" target="_blank">Beauty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#last">Sell</a>
                    </li>
                </ul>
                <!-- nex -->


            </div>
            <button type="button" class="btn btn-close-black" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="border: none;">
                <i class="fa-regular fa-user"></i>
                <i class="fa-solid fa-cart-shopping"><sub>0</sub></i>
            </button>
 
            <!-- Modal -->
          
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 300px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="shopping-cart-shopping.gif"/>TechnoKart</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="form.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
              </div>
              <input type="submit" value="Login" name="login" style="background-color: rgb(255, 255, 255); color:rgb(36, 0, 240); padding:6px; border-radius:12px;">
                  </div>
                </label>
              </div>
            </form>
      </div>
      
    </div>
  </div>
</div>
        </div>
    </nav><br>
    <!-- sticky navbar -->
    <div id="header">
        <!-- button -->
        <button class="btn btn-white" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i
                class="fa-solid fa-bars"></i></button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><img src="shopping-cart-shopping.gif"
                        width="25px">
                    <emp>TechnoKart</emp>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <!------     user data filed      --->
            <ol class="list-group list-group-numbered" style="margin-left: -25px;">
  <li class="list-group-item d-flex justify-content-between align-items-start p-4">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Technokart</div>
      Content for list item
    </div>
    <!-- <span class="badge bg-primary rounded-pill"></span> -->
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="#last">All Products</a></div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="#shop">Top Deals</a></div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="needhelp.php" target="_blank">Need Help</a></div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"> <a href="order.php" target="_blank">Your Order</a></div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="addtocart.php" target="_blank">Add to cart</a></div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Product Enquiry</div>
      Content for list item
</div>
<span class="badge bg-primary rounded-pill">0</span>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Feddback</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">0</span>
  </li>
</ol>
<br><br>
<div class="dot" style="margin-left: 80px;">
  <span style="text-align: center; border:2px dotted orange; font-size:16px; padding:5px;">Download Technokart</span>
</div>
<br><br>
<!-- download app  -->

<span style="background-color:aliceblue; padding:12px;">Google Play Store
<i class="fa-brands fa-google-play"></i>
</span>
<span style="background-color:aliceblue; padding:12px;">App Store
<i class="fa-brands fa-apple"></i>
</span>

            </div>
        </div>
        <ul id="navbar"  data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <li><a href="grocery/grocery.php" target="_blank">
                    <img src="productimg/topcategory/1.webp" width="55px"><span>Grocery Items</span>
                </a></li>
            <li><a href="pagination mobile/2mobile.php" target="_blank">
                    <img src="productimg/topcategory/2.webp" width="55px"><span>SmartPhones</span>
                </a></li>
            <li><a href="Fashion/Fashion.php" target="_blank">
                    <img src="productimg/topcategory/3.webp" width="55px"><span>Fashions</span>
                </a></li>
            <li><a href="laptop html/laptop.php" target="_blank">
                    <img src="productimg/topcategory/4.webp" width="55px"><span>Laptop </span>
                </a></li>

            <li><a href="electricity/electricity.php" target="_blank">
                    <img src="productimg/topcategory/5.webp" width="55px"><span>Electronics & Appliances</span>
                </a></li>
            <li><a href="#" target="_blank">
                    <img src="productimg/topcategory/6.webp" width="55px"><span>Booking </span>
                </a></li>
            <li><a href="toy shop/toy.html" target="_blank">
                    <img src="productimg/topcategory/7.webp" width="55px"><span>Toy&Shop</span>
                </a></li>

        </ul>
    </div>
    <!-- carousel parts -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="margin-top:5px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Carousel/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Carousel/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Carousel/8.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- our category accordion -->
    <br><br>

    <hr>
    <div class="container text-center">
    <span class="text" style="color: black; font-size:18px; "> <b>Trending Brands</b></span><br><br>
  <hr>
    <div class="row">
    
    <!-- col 1 -->
    <div class="col">
        <img src="productimg/sponserproduct/1.jpg">
    </div>
    <div class="col">
    <img src="productimg/sponserproduct/2.jpg">
    </div>
    <div class="col">
    <img src="productimg/sponserproduct/3.jpg">
    </div>
    <div class="col">
    <img src="productimg/sponserproduct/4.jpg">
    </div>
  </div>
  <br><br>
  <hr>
    <div class="container text-center" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
    <span class="text" style="color: black; font-size:18px;"> <b id="shop">Shop From Top Categories</b></span><br><br>
  <div class="row">
    <hr>
    <!-- col 1 -->
    <div class="col-1">
        <img src="nextproduct/1.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/2.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/3.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/4.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/5.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/6.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/7.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/8.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/9.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/1.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/10.jpg">
    </div>
    <div class="col-1">
    <img src="nextproduct/4.jpg">
    </div>
  </div>
  <br><br>
  <hr>
  <!-- slide move the slid js -->
  <span class="text" style="color: black; font-size:18px; "> <b>Trending  Products</b></span><br><br>
<hr>
<br><br>
<!-- next parts  -->
<div class="owl-carousel owl-theme">
    <div class="item">
<img src="newCarousel/1.jpg">
    </div>
    <div class="item">
    <img src="newCarousel/7.jpg ">
    </div>
    <div class="item">
    <img src="newCarousel/2.jpg">
    </div>
    <div class="item">
    <img src="newCarousel/3.jpg">
</div>
    <div class="item">
    <img src="newCarousel/4.jpg">
    </div>
    <div class="item">
    <img src="newCarousel/5.jpg">
    </div>
    <div class="item">
    <img src="newCarousel/6.jpg">

    </div>
    <div class="item">
    <img src="newCarousel/4.jpg">

    </div>
    <div class="item">
    <img src="newCarousel/3.jpg">

    </div>
    <div class="item">
    <img src="newCarousel/5.jpg">
    </div>
</div> 
<!-- sticky next navbar -->
<div class="box" data-aos="fade-left" data-aos-anchor-placement="center-bottom"  data-aos-duration="1500" style="background-color:aliceblue;">
<div class="moveing">
<select class="select-1">
<option value="SmartPhone">Choose Category</option>
<option value="Grocery Items">
<iframe src="">Grocery Items</option></iframe>  
<option value="Fashion">Fashion</option>
<option value="Laptop">Laptop</option>
<option value="Electric "> Electric</option>
<option value="Toy">Toy</option>
  </select>
  <!--  next category items -->
<select class="select-2">
<option value="SmartPhone">Sort By</option>
<option value="Grocery Items">Top Brands</option>
<option value="Fashion">Old Brands</option>
  </select>
  <!--  next category items -->
  <select class="select-3">
<option value="SmartPhone">Discount  </option>
<option value="Grocery Items">60% or more </option>
<option value="Fashion">50%  or more</option>
<option value="Fashion">40%  or more</option>
<option value="Fashion">30%  or more</option>
  </select>
  <select class="select-4">
<option value="SmartPhone">Brands </option>
<option value="Grocery Items">60% or more </option>
<option value="Fashion">50%  or more</option>
<option value="Fashion">40%  or more</option>
<option value="Fashion">30%  or more</option>
  </select>
</div>
</div>
</div>
</div>


<!----  next sections ------>
<br><br>
<!----  next sections ------>
<div class="container text-center" id="last" style="margin-top: 25px;">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
<a href="Fashion/Fashion.php" target="_blank">
    <img src="categoryproductslist/1.jpg">
    </a>
  </div>
    <div class="col">
      <a href="Fashion/women langha/women.php" target="_blank">
    <img src="categoryproductslist/2.jpg">
      </a>
    </div>
    <div class="col">
    <a href="Fashion/Fashion.php" target="_blank">
    <img src="categoryproductslist/3.jpg">
    </a>
    </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
  <a href="electricity/electricity.php" target="_blank">
    <img src="categoryproductslist/electronic/5.jpg">
    </a>
    </div>
    <div class="col">
      <a href="electricity/electricity.php" target="_blank">
    <img src="categoryproductslist/electronic/3.jpg">
    </a>
  </div>
    <div class="col">
    <!-- <img src="productlistimg/">     -->
    <a href="Pagination mobile/2mobile.php" target="_blank">
    <img src="categoryproductslist/electronic/4.jpg" id="mobile">
    </a>
  </div>
  
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
    <!-- <img src="productlistimg/">     -->
  <a href="Fashion/Fashion.php" target="_blank">
    <img src="categoryproductslist/7.jpg">
    </a>
    </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1800">
<a href="Fashion/Fashion.php" target="_blank">
     <img src="categoryproductslist/1.jpg">
</a>
    </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1800">

  <a href="Fashion/children.html/child.php" target="_blank">
     <img src="categoryproductslist/6.jpg">
  </a>
    </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1800">
     <a href="http://localhost/TechnoEcoomerce/shoe/shoe.php" target="_blank">
    <img src="categoryproductslist/8.jpg">
    </a>
  </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1800">
<a href="grocery/grocery.php" target="_blank">
     <img src="1.jpg">
     </a>
    </div>
    <div class="col" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1800">
    <!-- <img src="productlistimg/">     -->
    <a href="beauty/beauty.php" target="_blank">
    <img src="categoryproductslist/11.jpg">
    </a>  
  </div>
  </div>
</div>
<br><br>
<!-- footer  -->
 <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted" id="customer" style="margin-top: 450px;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Technokart
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Electronics</a>
          </p>
          <p>
            <a href="#!" class="text-reset">SmartPhone</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Grocery Items</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Fashion</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Gulzar Group of Institute</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Technokart.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- break points -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<script src="stickynav.js"></script>
<script src="loader.js"></script>
<!-- aos lib -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- swipper -->
<script src="swiper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- aos -->
<script>
  AOS.init();
</script>
<!-- owl caro--->
<script src="owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
</script>
</html>
