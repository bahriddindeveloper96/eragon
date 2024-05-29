<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive mt-3">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th><span class="fa fa-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?> 
                <?php 
                    $lastPhotoId = null; // Boshlang'ich qiymat null bo'lishi kerak
                    foreach($item['photo'] as $photo) {
                        $lastPhotoId = $photo['photo']; // Har bir bosilganing id sini saqlash
                    }
                ?>             
                
                <tr>                    
                    <td><?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $lastPhotoId, ['height' => '50','alt' => "$lastPhotoId",]) ?></td>                                           
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['price']?></td>
                    <td><span data-id="<?= $id?>" class="fa fa-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Итого: </td>
                <td id="cart-qty"><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму: </td>
                <td id="cart-sum">$<?= $session['cart.sum']?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>