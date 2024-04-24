<?php 
    use common\models\Category;
?>
<nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary" data-nav="flex-menu">
     <ul id="menu-navbar-primary" class="nav yamm">            
        <?php $i = 1; foreach ($categories as $category): ?>            
            <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                <a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$category->id]);?>"><?= $category->name_uz ?><span class="caret"></span></a>
                <?php if (!empty($parent->parent_id)):?>
                    <ul role="menu" class=" dropdown-menu">
                        <li class="menu-item menu-item-object-static_block animate-dropdown">
                            <div class="yamm-content">
                                <div class="tm-mega-menu">
                                    <?php $children = Category::find()->where(['parent_id'=>$category->id])->all();?>
                                    <?php foreach($children as $child):?>
                                        <div class="widget widget_nav_menu">
                                            <ul class="menu">
                                                <li class="nav-title menu-item">
                                                    <a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$child->id]);?>"><?= $child->name;?></a>
                                                </li>
                                                <?php $child = Category::find()->where(['parent_id'=>$child->id])->all();?>
                                                <?php foreach($child as $child_par):?>
                                                    <li class="menu-item"><a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$child_par->id]);?>"><?= $child_par->name;?></a></li>
                                                <?php endforeach;?>
                                            </ul>
                                                                <!-- .menu -->
                                        </div>
                                    <?php endforeach;?>   
                                </div>
                                                    <!-- .tm-mega-menu -->
                            </div>
                                                <!-- .yamm-content -->
                        </li>
                                            <!-- .menu-item -->
                    </ul>
                <?php endif;?>
                                            <!-- .dropdown-menu -->
            </li>           
        <?php endforeach;?>
        <?php if(count($categories) > 8):?>
            <li class="techmarket-flex-more-menu-item dropdown">
                <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                <ul class="overflow-items dropdown-menu"></ul>
            </li>
            <?php endif;?>
     </ul>
                                <!-- .nav -->
    </nav>