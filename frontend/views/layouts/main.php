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
use app\components\MiniCartWidget;
use yii\bootstrap5\Modal;
use yii\helpers\Url;
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
    <body class="woocommerce-active single-product full-width normal">
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
            <header id="masthead" class="site-header header-v2" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="site-branding">
                                    <a href="<?= \yii\helpers\Url::home(); ?>" class="custom-logo-link" rel="home">
                                    <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/logo.png') ?>
                                    </a>
                                    <!-- /.custom-logo-link -->
                            </div> 
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div id="departments-menu" class="dropdown departments-menu">
                                <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="tm tm-departments-thin"></i>
                                    <span>Каталог</span>
                                </button>
                                <?= MenuWidget::widget() ?>
                            </div>
                            <!-- .departments-menu -->
                            <form class="navbar-search" method="get" action="<?= \yii\helpers\Url::to(['category/search']);?>">
                                    <label class="sr-only screen-reader-text" for="search"></label>
                                    <div class="input-group">
                                        <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="q" placeholder="Искать товары и категории" />
                                        <!-- .input-group-addon -->
                                        <div class="input-group-btn input-group-append">                                        
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-search"></i>
                                                <span class="search-btn">Поиск</span>
                                            </button>
                                        </div>
                                        <!-- .input-group-btn -->
                                    </div>
                                <!-- .input-group -->
                            </form>
                            <!-- .navbar-search -->
                            <?php if(Yii::$app->user->isGuest): ?>                               
                                    <ul class="site-header-cart header-wishlist">
                                        <li class="nav-item-center mt-3">
                                            <?php echo Html::beginForm(['/site/login'], 'get'); ?>
                                                <a title="My Account" href="<?= Url::to(['/site/login']) ?>">
                                                    <i class="tm tm-login-register"></i>Аккаунт
                                                </a>
                                            <?php echo Html::endForm(); ?>
                                        </li>                          
                                    </ul>
                                    <?php else: ?>
                                    
                                    <ul class="site-header-cart header-wishlist">
                                            <li class="nav-item-center">
                                                <a title="Кабинет" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                                <i class="tm tm-login-register"></i><?php echo Yii::$app->user->identity->username;?>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li class="menu-item">
                                                        <a title="Кабинет" href="<?= Url::to(['/site/cabinet']) ?>">Кабинет</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                            <a title="Кабинет" data-method="post" href="<?= Url::to(['/site/logout'])  ?>">Выход</a>
                                                        <?= Html::endForm() ?>
                                                    </li>     
                                                </ul>
                                                            <!-- .dropdown-menu -->
                                            </li>
                                    </ul>
                            <?php endif; ?>
                            <!-- <ul class="site-header-cart header-wishlist">
                                <li class="nav-item">
                                        <a href="wishlist.html">
                                            <i class="tm tm-favorites"></i>
                                            <span id="top-cart-wishlist-count" class="value">3</span>
                                        </a>
                                </li>
                            </ul>             -->
                            <ul id="site-header-cart" class="site-header-cart menu">
                                    <li class="animate-dropdown dropdown ">
                                        <a class="cart-contents" onclick="return getCart()" href="#" data-toggle="dropdown" title="View your shopping cart">
                                            <i class="tm tm-shopping-bag"></i>
                                            <span class="cart-count">0</span>
                                            <span class="amount">
                                                <span class="price-label">Корзина</span><span class="cart-sum">$0</span></span>
                                        </a>
                                        
                                        <!--?= MiniCartWidget::widget() ?-->
                                    </li>
                            </ul> 
                            <!-- .site-header-cart -->
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row mt-4">
                        <div class="row">
                            <nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary" data-nav="flex-menu">
                                <ul id="menu-navbar-primary" class="nav yamm">
                                    <li class="menu-item animate-dropdown">
                                        <a title="ALL CATEGORIES" href="product-category.html">ALL CATEGORIES</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="COMPUTERS &amp; LAPTOPS" href="product-category.html">COMPUTERS &#038; LAPTOPS</a>
                                    </li>
                                    <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Pages <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="tm-mega-menu">
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Home Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v1.html">Home v1</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v2.html">Home v2</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v3.html">Home v3</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v4.html">Home v4</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v5.html">Home v5</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v6.html">Home v6</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v7.html">Home v7</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v8.html">Home v8</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v9.html">Home v9</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v10.html">Home v10</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v11.html">Home v11</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v12.html">Home v12</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v13.html">Home v13</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="home-v14.html">Home v14</a>
                                                                </li>
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>
                                                        <!-- .widget_nav_menu -->
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Landing Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="landing-page-v1.html">Landing v1</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="landing-page-v2.html">Landing v2</a>
                                                                </li>
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Shop Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop.html">Shop</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-extended.html">Shop Extended</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-listing.html">Shop Listing</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-listing-large.html">Shop Listing Large</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-listing-with-product-sidebar.html">Shop Listing with Product Sidebar</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="product-category.html">Categories</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="shop-fullwidth.html">Shop Full Width</a>
                                                                </li>
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>
                                                        <!-- .widget_nav_menu -->
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Single Product Pages</a>
                                                                </li>
                                                                <li class="menu-item menu-item-object-product">
                                                                    <a href="single-product-sidebar.html">Single Product Sidebar</a>
                                                                </li>
                                                                <li class="menu-item menu-item-object-product">
                                                                    <a href="single-product-fullwidth.html">Single Product Fullwidth</a>
                                                                </li>
                                                                <li class="menu-item menu-item-object-product">
                                                                    <a href="single-product-extended.html">Single Product Extended</a>
                                                                </li>
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Ecommerce Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="cart.html">Cart</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="checkout.html">Checkout</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="login-and-register.html">My Account</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="compare.html">Compare</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="wishlist.html">Wishlist</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="track-your-order.html">Track Order</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="terms-and-conditions.html">Terms and Conditions</a>
                                                                </li>
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>
                                                        <!-- .widget_nav_menu -->
                                                        <div class="widget widget_nav_menu">
                                                            <ul class="menu">
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Blog Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="blog-v1.html">Blog v1</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="blog-v2.html">Blog v2</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="blog-v3.html">Blog v3</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="blog-fullwidth.html">Blog Full Width</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="blog-single.html">Single Blog Post</a>
                                                                </li>
                                                                <li class="nav-title menu-item">
                                                                    <a href="#">Other Pages</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="about.html">About Us</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="contact-v1.html">Contact v1</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="contact-v2.html">Contact v2</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="faq.html">FAQ</a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="404.html">404</a>
                                                                </li>
                                                            </ul>
                                                            <!-- .menu -->
                                                        </div>
                                                        <!-- .widget_nav_menu -->
                                                    </div>
                                                    <!-- .tm-mega-menu -->
                                                </div>
                                                <!-- .yamm-content -->
                                            </li>
                                            <!-- .menu-item -->
                                        </ul>
                                        <!-- .dropdown-menu -->
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="CAMERAS &amp; PHOTO" href="product-category.html">CAMERAS &#038; PHOTO</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="PHONES &amp; TABLETS" href="product-category.html">PHONES &#038; TABLETS</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="GAMES &amp; CONSOLES" href="product-category.html">GAMES &#038; CONSOLES</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="TV &amp; AUDIO" href="product-category.html">TV &#038; AUDIO</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="CAR ELECTRONIC &amp; GPS" href="product-category.html">CAR ELECTRONIC &#038; GPS</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="ACCESORIES" href="product-category.html">ACCESORIES</a>
                                    </li>
                                    <li class="techmarket-flex-more-menu-item dropdown">
                                        <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                        <ul class="overflow-items dropdown-menu"></ul>
                                    </li>
                                </ul>
                                <!-- .nav -->
                            </nav>
                            <!-- .navbar-primary -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <!--Mobile-->
                        <div class="row">
                            <div class="site-branding">
                                <a href="<?= \yii\helpers\Url::home(); ?>" class="custom-logo-link" rel="home">
                                     <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/logo.png') ?>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <!-- <li class="my-account">
                                        <a href="login-and-register.html" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li> -->
                                    <?php if(Yii::$app->user->isGuest): ?>                               
                                        
                                            <li class="my-account">
                                                <?php echo Html::beginForm(['/site/login'], 'get'); ?>
                                                    <a class="has-icon" title="My Account" href="<?= Url::to(['/site/login']) ?>">
                                                        <i class="tm tm-login-register"></i>
                                                    </a>
                                                <?php echo Html::endForm(); ?>
                                            </li>                          
                                        
                                        <?php else: ?>
                                                <li class="my-account">
                                                    <a class="has-icon" title="Кабинет" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                                    <i class="tm tm-login-register"></i><?php echo Yii::$app->user->identity->username;?>
                                                        <span class="caret"></span>
                                                    </a>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li class="menu-item">
                                                            <a title="Кабинет" href="<?= Url::to(['/site/cabinet']) ?>">Кабинет</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                                <a title="Кабинет" data-method="post" href="<?= Url::to(['/site/logout'])  ?>">Выход</a>
                                                            <?= Html::endForm() ?>
                                                        </li>     
                                                    </ul>
                                                                <!-- .dropdown-menu -->
                                                </li>
                                    <?php endif; ?>
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
                                        <form role="search" method="get" class="woocommerce-product-search" action="<?= \yii\helpers\Url::to(['category/search']);?>">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0"></label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Искать товары и категории" value="" name="q" />
                                            <input type="submit" value="Поиск" />                                            
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" onclick="return getCart()" href="#"  title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="cart-count">0</span>
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
           
           <?=$content;?>
            <!-- #content -->
            <footer class="site-footer footer-v1">
                <div class="col-full">
                    <!-- .before-footer-wrap -->
                    <div class="footer-widgets-block">
                        <div class="row">
                            <div class="footer-contact col-6">
                                <div class="footer-logo">
                                    <a href="<?= \yii\helpers\Url::home(); ?>" class="custom-logo-link" rel="home">
                                        <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/logo.png') ?>
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
        <?php Modal::begin([
            'title' => '<h2>Корзина</h2>', 
            'id' => 'cart',
            'footer' => '<button type="button" class="btn btn-default" data-bs-dismiss="modal">Покупка</button>
            <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            <a href="'. \yii\helpers\Url::to(['cart/view']) .'" class="btn btn-primary">Оформить заказ</a>'
            ]);           

            Modal::end();
            ?>
        
        <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();