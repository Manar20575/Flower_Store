<!DOCTYPE html>
<html lang="en">
<head>
    <title>flower store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <!-- plugins:css -->
     <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/owl.css">
    <link rel="stylesheet" href="./assets/css/tooplate-main.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
	<!-- Icon Fonts-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
    <link rel="stylesheet" href="./CSS/font-awesome.min.css">
</head>

<body>
    <nav class="fh5co-nav " role="navigation">
		<div class="container">
            <div class="row">
                <a class = "logo" href="#">Flowers.</a>
				<div class="col-md-10 col-xs-6 text-center menu-1" style = "width: 60rem;">
					<ul>
						<li ><a href="home.php">Home</a></li>
						<li ><a href="about-us.php">About</a></li>
						<li ><a href="blog.php">Blog</a></li>
                        <li class="active"><a href="shop.php">Shop</a></li>
						<li><a href="contact-us.php">Contact us</a></li>
                        <li class="shopping-cart">
                            <a href="#" class="cart">
                                <span><small>0</small><i class="fa fa-shopping-cart"></i></span>
                            </a>
                        </li>
                        <li class="fav-cart">
                            <a href="#" class="cart">
                                <span><small>0</small><i class="fa fa-heart"></i></span>
                            </a>
                        </li>
					</ul>
				</div>
                <div class="nav-item dropdown d-none d-lg-block user-dropdown" style = "width:6%;">
                <a class="nav-link show" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="true"">
                <img class="rounded-circle" src="../images/faces/face8.jpg" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown show" aria-labelledby="UserDropdown" data-bs-popper="none">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../images/faces/face8.jpg" alt="Profile image" style = "width: 45%;">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline  me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline  me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline  me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline  me-2"></i> FAQ</a>
                <form action="./logout.php">
                    <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power me-2"></i><button type = "submit" class = "btn" name = "logout">Sign Out</button></a>
                </form>
            </div>
        </div>
            </div>
		</div>
	</nav>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row py-5">

            <div class="col-lg-3 button-group"  id="filters">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <button class="btn collapsed d-flex justify-content-between h3 text-decoration-none" href="#" data-filter = ".Lilies">
                            Lilies
                            <!-- <i class="fa fa-fw fa-chevron-circle-down mt-1"></i> -->
                        </button>
                        <!-- <ul class="collapse show list-unstyled pl-3 px-5">
                            <li><a class="text-decoration-none" href="#">Madonna lily</a></li>
                            <li><a class="text-decoration-none" href="#">Wood lily</a></li>
                            <li><a class="text-decoration-none" href="#">Martagon lily</a></li>
                            <li><a class="text-decoration-none" href="#">Royal lily</a></li>                            
                            <li><a class="text-decoration-none" href="#">Lilium formosanum</a></li>
                            <li><a class="text-decoration-none" href="#">Tiger lily</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <button class="btn collapsed d-flex justify-content-between h3 text-decoration-none" href="#" data-filter = ".Roses">
                            Roses
                            <!-- <i class="fa fa-fw fa-chevron-circle-down mt-1"></i> -->
                        </button>
                        <!-- <ul class="collapse show list-unstyled pl-3 px-5">
                            <li><a class="text-decoration-none" href="#">Damask rose</a></li>
                            <li><a class="text-decoration-none" href="#">China rose</a></li>
                            <li><a class="text-decoration-none" href="#">Mr.Lincoln</a></li>
                            <li><a class="text-decoration-none" href="#">Beach rose</a></li>
                            <li><a class="text-decoration-none" href="#">Dog-rose</a></li>
                            <li><a class="text-decoration-none" href="#">Multiflora rose</a></li>
                            <li><a class="text-decoration-none" href="#">Sweet-Brier</a></li>                            
                            <li><a class="text-decoration-none" href="#">Knock Out</a></li>
                        </ul> -->
                    </li>
                    
                    <li class="pb-3">
                        <button class="btn collapsed d-flex justify-content-between h3 text-decoration-none" href="#"  data-filter = ".Tulips">
                            Tulips
                            <!-- <i class="fa fa-fw fa-chevron-circle-down mt-1"></i> -->
                        </button>
                        <!-- <ul class="collapse show list-unstyled pl-3 px-5">
                            <li><a class="text-decoration-none" href="#">Garden Tlip</a></li>
                            <li><a class="text-decoration-none" href="#">Parrot Tulip</a></li>
                            <li><a class="text-decoration-none" href="#">Lady Tulip</a></li>
                            <li><a class="text-decoration-none" href="#">Candia Tulip</a></li>
                            <li><a class="text-decoration-none" href="#">Maria Kaczynska</a></li>
                            <li><a class="text-decoration-none" href="#">Tulipa kaufmanniana</a></li>
                        </ul> -->
                    </li>
                    <li class="pb-3">
                        <button class="btn collapsed d-flex justify-content-between h3 text-decoration-none" href="#"  data-filter = ".Wedding">
                            Wedding
                            <!-- <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i> -->
                        </button>
                        <!-- <ul id="collapseTwo" class="collapse list-unstyled pl-3 px-5">
                            <li><a class="text-decoration-none" href="#">Geranium-Peony</a></li>
                            <li><a class="text-decoration-none" href="#">Cosmos-Protea</a></li>
                            <li><a class="text-decoration-none" href="#">Anemone-Freesia</a></li>
                            <li><a class="text-decoration-none" href="#">Ranunculus-Peony</a></li>
                            <li><a class="text-decoration-none" href="#">Roses-Dahlias</a></li>
                            <li><a class="text-decoration-none" href="#">Iris-Rosemary</a></li>
                            <li><a class="text-decoration-none" href="#">Spring Tenderness</a></li>
                            <li><a class="text-decoration-none" href="#">Pink Sunset</a></li>
                            <li><a class="text-decoration-none" href="#">Velver Night</a></li>
                            <li><a class="text-decoration-none" href="#">Bright Summer</a></li>
                            <li><a class="text-decoration-none" href="#">White Perfection</a></li>
                            <li><a class="text-decoration-none" href="#">Oupidatat Non</a></li>
                            <li><a class="text-decoration-none" href="#">Floral</a></li>
                            <li><a class="text-decoration-none" href="#">Gerbera Daisy</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>
            <!--Add Item  -->
            <div class="col-lg-9">
                <div class="row posts">
                <?php
                    $host = "localhost";
                    $dbname = "flower";
                    $username = "root";
                    $password = "";
                    $link=mysqli_connect("$host", "$username", "$password");
                    mysqli_select_db($link, "$dbname");
                    if (mysqli_connect_errno()){
                        echo "faild to connect to MYSQL:".mysqli_connect_error();
                    }
                    $res=mysqli_query($link, "select * from flower");
                    while ($row=mysqli_fetch_array($res))
                    {
                ?>
                <div class="col-md-4 item <?php echo $row["category"]?>">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo "../". $row["pic"]?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn pink-btn " href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success-wheat  mt-2" href="shop-single.php"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success-wheat  mt-2" href="shop-single.php"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo  $row["name"]?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>S/M/L/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$<?php echo $row["price"]?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Customers</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-10 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-1.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-2.jpg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-11.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-10.jpeg" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-16.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-14.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-15.jpg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-16.jpeg" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-17.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-18.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-19.jpeg" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-2">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/w-20.jpeg" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->

    <!-- Start Footer -->
    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget">
                    <h3>Flowers.</h3>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Meetups</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Handbook</a></li>
                        <li><a href="#">Held Desk</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Find Designers</a></li>
                        <li><a href="#">Find Developers</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">API</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2022 Flowers Team</small> 
                    </p>
                    <div class="list">
                        <ul>
                            <li>
                                <a href="#">
                                <i class="fab fa-facebook-f fa-2x icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fa-2x icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in fa-2x icon"></i></a></li>
                            <li>
                            <a href="#"><i class="fab fa-google-plus-g fa-2x icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
    <!-- Start Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/more.js"></script>
    <script src="assets/js/custom.js"></script>
    
    <!-- End Script -->
</body>

</html>