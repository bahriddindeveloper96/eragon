<?php 
    use common\models\Category;
?>
<ul id="menu-departments-menu-1" class="nav">
<?php foreach ($categories as $category): ?>
        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
            <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$category->id]);?>"><?= $category->name_uz ?> <span class="caret"></span></a>
            <?php if (!empty($parent->parent_id)):?> 
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
                        <?php $children = Category::find()->where(['parent_id'=>$category->id])->all();?>                                   
                        
                        <div class="row yamm-content-row">
                        <?php foreach($children as $child):?>
                            <div class="col-md-6 col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc_text_block">
                                        <ul>
                                            <li class="nav-title"><a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$child->id]);?>"><?= $child->name_uz;?></a></li>
                                            <?php $child = Category::find()->where(['parent_id'=>$child->id])->all();?>
                                            <?php foreach($child as $child_par):?>
                                                <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id'=>$child_par->id]);?>"><?= $child_par->name;?></a></li>
                                            <?php endforeach;?>
                                                                              
                                        </ul>
                                    </div>                          
                                </div>                             
                            </div>  
                        <?php endforeach;?>                          
                        </div>                           
                    </div>                             
                </li>
            </ul>
            <?php endif;?>
        </li>
<?php endforeach;?>
</ul>