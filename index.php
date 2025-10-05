<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScentAura</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="off_canvars_overlay"></div>

    <div class="offcanvas_menu offcanvas_two">
        <div class="canvas_open">
            <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
        </div>
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
            </div>
            <div class="header_account">
                <ul>
                    <li class="language">
                        <a href="#"><img src="icon/language.png" alt="English"> EN <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_language">
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                    <li class="currency">
                        <a href="#">₹ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_currency">
                            <li><a href="#">India Rs.= ₹</a></li>
                        </ul>
                    </li>
                    <li class="top_links">
                        <a href="#">My Account <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown_links">
                            <li><a href="logout.php">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shopping Cart</a></li>

                        </ul>
                    </li>

                </ul>
            </div>

            <div class="header_right_info">
                <ul>
                    <li class="search_box">
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        <div class="search_widget">
                            <form action="#">
                                <input type="text" placeholder="Search Your Perfume">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    
                    <li class="mini_cart_wrapper">
    <a href="javascript:void(0)">
        <i class="fa fa-shopping-cart"></i>
    </a>
    <div class="mini_cart mini_cart2">
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="cart.php">View Cart</a>
            </div>
            <div class="cart_button">
                <a href="checkout.php">Checkout</a>
            </div>
        </div>
    </div>
</li>

                        <!-- mini cart ends here -->
                    </li>
                </ul>
            </div>

            <div id="menu" class="text-left">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Unisex</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Brands</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Men</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Versace</a></li>
                                    <li><a href="#">Hugo Boss</a></li>
                                    <li><a href="#">Jaguar</a></li>
                                    <li><a href="#">Armani</a></li>
                                    <li><a href="#">Denver</a></li>
                                    <li><a href="#">wild stone</a></li>
									
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Women</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Bvlgari</a></li>
                                    <li><a href="#">Coach</a></li>
                                    <li><a href="#">Kenzo</a></li>
                                    <li><a href="#">D&G</a></li>
									<li><a href="#">Calvin klein</a></li>
									<li><a href="#">Gucci</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Unisex</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Ajmal</a></li>
                                    <li><a href="#">Calvin Klein</a></li>
                                    <li><a href="#">Tom Ford</a></li>
									<li><a href="#">Cartier Eue de</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Social Media</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">My Account</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">User</a>
                        <ul class="sub-menu">
                            <li><a href="login.php">Login In</a></li>
                            <li><a href="register.php">Sign up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope-0"></i>deo@gmail.com</a></span>
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="main_header header_transparent header-mobile-m">
            <div class="header_container sticky-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- main-menu starts -->
                            <div class="main_menu menu_two menu_position">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html" class="active">Home <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="#">Men</a></li>
                                                <li><a href="#">Women</a></li>
                                                <li><a href="#">Unisex</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega_items">
                                            <a href="#">Brands <i class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li>
                                                        <a href="#">Men</a>
                                                        <ul>
                                                            <li><a href="#">Versace</a></li>
                                                            <li><a href="#">Hugo Boss</a></li>
                                                            <li><a href="#">Jaguar</a></li>
                                                            <li><a href="#">Armani</a></li>
                                                            <li><a href="#">Denver</a></li>
                                                            <li><a href="#">Wild Stone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Women</a>
                                                        <ul>
                                                            <li><a href="#">Bvlgari</a></li>
                                                            <li><a href="#">Coach</a></li>
                                                            <li><a href="#">Kenzo</a></li>
                                                            <li><a href="#">D&G</a></li>
                                                            <li><a href="#">Calvin Klein</a></li>
                                                            <li><a href="#">Gucci</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Unisex</a>
                                                        <ul>
                                                            <li><a href="#">Ajmal</a></li>
                                                            <li><a href="#">Calvin Klein</a></li>
                                                             <li><a href="#">Tom Ford</a></li>
                                                             <li><a href="#">Cartier Eau De</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li>
                                            <a href="#">User <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="login.php">Login In</a></li>
                                                <li><a href="register.php">Sign Up</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <!-- main menu ends -->
                        </div>
                        <div class="col-lg-4">
                            <div class="header_top_right">
                                <div class="header_right_info">
                                    <ul>
                                        <li class="search_box">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <div class="search_widget">
                                                <form action="#">
                                                    <input type="text" placeholder="Search your perfume">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        
                                            <!-- mini cart  -->
                                            <li class="mini_cart_wrapper">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                                <div class="mini_cart mini_cart2">
                                                    <div class="mini_cart_footer">
                                                        <div class="cart_button">
                                                            <a href="cart.php">View Cart</a>
                                                        </div>
                                                        <div class="cart_button">
                                                            <a href="checkout.php">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                <div class="header_account">
                                    <ul>
                                        <li class="top_links">
                                            <a href="#">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <ul class="dropdown_links">
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Shopping cart</a></li>
                                            </ul>
                                        </li>
                                        <li class="language">
                                            <a href="#"><img src="icon/language.png" alt="English"> EN <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_language">
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </li>
                                        <li class="currency">
                                            <a href="#">₹ <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_currency">
                                                <li><a href="#">Indian Rs.= ₹ </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- slider section starts  -->

    <section class="slider_section slider_section2 mb-66">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="slider/slider1.jpg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                            <div class="slider_content slider_content2 content_right">
                                <h2>For Him</h2>
                                <p>Step into a world where confidence meets charisma with Wild Stone Perfume – a fragrance crafted for the modern man who commands attention effortlessly. Bold, intense, and undeniably masculine, this perfume captures the essence of raw energy and timeless sophistication.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_content slider_content2 content_left">
                                <h2>For Her</h2>
                                <p>This perfume is a wonderful elixir that heightens both the scents of gourmet Bourbon
                                    vanilla and those refined of tuberose and jasmine. The delightful alliance reminds
                                    of tropical paradise.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- product area starts -->

    <div class="product_area product_area_two mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>New Products</h2>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a href="#Men" class="active" data-toggle="tab" role="tab" aria-controls="Men"
                                        aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href="#Women" data-toggle="tab" role="tab" aria-controls="Women"
                                        aria-selected="false">
                                        Women
                                    </a>
                                </li>
                                <li>
                                    <a href="#Unisex" data-toggle="tab" role="tab" aria-controls="Unisex"
                                        aria-selected="false">
                                        Unisex
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Men" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/versace1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/versace2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Versace Mens&price=2600&img=product/men/versace1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="product/men/versace1.png" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Versace mens</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3300</span>
                                                <span class="current_price">Rs. 2600</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/hugoboss1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/hugoboss2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Hugo Boss Eue De&price=3000&img=product/men/hugoboss1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Hugo Boss Eue de</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3300</span>
                                                <span class="current_price">Rs. 2850</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/jaguar1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/jaguar2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Jaguar Classic Black&price=3100&img=product/men/jaguar1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">jaguar Classic Black</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3800</span>
                                                <span class="current_price">Rs. 3100</span>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/armani1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/armani2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Armani Eue Pour Homme&price=2800&img=product/men/armani1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
