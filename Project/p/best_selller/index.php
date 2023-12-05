<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="./index.css">
    <!-- Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--Start Section Arrivals  -->
    <section class="arrivals_section" id="arrivals">
        <div class="container">
            <h1>New Arrivals</h1>
        <p class="arrivals_details text-muted">Explore our new arrivals, ready to become your next holy grails. Award-winning
            makeup at prices you'll love from FLOWER Beauty by Drew Barrymore.</p>
        <div class=" cards mt-5">
            <div class="card" style=" padding: 0 18px;">
                <img src="./images/1.png" class="card-img-top w-50 m-auto " alt="...">
                <div class="frow d-flex justify-content-between mt-4">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>7$</p>
                </div>
                <div class="srow d-flex justify-content-between">
                    <h5>Yellow Tulips</h5>
                    <p class="text-decoration-line-through">9$</p>
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn add_cart"><span class="fa fa-cart-plus m-2"></span>Add To Cart</a>
                </div>
            </div>
            <div class="card" style=" padding: 0 18px;">
                <img src="./images/2.png" class="card-img-top w-50 m-auto " alt="...">
                <div class="frow d-flex justify-content-between mt-4">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>7$</p>
                </div>
                <div class="srow d-flex justify-content-between">
                    <h5>Yellow Tulips</h5>
                    <p class="text-decoration-line-through">9$</p>
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn add_cart"><span class="fa fa-cart-plus m-2"></span>Add To Cart</a>
                </div>
            </div>
            <div class="card" style=" padding: 0 18px;">
                <img src="./images/3.png" class="card-img-top w-50 m-auto " alt="...">
                <div class="frow d-flex justify-content-between mt-4">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>7$</p>
                </div>
                <div class="srow d-flex justify-content-between">
                    <h5>Yellow Tulips</h5>
                    <p class="text-decoration-line-through">9$</p>
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn add_cart"><span class="fa fa-cart-plus m-2"></span>Add To Cart</a>
                </div>
            </div>
            <div class="card" style=" padding: 0 18px;">
                <img src="./images/4.png" class="card-img-top w-50 m-auto " alt="...">
                <div class="frow d-flex justify-content-between mt-4">
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>7$</p>
                </div>
                <div class="srow d-flex justify-content-between">
                    <h5>Yellow Tulips</h5>
                    <p class="text-decoration-line-through">9$</p>
                </div>
                <div class="card-body text-center">
                    <a href="#" class="btn add_cart"><span class="fa fa-cart-plus m-2"></span>Add To Cart</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--End Section Arrivals  -->
    <!--Start Section Deals  -->
    <section class="deals">
            <div class="container">
                <div class="deals_contant d-flex">
                    <div class="w-100">
                        <img src="./images/hot deals.png" class="w-100" alt="...">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Hot Deals! Sale Up To <span class="pink">20% Off</span></h5>
                        <p class="card-text deals_details mb-4">We are pride ourself to delivery many types of fresh flowers on this
                            town. We are one of top online flower shop with best service, feel free to
                            contact ones of our professional customer service team members with</p>
                            <div class=" date w-50 d-flex justify-content-between">
                                <div class="date_item">
                                    <p id="days"></p>
                                    <hr>Days
                                </div>
                                <div class="date_item" >
                                    <p id="hours"></p>
                                    <hr>Hours
                                </div>
                                <div class="date_item">
                                    <p id="minutes"></p>
                                    <hr>Min
                                </div>
                                <div class="date_item">
                                    <p  id="seconds"></p>
                                    <hr>Sec
                                </div>
                            </div>
                        <a href="#" class="btn add_cart"><span class="fa fa-cart-plus m-2"></span>Add To Cart</a>
                    </div>
                </div>
            </div>
    </section>
    <!--End Section Deals  -->
    <!-- Bootstrap Bundle with Popper , Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>
</html>