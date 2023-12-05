<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <!-- Icon Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
    <!-- Bootstrap  -->
    <link href = "../scss/vertical-layout-light/_settings-panel.scss">
    <link href = "../scss/common/light/_utilities.scss">
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
        <!-- Icon Fonts-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/contact us.css">
    <link rel="stylesheet" href ="./assets/css/style.css">
</head>
<body>
    <nav class="fh5co-nav " role="navigation">
            <div class="container">
                <div class="row">
                    <a class = "logo" href="home.html">Flowers.</a>
                    <div class="col-md-10 col-xs-6 text-center menu-1" style = "width: 60rem;">
                        <ul>
                            <li class="active"><a href="home.php">Home</a></li>
                            <li ><a href="about-us.php">About</a></li>
                            <li ><a href="blog.php">Blog</a></li>
                            <li ><a href="shop.php">Shop</a></li>
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
                    <a class="nav-link show" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                    <img class="rounded-circle" src="../images/faces/face8.jpg" alt="Profile image"> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown show" aria-labelledby="UserDropdown" data-bs-popper="none">
                        <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="../images/faces/face8.jpg" alt="Profile image" style = "width: 45%;">
                        <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                        <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                        </div>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline me-2"></i> Messages</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline me-2"></i> Activity</a>
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline me-2"></i> FAQ</a>
                        <form action="./logout.php">
                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power me-2"></i><button type = "submit" class = "btn" name = "logout">Sign Out</button></a>
                        </form>
                    </div>
                </div>
                </div>
            </div>
    </nav>
    <div class="static-div">
        <div class="overlay">
            <div class="blog-title">
                <h1>Contact Us</h1>
                <a href="#form">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.626" height="8.639" viewBox="0 0 14.626 8.639">
                    <g id="down-arrow" transform="translate(0 -70.698)">
                    <g id="Group_8820" data-name="Group 8820" transform="translate(0 100.698)">
                    <path id="Path_6507" style="fill:#fff;" data-name="Path 6507" d="M14.392,101.42l-.479-.482a.8.8,0,0,0-1.132,0L7.316,106.4l-5.472-5.472a.8.8,0,0,0-1.132,0l-.479.479a.8.8,0,0,0,0,1.131l6.515,6.538a.818.818,0,0,0,.567.257h0a.818.818,0,0,0,.566-.257l6.508-6.52a.808.808,0,0,0,.234-.571A.8.8,0,0,0,14.392,101.42Z" transform="translate(0 -130.698)"></path>
                    </g>
                    </g>
                </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="contact-form" id = "contact-form">
        <form id = "form">
            <h2>Tell Us Your Issue</h2>
            <input type="text" placeholder="Name" name="name" required/>
            <input type="text" placeholder="Phone Number" name="phone" required/>
            <br /><br />
            <input type="email" placeholder="Email" name="email" required/>
            <input type="text" placeholder="Subject" name="subject" required/>
            <br />
            <textarea placeholder="Message" name="message"> </textarea>
            <br />
            <button type="submit">Send Message</button>
        </form>
    </div>
    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md justify-content-around">
                <div class="col-md-4 fh5co-widget">
                    <h3>Flowers.</h3>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                </div>
                <div class="col-md-1 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>

                <div class="col-md-1 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Handbook</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Find Designers</a></li>
                        <li><a href="#">Find Developers</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Advertise</a></li>
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
                                    <i class="fab fa-facebook-f fa-2x icon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter fa-2x icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in fa-2x icon"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus-g fa-2x icon"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    
  <!-- plugins:js -->
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
  <script src="../js/Chart.roundedBarCharts.js"></script>    <script src="./assets/js/more.js"></script>
</body>
</html>