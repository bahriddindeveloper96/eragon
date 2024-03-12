<div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
                                <ul class="product-categories ">
                                    <li class="product_cat">
                                        <span>Browse Categories</span>
                                        <ul>                                           
                                            <?php foreach ($categories as $category): ?>
                                                <li class="cat-item">
                                                    <a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$category->id]);?>">
                                                        <span class="no-child"></span><?= $category->name;?>
                                                    </a>
                                                </li>
                                            <?php endforeach;?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>