</li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Armani Eue pour Homme</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3300</span>
                                                <span class="current_price">Rs. 2800</span>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/denver1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/denver2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Denver classic Scent&price=2200&img=product/men/denver1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                        <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Denver Classic Scent</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 2800</span>
                                                <span class="current_price">Rs. 2200</span>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/men/wildstone1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/men/wildstone2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Wild Stone Hydra Energy&price=1000&img=product/men/wildstone1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Wild Stone Hydra Energy</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 1500</span>
                                                <span class="current_price">Rs. 1000</span>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Women" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/bvlgari1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/bvlgari2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Bvlgari Womens&price=1300&img=product/women/bvlgari1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>

                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Bvlgari Women's</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 1800</span>
                                                <span class="current_price">Rs. 1300</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/gucci1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/gucci2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Bvlgari Womens&price=1300&img=product/women/gucci1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                  
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Gucci By Gucci</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3500</span>
                                                <span class="current_price">Rs. 2800</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/kenzo1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/kenzo2.jpg" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Kenzo World&price=2900&img=product/women/kenzo1.jpg" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                   
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Kenzo World</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3100</span>
                                                <span class="current_price">Rs. 2900</span>
                                            </div>
                                                                                    </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/dg1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/dg2.jpg" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=DG Limepertarice&price=3300&img=product/women/bg1.jpg" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">D&G Limepertarice</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3900</span>
                                                <span class="current_price">Rs. 3300</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/blue1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/blue2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Burberry Black&price=1300&img=product/women/blue1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#"> Burberry Black</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 1900</span>
                                                <span class="current_price">Rs.1300</span>
                                            </div>
                                                                                  </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/women/ck1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/women/ck2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Calvin Klein Women&price=2600&img=product/women/ck1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Calvin klein Women</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3100</span>
                                                <span class="current_price">Rs. 2600</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Unisex" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product\unisex\ajmal1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product\unisex\ajmal2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Ajmal Purely Orient&price=4200&img=product/unisex/ajmal1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                  <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Ajmal Purely Orient</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 4900</span>
                                                <span class="current_price">Rs. 4200</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/unisex/ck1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/unisex/ck2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Calvin Klein&price=1900&img=product/unisex/ck1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Calvin Klein </a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 2500</span>
                                                <span class="current_price">Rs. 1900</span>
                                            </div>
                                            
                                        </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/unisex/tomford1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/unisex/tomford2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Tom Ford Oud Wood&price=900&img=product/unisex/tomford1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Tom Ford Oud Wood</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 1200</span>
                                                <span class="current_price">Rs.900</span>
                                            </div>
                                                                                    </figcaption>
                                    </figure>

                                </article>
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="#" class="primary_img">
                                                <img src="product/unisex/cartier1.png" alt="">
                                            </a>
                                            <a href="#" class="secondary_img">
                                                <img src="product/unisex/cartier2.png" alt="">
                                            </a>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart">
                                                        <a href="add_to_cart.php?name=Cartier Eue De&price=2900&img=product/unisex/cartier1.png" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name">
                                                <a href="#">Cartier Eau De</a>
                                            </h4>

                                            <div class="price_box">
                                                <span class="old_price">Rs. 3500</span>
                                                <span class="current_price">Rs. 2900</span>
                                            </div>
                                           </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- product area ends -->


    <!-- banner area starts -->
    <div class="banner_area mb-66">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="banner/banner1.jpg" alt="">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>50%</h2>
                                <p>Perfume <span> & </span> Body Spray</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="Banner/banner2.jpg" alt="">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>40%</h2>
                                <p>Deodrants</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="Banner/banner3.jpg" alt="">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>30%</h2>
                                <p>Cologne</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <!-- home section area starts  -->

    <div class="home_section_two color_two mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="home_section_left">
                        <!-- deals product area starts -->

                        <div class="deals_product_area mb-68">
                            <div class="section_title section_title_style2">
                                <h2>Hot Deals</h2>
                            </div>
                            <div class="row">
                                <div class="deals_carousel product_column1 owl-carousel">
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="Deals/hugoboss1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="Deals/hugoboss2.png" alt="">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Hugo Boss Eue De&price=2850&img=product/unisex/hugoboss1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2025/12/15"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Hugo Boss Eeu DE</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 3300</span>
                                                        <span class="current_price">Rs. 2850</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>

                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="Deals/ck1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="Deals/ck2.png" alt="">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Calvin Klein Women&price=2600&img=product/women/ck1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2025/11/26"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Calvin klein Women</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 3100</span>
                                                        <span class="current_price">Rs. 2600</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>

                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="Deals/denver1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="Deals/denver2.png" alt="">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Denver Scent&price=2200&img=product/unisex/denver1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2025/12/20"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Denver Scent</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 2800</span>
                                                        <span class="current_price">Rs. 2200</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- deals product area ends -->

                        <!-- small product area starts -->

                        <div class="small_product_area mb-68">
                            <div class="section_title section_title_style2">
                                <h2>Best Sellers</h2>
                            </div>
                            <div class="small_product_container sidebar_product_column1 owl-carousel">
                                <div class="small_product_list">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="bestproducts/dg1.jpg" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="bestproducts/dg2.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">D&G Limepertarice</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 3900</span>
                                                    <span class="current_price">Rs. 3300</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="bestproducts/blue1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
												<img src="bestproducts/blue2.png" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Burberry Black</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 1900</span>
                                                    <span class="current_price">Rs. 1300</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="bestproducts/wildstone1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
												<img src="bestproducts/wildstone2.png" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Wild Stone Men</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 1500</span>
                                                    <span class="current_price">Rs.750</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>

                                <div class="small_product_list">
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="bestproducts/jaguar1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="bestproducts/jaguar2.png" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Jaguar Classic Black</a>
                                                </h4>
                                                
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 3800</span>
                                                    <span class="current_price">Rs.3100</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="bestproducts/kenzo1.jpg" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="bestproducts/kenzo2.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Kenzo World</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="old_price">Rs.5500</span>
                                                    <span class="current_price">Rs.4800</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                    </article>

                                </div>
                            </div>
                        </div>

                        <!-- small product area ends-->
                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="home_section_right">
                        <!-- product area starts  -->

                        <div class="product_area mb-65">
                            <div class="section_title section_title_style2">
                                <h2>New Product</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N1-1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N1-2.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Bvlgari Women Splendid&price=3200&img=product/new-product/N1-1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                           
                                                                                                                      <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Bvlgari Women Splendid </a>
                                                    </h4>
                                                    
                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 3550</span>
                                                        <span class="current_price">Rs. 3200</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N2-1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N2-2.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Coach Women Floral Blush&price=3600&img=product/new-product/N2-1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Coach Women Floral Blush</a>
                                                    </h4>
                                                                                                       <div class="price_box">
                                                        <span class="old_price">Rs. 4150</span>
                                                        <span class="current_price">Rs. 3600</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N3.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N3.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Versace Women Eros&price=2000&img=product/new-product/N3.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Versace Women Eros</a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 2400</span>
                                                        <span class="current_price">Rs. 2000</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N4-1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N4-2.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Salvatore Ferragamo Women Signorina&price=4800&img=product/new-product/N4-1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Salvatore Ferragamo Women Signorina</a>
                                                    </h4>
                                                    
                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 5200</span>
                                                        <span class="current_price">Rs. 4800</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N5-1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N5-2.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Signorina Misteriosa&price=2250&img=product/new-product/N5-1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Signorina Misteriosa</a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="old_price">Rs. 2500</span>
                                                        <span class="current_price">Rs. 2250</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="new-product/N6-1.png" alt="">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="new-product/N6-2.png" alt="">
                                                    </a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="add_to_cart.php?name=Kenzo Women World&price=3800&img=product/new-product/N6-1.png" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"
                                                                    title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Kenzo Women World</a>
                                                    </h4>
                                                                                                        <div class="price_box">
                                                        <span class="old_price">Rs. 4200</span>
                                                        <span class="current_price">Rs. 3800</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

                        <!-- Long banner area starts  -->
                        <div class="banner_area banner_style_two mb-58">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#">
                                        <img src="Banner/banner4.png" alt="">

                                    </a>
                                    <div class="banner_content">
                                        <h3 style="color: tomato;">Sale up to </h3>
                                        <h2>45%</h2>
                                        <p>Versace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Long Banner area ends -->

                        <!-- product section starts  -->
                        <div class="product_area">
                            <div class="section_title section_title_style2">
                                <h2>On Sale</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/armani1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/armani2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Armani Eue De&price=2800&img=onsale/armani1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Armani EauDe</a>
                                                        </h4>
                                                    
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 3300</span>
                                                            <span class="current_price">Rs.2800</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/jaguar1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/jaguar2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Jaguar Classic Black&price=3100&img=onsale/jaguar1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Jaguar Classic Black</a>
                                                        </h4>
                                                         <div class="price_box">
                                                            <span class="old_price">Rs. 3800</span>
                                                            <span class="current_price">Rs. 3100</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/cartier1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/cartier2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Cartier Eue De&price=2900&img=onsale/cartier1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                    
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Cartier EauDe</a>
                                                        </h4>
                                                                <div class="price_box">
                                                                    <span class="old_price">Rs. 2500</span>
                                                                    <span class="current_price">Rs. 2900</span>
                                                                </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/gucci1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/gucci2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Gucci By Gucci&price=5200&img=onsale/gucci1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Gucci By Gucci</a>
                                                        </h4>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs. 5800</span>
                                                            <span class="current_price">Rs. 5200</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/versace1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/versace2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Versace Men&price=2600&img=onsale/versace1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Versace Men</a>
                                                        </h4>
                                                                <div class="price_box">
                                                                    <span class="old_price">Rs. 3300</span>
                                                                    <span class="current_price">Rs. 2600</span>
                                                                </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="onsale/blue1.png" alt="">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="onsale/blue2.png" alt="">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="add_to_cart.php?name=Burberry Black&price=1300&img=onsale/blue1.png" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Burberry Black</a>
                                                        </h4>
                                                        <div class="price_box">
                                                            <span class="old_price">Rs.1900</span>
                                                            <span class="current_price">Rs. 1300</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- product section ends -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- home section area ends -->
    <!-- blog section starts  -->
    <section class="blog_section blog_two color_two mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="blog/blog1.jpg" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#"> 🎯How to Choose the Right Perfume for Every Occasion
                                            
                                        </a>
                                    </h4>
                                    <p class="post_desc">Perfume is more than a luxury—it’s a personal expression of mood, style, and intention. Just like you wouldn’t wear the same outfit to a business meeting and a beach vacation, your choice of fragrance should suit the occasion. Whether you're heading to the office, going on a romantic date, or attending a formal event, the right scent enhances your presence and leaves a lasting impression.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="blog/blog2.jpg" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                            🌡️ Why Your Perfume Smells Different on Your Skin
                                        </a>
                                    </h4>
                                    <p class="post_desc">

