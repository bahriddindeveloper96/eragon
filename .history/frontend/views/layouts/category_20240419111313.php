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
use app\components\miniMenuWidget;
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
        <title>Eragon uz</title>
      
        
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="/images/fav-icon.png">
        <?php $this->head() ?>
    </head>
    <body class="woocommerce-active left-sidebar">
    <?php $this->beginBody() ?>
        <div id="page" class="hfeed site">
            <div class="top-bar top-bar-v1">
            <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html"><?= Yii::t('app', 'Доставим ваш заказ бесплатно - всего за 3 день!') ?></a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="shop.html"><?= Yii::t('app', 'Вопрос-ответ') ?></a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="track-your-order.html"><?= Yii::t('app', 'Мои заказы') ?></a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-487 animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                                <i class="tm tm-language"></i><?= Yii::t('app', 'Языки') ?>
                                <span class="caret"></span>
                            </a>
                            
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-489 animate-dropdown">
                                    <?= Html::a(Yii::t('app', 'УЗ'), Url::to(['/site/set-language', 'lang' => 'uz'])); ?>
                                    <?= Html::a(Yii::t('app', 'РУ'), Url::to(['/site/set-language', 'lang' => 'ru'])); ?>
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
                                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="q" placeholder="<?= Yii::t('app', 'Искать товары и категории') ?>" />
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
                            <?php if(Yii::$app->user->isGuest): ?>                               
                                <ul class="site-header-cart header-wishlist">
                                    <li class="nav-item-center">
                                        <?php echo Html::beginForm(['/site/login'], 'get'); ?>
                                            <a title="My Account" href="<?= Url::to(['/site/login']) ?>">
                                                <i class="tm tm-login-register"></i><?= Yii::t('app', 'Вход') ?>
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
                                                    <a title="Кабинет" href="<?= Url::to(['/site/cabinet']) ?>"><?= Yii::t('app', 'Кабинет') ?></a>
                                                </li>
                                                <li class="menu-item">
                                                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                        <a title="Кабинет" data-method="post" href="<?= Url::to(['/site/logout'])  ?>"><?= Yii::t('app', 'Выход') ?></a>
                                                    <?= Html::endForm() ?>
                                                </li>     
                                            </ul>
                                                        <!-- .dropdown-menu -->
                                        </li>
                                </ul>
                            <?php endif; ?>
                            <ul id="site-header-cart" class="site-header-cart menu">
                                <li class="animate-dropdown dropdown ">
                                    <a class="cart-contents" onclick="return getCart()" href="#" data-toggle="dropdown" title="View your shopping cart">
                                        <i class="tm tm-shopping-bag"></i>
                                        <span class="cart-count">0</span>
                                        <span class="amount">
                                            <span class="price-label"><?= Yii::t('app', 'Корзина') ?></span><span class="cart-sum">$0</span></span>
                                    </a>
                                    <!--?= MiniCartWidget::widget() ?-->
                                    
                                    <!-- .dropdown-menu-mini-cart -->
                                </li>
                            </ul> 
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                    <div class="row">
                        <div class="row">
                            <?= miniMenuWidget::widget() ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.row -->
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
                                                            <a title="Кабинет" href="<?= Url::to(['/site/cabinet']) ?>"><?= Yii::t('app', 'Кабинет') ?></a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                                <a title="Кабинет" data-method="post" href="<?= Url::to(['/site/logout'])  ?>"><?= Yii::t('app', 'Выход') ?></a>
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
                                            <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="<?= Yii::t('app', 'Искать товары и категории') ?>" value="" name="q" />
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
                                                <span class="call-us-title"><?= Yii::t('app', 'ЕСТЬ ВОПРОСЫ? ЗВОНИТЕ НАМ 24/7!') ?></span>
                                                <span class="call-us-text">(+998) 99 896 9616, (+998) 99 755 0599</span>
                                                <address class="footer-contact-address"><?= Yii::t('app', '15 улица Лутфий, район Учтепинский, Ташкент, UZ') ?></address>
                                                <a href="#" class="footer-address-map-link">
                                                    <i class="tm tm-map-marker"></i><?= Yii::t('app', 'Найдите нас на карте') ?></a>
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
                                                <h5 class="footer-payment-info-title"><?= Yii::t('app', 'МЫ ИСПОЛЬЗУЕМ БЕЗОПАСНЫЕ ПЛАТЕЖИ') ?></h5>
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
                                                    <h6 class="footer-secured-by-title"><?= Yii::t('app', 'Обеспечено:') ?></h6>
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
                                            <h4 class="widget-title"><?= Yii::t('app', 'Найдите это быстро') ?></h4>
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
                                            <h4 class="widget-title"><?= Yii::t('app', 'Обслуживание клиентов') ?></h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">
                                                    <li class="menu-item">
                                                        <a href="#"><?= Yii::t('app', 'Мой счет') ?></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#"><?= Yii::t('app', 'Отследить ваш заказ') ?></a>
                                                    </li>
                                                    
                                                    <li class="menu-item">
                                                        <a href="#"><?= Yii::t('app', 'Избранное') ?></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#"><?= Yii::t('app', 'О нас') ?></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#"><?= Yii::t('app', 'Возврат/Обмен') ?></a>
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
                            <div class="copyright">Copyright &copy; 2024 <a href="home-v1.html">Eragon.uz</a> <?= Yii::t('app', 'Все права защищены') ?></div>
                            <!-- .copyright -->
                            <div class="credit"><?= Yii::t('app', 'Сделано с Mitti.master') ?></div>
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
            'title' => '<h2>'.\Yii::t('app', 'Корзина').'</h2>',            
            //'toggleButton' => ['label' => 'Click me'],
           // 'size' => 'modal-sm',
            'id' => 'cart',
            'footer' => '<button type="button" class="btn btn-default" data-bs-dismiss="modal">'.\Yii::t('app', 'Покупка').'</button>
            <button type="button" class="btn btn-danger" onclick="clearCart()">'.\Yii::t('app', 'Очистить корзину').'</button>
            <a href="'. \yii\helpers\Url::to(['cart/view']) .'" class="btn btn-primary">'.\Yii::t('app', 'Оформить заказ').'</a>'
            ]);           

            Modal::end();
            ?>
                  
        
       
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();