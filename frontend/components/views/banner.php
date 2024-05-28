<?php if(!empty($banners)):?>
    <div class="home-v1-slider home-slider">
        <?php foreach($banners as $banner):?>
            <div class="slider-1" style="background-image: url(<?= Yii::getAlias('@fileUrl') ?>/backend/web/uploads/banner/<?= $banner->background ?>);">
                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/banner/' . $banner->photo, [
                                    'width' => '600',
                                    'height' => '600',
                                    'alt' => "$banner->name",
                                ]) ?>
                <div class="caption">
                    <div class="title"><?= $banner->name;?></div>
                    <div class="sub-title"><?= $banner->description;?></div>
                    <div class="button">Batafsil
                        <i class="tm tm-long-arrow-right"></i>
                    </div>
                    <!-- <div class="bottom-caption">Free shipping on US Terority</div> -->
                </div>
            </div>
            <!-- .slider-1 -->
            <!-- <div class="slider-1 slider-2" style="background-image: url(images/eragon/home-v2-background.jpg);">
                <img src="/images/eragon/banner-2.png" alt="">
                <div class="caption">
                    <div class="title">The new-tech gift you
                        <br> are wishing for is
                        <br> right here</div>
                    <div class="sub-title">Big screens in incredibly slim designs
                        <br>that in your hand.</div>
                    <div class="button">Browse now
                        <i class="tm tm-long-arrow-right"></i>
                    </div>
                    <div class="bottom-caption">Free shipping on US Terority </div>
                </div>
            </div> -->
            <!-- .slider-2 -->
        <?php endforeach;?>
        
    </div>
<?php endif;?>