<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 13:51:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autima - Car Accessories Shop HTML Template </title>
    <meta name="description" content="">
    <meta name="assetsport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .a{
            color: black;
        }
        .b{
            width: 500px;
            height: 600px;
        }
        .c{
            display:flex;
        }
        .d{
            color:red;
        }
        .box_items{
            border:1px solid #EEEE;
            border-radius:5px;
            text-align:center;
            height:400px;
            position:relative;
            overflow:hidden;
        }
        .box_items img{
        width:100%;
        height:250px;
        border-radius:10px;
        }
        .box_items a{
            text-decoration:none;
            color:black;
        
        }
        .box_items .item_name{
            margin-top:10px;
        font-size:20px;
        font-weight:bold;

        }
        .box_items .price{
            margin:10px 0;
        color:red;
        font-weight:500;

        }
        .box_items_img:hover .add{
        width:92%;
        bottom:30.66%;
        }
        .box_items_img .add{
        
            position:absolute;
            bottom:-100%;
        
        padding:10px;
        background-color:aqua;
        border-radius:6px;
        margin-top:20px;

        }
        .items{
            width:95%;
            margin:0 auto;
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:20px;
        }
    </style>

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="#"><i class="ion-android-person"></i>Tài khoản<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
                                        </ul>
                                    </li>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                            <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                            <li><a href="#">INR – India Rupee</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <h1 class="a" >CICI</h1>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search-container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                               <div class="header_wishlist">
                                    <a href="wishlist.html"><span class="lnr lnr-heart"></span> Wish list </a>
                                </div>
                                <div class="mini_cart_wrapper">
                                    <a href="index.php?act=viewcart"><span class="lnr lnr-cart"></span>My Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">JBL Flip 3 Splasroof Portable Bluetooth 2</a>

                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$60.00</span>

                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Koss Porta Pro On Ear Headphones </a>
                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$69.00</span>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$138.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$138.00</span>
                </div>
            </div>

            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="cart.html">assets cart</a>
                </div>
                <div class="cart_button">
                    <a class="active" href="checkout.html">Checkout</a>
                </div>

            </div>

        </div>
        <!--mini cart end-->
        
        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="index.php?act=sanpham">Sản Phẩm</a></li>
                                    <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                                    <li><a href="index.php?act=uudai">Ưu Đãi</a></li>
                                    <li><a href="index.php?act=baiviet">Bài Viết</a></li>
                                    <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->