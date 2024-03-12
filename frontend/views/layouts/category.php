<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use app\components\MenuWidget;
use app\components\MobileWidget;
use app\components\CategoryWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <title>Techmarket HTML</title>
      
        
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="images/fav-icon.png">
        <?php $this->head() ?>
    </head>
    <body class="woocommerce-active left-sidebar">
    <?php $this->beginBody() ?>
        <div id="page" class="hfeed site">
            <div class="top-bar top-bar-v1">
            <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">Доставим ваш заказ бесплатно - всего за 3 день!</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="shop.html">Вопрос-ответ</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="track-your-order.html">Мои заказы</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                <i class="tm tm-language"></i>Русский
                                <span class="caret"></span>
                            </a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-489 animate-dropdown">
                                    <a title="AUD" href="#">O'zbekcha</a>
                                </li>     
                            </ul>
                                        <!-- .dropdown-menu -->
                        </li>
                    </ul>
                    <!-- .nav -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- .top-bar-v1 -->
            <header id="masthead" class="site-header header-v1" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="site-branding">
                                <a href="home-v1.html" class="custom-logo-link" rel="home">
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                        <defs>
                                            <style>
                                                .cls-1,
                                                .cls-2 {
                                                    fill: #333e48;
                                                }
                                                
                                                .cls-1 {
                                                    fill-rule: evenodd;
                                                }
                                                
                                                .cls-3 {
                                                    fill: #3265b0;
                                                }
                                            </style>
                                        </defs>
                                        <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                        <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                        <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                        <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                        <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                        <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                        <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                        <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                        <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                        <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                        <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                        <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                        <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                        <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                        <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                        <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                        <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                                    </svg>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <form class="navbar-search" method="get" action="home-v1.html">
                                <label class="sr-only screen-reader-text" for="search"></label>
                                <div class="input-group">
                                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Искать товары и категории" />
                                    <!-- .input-group-addon -->
                                    <div class="input-group-btn input-group-append">
                                        <input type="hidden" id="search-param" name="post_type" value="product" />
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                            <span class="search-btn">Поиск</span>
                                        </button>
                                    </div>
                                    <!-- .input-group-btn -->
                                </div>
                            <!-- .input-group -->
                            </form>
                            <ul class="site-header-cart header-wishlist">
                                <li class="nav-item-center">
                                        <a title="My Account" href="login-and-register.html">
                                            <i class="tm tm-login-register"></i>Регистер и войти</a>
                                </li>
                            </ul>
                            <ul id="site-header-cart" class="site-header-cart menu">
                                <li class="animate-dropdown dropdown ">
                                    <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                        <i class="tm tm-shopping-bag"></i>
                                        <span class="count">2</span>
                                        <span class="amount">
                                            <span class="price-label">Корзина</span>&#036;136.99</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-mini-cart">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="widget_shopping_cart_content">
                                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="/images/eragon/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                            </a>
                                                            <span class="quantity">1 ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                            </span>
                                                        </li>
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="/images/eragon/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                                            </a>
                                                            <span class="quantity">1 ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <!-- .cart_list -->
                                                    <p class="woocommerce-mini-cart__total total">
                                                        <strong>Итого:</strong>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                                    </p>
                                                    <p class="woocommerce-mini-cart__buttons buttons">
                                                        <a href="cart.html" class="button wc-forward">Перейти в корзина</a>
                                                        <a href="checkout.html" class="button checkout wc-forward">Оформление товара</a>
                                                    </p>
                                                </div>
                                                <!-- .widget_shopping_cart_content -->
                                            </div>
                                            <!-- .widget_shopping_cart -->
                                        </li>
                                    </ul>
                                    <!-- .dropdown-menu-mini-cart -->
                                </li>
                            </ul> 
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                    <div class="row align-items-center">
                        <div id="departments-menu" class="dropdown departments-menu">
                            <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="tm tm-departments-thin"></i>
                                <span>Каталог</span>
                            </button>
                            <?= MenuWidget::widget() ?>                    

                        </div>
                        <!-- .departments-menu -->
                        <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                                <ul id="menu-primary-menu" class="nav yamm">
                                    <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                        <a title="Super deals" href="product-category.html">Рассрочка</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Распродажа <span class="caret"></span></a>
                                        
                                        <!-- .dropdown-menu -->
                                    </li>
                                    
                                    <li class="menu-item animate-dropdown">
                                        <a title="Logitech Sale" href="product-category.html">Карго товара</a>
                                    </li>                                   
                                    
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2802 animate-dropdown">
                                        <a title="Track Your Order" href="track-your-order.html">
                                            <i class="tm tm-order-tracking"></i> Доставка товара</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                                        <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                            Курсы валют
                                            <span class="caret"></span>
                                        </a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-489 animate-dropdown">
                                                <a title="AUD" href="#">Сумма (UZD)</a>
                                            </li>
                                            
                                        </ul>
                                        <!-- .dropdown-menu -->
                                    </li>
                                </ul>
                                <!-- .nav -->
                        </nav> 
                    </div>
                    <!-- /.row -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="home-v1.html" class="custom-logo-link" rel="home">
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                        <defs>
                                            <style>
                                                .cls-1,
                                                .cls-2 {
                                                    fill: #333e48;
                                                }
                                                
                                                .cls-1 {
                                                    fill-rule: evenodd;
                                                }
                                                
                                                .cls-3 {
                                                    fill: #3265b0;
                                                }
                                            </style>
                                        </defs>
                                        <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                        <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                        <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                        <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                        <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                        <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                        <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                        <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                        <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                        <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                        <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                        <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                        <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                        <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                        <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                        <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                        <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                                    </svg>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <li class="my-account">
                                        <a href="login-and-register.html" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="wishlist.html" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="compare.html" class="has-icon">
                                            <i class="tm tm-compare"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .columns-3 -->
                            </div>
                            <!-- .handheld-header-links -->
                        </div>
                        <!-- /.row -->
                        <div class="techmarket-sticky-wrap">
                            <div class="row">
                                <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                    <button class="btn navbar-toggler" type="button">
                                        <i class="tm tm-departments-thin"></i>
                                        <span>Menu</span>
                                    </button>
                                    <div class="handheld-navigation-menu">
                                        <span class="tmhm-close">Close</span>
                                        <?= MobileWidget::widget() ?>
                                    </div>
                                    <!-- .handheld-navigation-menu -->
                                </nav>
                                <!-- .handheld-navigation -->
                                <div class="site-search">
                                    <div class="widget woocommerce widget_product_search">
                                        <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                            <input type="submit" value="Search" />
                                            <input type="hidden" name="post_type" value="product" />
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                </a>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- .techmarket-sticky-wrap -->
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>
            <!-- .header-v1 -->
            <?= $content;?>
            <footer class="site-footer footer-v1">
                <div class="col-full">
                    <!-- .before-footer-wrap -->
                    <div class="footer-widgets-block">
                        <div class="row">
                            <div class="footer-contact col-6">
                                <div class="footer-logo">
                                    <a href="home-v1.html" class="custom-logo-link" rel="home">
                                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 176 28">
                                            <defs>
                                                <style>
                                                    .cls-1,
                                                    .cls-2 {
                                                        fill: #333e48;
                                                    }
                                                    
                                                    .cls-1 {
                                                        fill-rule: evenodd;
                                                    }
                                                    
                                                    .cls-3 {
                                                        fill: #3265b0;
                                                    }
                                                </style>
                                            </defs>
                                            <polygon class="cls-1" points="171.63 0.91 171.63 11 170.63 11 170.63 0.91 170.63 0.84 170.63 0.06 176 0.06 176 0.91 171.63 0.91" />
                                            <rect class="cls-2" x="166.19" y="0.06" width="3.47" height="0.84" />
                                            <rect class="cls-2" x="159.65" y="4.81" width="3.51" height="0.84" />
                                            <polygon class="cls-1" points="158.29 11 157.4 11 157.4 0.06 158.26 0.06 158.36 0.06 164.89 0.06 164.89 0.87 158.36 0.87 158.36 10.19 164.99 10.19 164.99 11 158.36 11 158.29 11" />
                                            <polygon class="cls-1" points="149.54 6.61 150.25 5.95 155.72 10.98 154.34 10.98 149.54 6.61" />
                                            <polygon class="cls-1" points="147.62 10.98 146.65 10.98 146.65 0.05 147.62 0.05 147.62 5.77 153.6 0.33 154.91 0.33 147.62 7.05 147.62 10.98" />
                                            <path class="cls-1" d="M156.39,24h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66s0-.46,0-0.72a3.56,3.56,0,0,0,3.54-2.87,3.36,3.36,0,0,0-3.22-4H148.8V24h-1V13.06h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C154.48,22.24,156.39,24,156.39,24Z" transform="translate(-12 -13)" />
                                            <polygon class="cls-1" points="132.04 2.09 127.09 7.88 130.78 7.88 130.78 8.69 126.4 8.69 124.42 11 123.29 11 132.65 0 133.04 0 133.04 11 132.04 11 132.04 2.09" />
                                            <polygon class="cls-1" points="120.97 2.04 116.98 6.15 116.98 6.19 116.97 6.17 116.95 6.19 116.95 6.15 112.97 2.04 112.97 11 112 11 112 0 112.32 0 116.97 4.8 121.62 0 121.94 0 121.94 11 120.97 11 120.97 2.04" />
                                            <ellipse class="cls-3" cx="116.3" cy="22.81" rx="5.15" ry="5.18" />
                                            <rect class="cls-2" x="99.13" y="0.44" width="5.87" height="27.12" />
                                            <polygon class="cls-1" points="85.94 27.56 79.92 27.56 79.92 0.44 85.94 0.44 85.94 16.86 96.35 16.86 96.35 21.84 85.94 21.84 85.94 27.56" />
                                            <path class="cls-1" d="M77.74,36.07a9,9,0,0,0,6.41-2.68L88,37c-2.6,2.74-6.71,4-10.89,4A13.94,13.94,0,0,1,62.89,27.15,14.19,14.19,0,0,1,77.11,13c4.38,0,8.28,1.17,10.89,4,0,0-3.89,3.82-3.91,3.8A9,9,0,1,0,77.74,36.07Z" transform="translate(-12 -13)" />
                                            <rect class="cls-2" x="37.4" y="11.14" width="7.63" height="4.98" />
                                            <polygon class="cls-1" points="32.85 27.56 28.6 27.56 28.6 5.42 28.6 3.96 28.6 0.44 47.95 0.44 47.95 5.42 34.46 5.42 34.46 22.72 48.25 22.72 48.25 27.56 34.46 27.56 32.85 27.56" />
                                            <polygon class="cls-1" points="15.4 27.56 9.53 27.56 9.53 5.57 9.53 0.59 9.53 0.44 24.93 0.44 24.93 5.57 15.4 5.57 15.4 27.56" />
                                            <rect class="cls-2" y="0.44" width="7.19" height="5.13" />
                                        </svg>
                                    </a>
                                </div>
                                <!-- .footer-logo -->
                                <div class="contact-payment-wrap">
                                    <div class="footer-contact-info">
                                        <div class="media">
                                            <span class="media-left icon media-middle">
                                                <i class="tm tm-call-us-footer"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="call-us-title">ЕСТЬ ВОПРОСЫ? ЗВОНИТЕ НАМ 24/7!</span>
                                                <span class="call-us-text">(+998) 99 896 9616, (+998) 99 755 0599</span>
                                                <address class="footer-contact-address">15 улица Лутфий, район Учтепинский, Ташкент, UZ</address>
                                                <a href="#" class="footer-address-map-link">
                                                    <i class="tm tm-map-marker"></i>Найдите нас на карте</a>
                                            </div>
                                            <!-- .media-body -->
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .footer-contact-info -->
                                    <div class="footer-payment-info">
                                        <div class="media">
                                            <span class="media-left icon media-middle">
                                                <i class="tm tm-safe-payments"></i>
                                            </span>
                                            <div class="media-body">
                                                <h5 class="footer-payment-info-title">МЫ ИСПОЛЬЗУЕМ БЕЗОПАСНЫЕ ПЛАТЕЖИ</h5>
                                                <div class="footer-payment-icons">
                                                    <ul class="list-payment-icons nav">
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="/images/credit-cards/mastercard.svg" alt="mastercard" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="/images/credit-cards/visa.svg" alt="visa" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="/images/credit-cards/paypal.svg" alt="paypal" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="/images/credit-cards/maestro.svg" alt="maestro" />
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .footer-payment-icons -->
                                                <div class="footer-secure-by-info">
                                                    <h6 class="footer-secured-by-title">Обеспечено:</h6>
                                                    <ul class="footer-secured-by-icons">
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="/images/secured-by/norton.svg" alt="norton" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="/images/secured-by/mcafee.svg" alt="mcafee" />
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .footer-secure-by-info -->
                                            </div>
                                            <!-- .media-body -->
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .footer-payment-info -->
                                </div>
                                <!-- .contact-payment-wrap -->
                            </div>
                            <!-- .footer-contact -->
                            <div class="footer-widgets col-6">
                                <div class="col">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">Найдите это быстро</h4>
                                            <div class="menu-footer-menu-1-container">
                                                <ul id="menu-footer-menu-1" class="menu">
                                                    <li class="menu-item">
                                                        <a href="shop.html">Computers &#038; Laptops</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Cameras &#038; Photography</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Smart Phones &#038; Tablets</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Video Games &#038; Consoles</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">TV</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Car Electronic &#038; GPS</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu-footer-menu-1-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                                <div class="col">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">&nbsp;</h4>
                                            <div class="menu-footer-menu-2-container">
                                                
                                            </div>
                                            <!-- .menu-footer-menu-2-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                                <div class="col">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">Обслуживание клиентов</h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">
                                                    <li class="menu-item">
                                                        <a href="#">Мой счет</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Отследить заказ</a>
                                                    </li>
                                                    
                                                    <li class="menu-item">
                                                        <a href="#">Избранное</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">О нас</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">Возврат/Обмен</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <!-- .menu-footer-menu-3-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                            </div>                        
                            <!-- .footer-widgets -->
                        </div>
                        <div class="col-full">                            
                            <!-- .footer-newsletter -->
                            <div class="footer-social-icons">
                                <ul class="social-icons nav">
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-facebook"></i> Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-twitter"></i> Twitter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-google-plus"></i> Google+</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-vimeo-square"></i> Vimeo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-rss"></i> RSS</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .footer-social-icons -->
                        </div>
                        <!-- .row -->
                    </div>                   
                    <!-- .footer-widgets-block -->
                    <div class="site-info">
                        <div class="col-full">
                            <div class="copyright">Copyright &copy; 2024 <a href="home-v1.html">Eragon.uz</a> Все права защищены»</div>
                            <!-- .copyright -->
                            <div class="credit">Сделано с
                                </i> Mitti.master</div>
                            <!-- .credit -->
                        </div>
                        <!-- .col-full -->
                    </div>
                    <!-- .site-info -->
                </div>
                <!-- .col-full -->
            </footer>
            <!-- .site-footer -->
        </div>
        
       
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();