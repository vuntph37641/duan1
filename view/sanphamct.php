    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <?php
     $img=$img_path.$img;
     echo '
    <div class="product_details mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                            <img class="b" src="'.$img.'">
                            
                            </a>
                        </div>

                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1>'.$name.'</h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">'.$price.'</span>
                            </div>
                            <div class="product_desc">
                                <p>'.$mota.'</p>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>

                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Thêm vào danh sách yêu thích</a></li>
                                    <li><a href="#" title="Add to wishlist">+ So sánh</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Danh mục: <a href="#">Áo khoác</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Related</strong>Products</span></h2>
                    </div>
                    <div class="product_carousel product_column5 owl-carousel">
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product19.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$180.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-47%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$160.00</span>
                                        <span class="old_price">$3200.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$150.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product16.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product17.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$175.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product18.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-07%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$180.00</span>
                                        <span class="old_price">$420.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="current_price">$140.00</span>
                                        <span class="old_price">$320.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                                <p class="manufacture_product"><a href="#">Accessories</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">$160.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->
    '?>