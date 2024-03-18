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
use app\components\MiniCartWidget;
use yii\bootstrap5\Modal;

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
                            <a href="<?= \yii\helpers\Url::home(); ?>" class="custom-logo-link" rel="home">
                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/logo.png') ?>
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
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
                            <ul class="site-header-cart header-wishlist">
                                <li class="nav-item-center">
                                        <a title="My Account" href="login-and-register.html">
                                            <i class="tm tm-login-register"></i>Регистер и войти</a>
                                </li>
                            </ul>
                            <ul id="site-header-cart" class="site-header-cart menu">
                                <li class="animate-dropdown dropdown ">
                                    <a class="cart-contents" onclick="return getCart()" href="#" data-toggle="dropdown" title="View your shopping cart">
                                        <i class="tm tm-shopping-bag"></i>
                                        <span class="cart-count">0</span>
                                        <span class="amount">
                                            <span class="price-label">Корзина</span><span class="cart-sum">$0</span></span>
                                    </a>
                                    <!--?= MiniCartWidget::widget() ?-->
                                    
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
                            <a href="<?= \yii\helpers\Url::home(); ?>" class="custom-logo-link" rel="home">
                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/logo.png') ?>
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
                                        <form role="search" method="get" class="woocommerce-product-search" action="<?= \yii\helpers\Url::to(['category/search']);?>">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="" value="<?= htmlspecialchars("Search products") ?>" name="q" />
                                            <input type="submit" value="Search" />                                            
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
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
            <!-- .header-v1 -->
            <?= $content;?>
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
            //'toggleButton' => ['label' => 'Click me'],
           // 'size' => 'modal-sm',
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