Have you ever fallen in love with a perfume after spraying it on a tester strip—only to find it smells completely different on your skin? You're not imagining things. Perfume is deeply personal, and how it smells can change dramatically depending on who’s wearing it.
                                       
                                    </p>
                                    
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="blog/blog3.jpg" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                            ⏳ How to Make Your Perfume Last All Day
                                        </a>
                                    </h4>
                                    <p class="post_desc">
                                        

Ever sprayed your favorite perfume in the morning, only to have it disappear by lunchtime? You’re not alone. Many people struggle with making their fragrance last—but the good news is, a few smart techniques can dramatically improve how long your scent stays with you.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                        <img src="blog/blog4.jpg" alt="">
                                    </a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                            🌸 How to Smell Perfume Before Buying
                                        </a>
                                    </h4>
                                    <p class="post_desc">
                                      

Choosing the perfect perfume is a personal and sensory experience. But with so many scents on the shelf, how do you test a fragrance properly before committing to a bottle? Here's your step-by-step guide to smelling perfume like a pro — and making sure it’s the one.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section ends -->

    <footer class="footer_widgets color_two">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-5">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <a href="#"><img src="images/logo.png" alt="Logo"></a>
                            </div>
                            <div class="footer_desc">
                                <p>Get all types of perfume from us within 2 day delivery. We can even order the
                                    perfumes which are not in our database. To do that kindly send a E-mail to the
                                    company's mail id.</p>
                            </div>
                            <p>
                                <span>Address :</span> International Business Center,yagnik road, rajkot, Gujarat
                            </p>
                            <p><span>Email :</span> <a href="#">deo@gmail.com</a></p>
                            <p><span>Phone :</span> <a href="tel: +91 8888884444">+91 8888884444</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-7">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="#">Prices Drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Gift Certificate</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                          <div class="col-lg-3 col-md-6">
                        <div class="widgets_container widgets_p_product">
                            <h3>Most Viewed Products</h3>
                            <div class="small_product_container small_product_column1 owl-carousel">
                                <div class="small_product_list">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="product/men/jaguar1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="product/men/jaguar2.png" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">Jaguar Classic Black</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">Rs. 3800</span>
                                                    <span class="current_price" style="color: white;">Rs. 3100</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="product/men/armani1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="product/men/armani2.png" alt="">
                                                </a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">Armani Eue Pour Homme
                                                    </a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 3300</span>
                                                    <span class="current_price" style="color: white;">Rs.
                                                        2800</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="product/women/blue1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="products/women/blue2.png" alt="">
                                                </a>

                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">Burberry Black</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">Rs. 1900</span>
                                                    <span class="current_price" style="color: white;">Rs. 1300</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="small_product_list">
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="products/women/dg1.jpg" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="products/women/dg2.jpg" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">D&G Limepertarice</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">Rs. 3900</span>
                                                    <span class="current_price" style="color: white;">Rs. 3300</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="products/unisex/ck1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="products/unisex/ck2.png" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">Calvin Klein Unisex</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">Rs. 2500</span>
                                                    <span class="current_price" style="color: white;">Rs. 1900</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="products/men/denver1.png" alt="">
                                                </a>
                                                <a href="#" class="secondary_img"><img
                                                        src="products/men/denver2.png" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#" style="color: white;">Denver Classic Scent</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="old_price">Rs. 2800</span>
                                                    <span class="current_price" style="color: white;">Rs. 2200</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    <!-- modal section starts  -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" data-dismiss="modal" aria-label="close" class="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="C:\VISHVA\project\new-product\N1-1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="C:\VISHVA\project\new-product\N2-1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="C:\VISHVA\project\new-product\N3.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="C:\VISHVA\project\new-product\N4-1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false">
                                                    <img src="C:\VISHVA\project\new-product\N1-1.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false">
                                                    <img src="C:\VISHVA\project\new-product\N2-1.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab3" aria-selected="false">
                                                    <img src="C:\VISHVA\project\new-product\N3.png" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false">
                                                    <img src="C:\VISHVA\project\new-product\N4-1.png" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Paco Rabbane Men Invictus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">Rs. 7600</span>
                                        <span class="old_price">Rs. 8100</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis earum
                                            nesciunt consequatur deleniti nam dicta eligendi iusto quaerat dolores
                                            debitis, est natus omnis consequuntur sequi. Ipsam sint rerum minus eos?</p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>Size</h2>
                                            <select class="select_option">
                                                <option value="1" selected>10ml</option>
                                                <option value="1">25ml</option>
                                                <option value="1">50ml</option>
                                                <option value="1">100ml</option>
                                                <option value="1">250ml</option>
                                            </select>
                                        </div>
                                        <div class="variants_fragrance">
                                            <h2>Fragrance</h2>
                                            <select class="select_option">
                                                <option value="1" selected>Rose</option>
                                                <option value="1">Chocolate</option>
                                                <option value="1">Sweet</option>
                                                <option value="1">Fruit</option>
                                                <option value="1">Intense</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input type="number" min="1" max="100" step="1" value="1">
                                                <button type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Follow us on</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal section ends -->
     <!-- footer section starts  -->

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2021 <a href="#">Perfume Store </a>All right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <ul>
                                <li><a href="#"><img src="images/icon/paypal.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal5.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="main.js"></script>
</body>
</html>