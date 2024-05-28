            <div class="col-full">
                <?php if(!empty($brands)):?>
                    <section class="brands-carousel">
                        <h2 class="sr-only">Brands Carousel</h2>
                        <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="brands">
                                <?php foreach($brands as $brand):?>
                                    <div class="item">
                                        <a href="shop.html">
                                            <figure>
                                                <figcaption class="text-overlay">
                                                    <div class="info">
                                                        <h4><?= $brand->name;?></h4>
                                                    </div>
                                                    <!-- /.info -->
                                                </figcaption>
                                                <!-- <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="/images/brands/1.png"> -->
                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/brand/' . $brand->icon, [
                                                                    'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                                    'width' => '145',
                                                                    'height' => '50',
                                                                    'alt' => "$brand->name",
                                                                ]) ?>
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- .item -->
                                    
                                <?php endforeach;?>    
                            </div>
                        </div>
                        <!-- .col-full -->
                    </section>
                <!-- .brands-carousel -->
                <?php endif;?>
            </div>
