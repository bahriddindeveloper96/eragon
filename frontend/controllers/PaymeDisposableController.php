<?php 
namespace frontend\controllers;

use common\models\Order;
use common\models\PaymeTransaction;
use common\models\Transaction;
use uzdevid\payme\merchant\disposable\DisposableAccount;
use uzdevid\payme\merchant\disposable\DisposableControllerInterface;

class PaymeDisposableController extends DisposableAccount implements DisposableControllerInterface {
    public function init(): void {
        $this->key = $_ENV['PAYME_TEST_KEY'];
       // $this->merchantId = '628783c3d7e616cbdee67d34'; // YOUR_MERCHANT_ID o'rniga sizning ma'lumotlaringizga mos "merchant ID" ni yozing
        parent::init();
    }

    function orderClass(): string {
        return Order::class;
    }

    function transactionClass(): string {
        return PaymeTransaction::class;
    }

    function allowPay($order): bool {
        return $order->status === TransactionService::ORDER_NEW;
    }

    function transactionCreated($order, $transaction): void {
        $order->status = TransactionService::ORDER_PENDING;
        $order->save();
    }

    function transactionPerformed($order, $transaction): void {
        /**
         * @var Order $order
         * @var PaymeTransaction $transaction
         */

        $model = new Transaction();
        $model->source = TransactionService::SOURCE_PAYME;
        $model->source_id = $transaction->id;
        $model->user_id = $order->user_id;
        $model->amount = $transaction->amount;
        $model->type = TransactionService::TYPE_TOP_UP;
        $model->create_time = time() * 1000;
        $model->save();

        $model = new Transaction();
        $model->source = TransactionService::SOURCE_ORDER;
        $model->source_id = $order->id;
        $model->user_id = $order->user_id;
        $model->amount = $transaction->amount;
        $model->type = TransactionService::TYPE_EXPENSE;
        $model->create_time = time() * 1000;
        $model->save();
        
        $order->status = TransactionService::ORDER_PAID;
        $order->save();
    }

    function allowRefund($order, $transaction): bool {
        return false; // qaytarishga ruxsat berilmagan, buni tizimingizga mos qilib o'zgartiring
    }

    function refund($order, $transaction): void {

    }

}