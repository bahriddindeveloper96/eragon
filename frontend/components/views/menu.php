                        
                        <?php 
                        use common\models\Category;
                        ?>
                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            <?php foreach ($categories as $category): ?>
                                <!--li class="menu-item menu-item-type-custom animate-dropdown">
                                    <a title="Gadgets" href="landing-page-v1.html"></a>
                                </li-->
                                
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                    <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#"><?= $category->name ?> <span class="caret"></span></a>
                                       
                                    <?php
                                    
                                    if (!empty($parent->parent_id)):?>        
                                        <ul role="menu" class=" dropdown-menu">                                            
                                            <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                        <div class="kc-col-container">
                                                            <div class="kc_single_image">
                                                                <img src="images/megamenu.jpg" class="" alt="" />
                                                            </div>
                                                            <!-- .kc_single_image -->
                                                        </div>
                                                        <!-- .kc-col-container -->
                                                    </div>
                                                    <!-- .bg-yamm-content -->
                                                    <div class="row yamm-content-row">
                                                    <?php $children = Category::find()->where(['parent_id'=>$category->id])->all();?>
                                                        <?php foreach($children as $child):?>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="kc-col-container">
                                                                <div class="kc_text_block">
                                                                    <ul>
                                                                        
                                                                        <li class="nav-title"><?= $child->name;?></li>
                                                                            <?php $child = Category::find()->where(['parent_id'=>$child->id])->all();?>
                                                                            <?php foreach($child as $child_par):?>
                                                                                <li><a href="shop.html"><?= $child_par->name;?></a></li>
                                                                            <?php endforeach;?>
                                                                        
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <!-- .kc_text_block -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <?php endforeach;?>
                                                        <!-- .kc_column -->
                                                    </div>
                                                    <!-- .kc_row -->
                                                </div>
                                                <!-- .yamm-content -->
                                            </li>
                                            
                                        </ul>
                                    <?php endif;?>
                                </li> 
                            <?php endforeach; ?>
                        </ul>