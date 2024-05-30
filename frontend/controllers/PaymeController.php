<?php 
namespace frontend\controllers;
use uzdevid\payme\merchant\savings\SavingsAccount;
use uzdevid\payme\merchant\savings\SavingsControllerInterface;
use common\models\User;
use common\models\Order;
use common\models\Transaction;
use common\models\service\TransactionService;
use common\models\PaymeTransaction;
class PaymeController extends SavingsAccount implements SavingsControllerInterface {
    
    public function init(): void {
        $this->key = "{payme kaliti}";
        parent::init();
    }

    public function userClass(): string {
        return User::class;
        // TODO: Implement userClass() method.
    }

    public function transactionClass(): string {
       return PaymeTransaction::class;
    }

    public function userBalance(int $userId): int {
       return 0;
    }

    public function checkAmount(int $amount): bool {
        return $amount > 100000 && $amount < 100000000;
        // TODO: Implement checkAmount() method.
    }

    public function allowTransaction(array $payload): bool {
        return true;
    }

    public function transactionPerformed($transaction): void {
        // TODO: Implement transactionCreated() method.
        $model = new Transaction();
        $model->source = 'payme';
        $model->source_id = $transaction->id;
        $model->user_id = $transaction->user_id;
        $model->amount = $transaction->amount;
        $model->type = 'top-up';
        $model->create_time = time() * 1000;
        $model->save();
    }

    public function allowRefund($transaction): bool {
        // TODO: Implement allowRefund() method.
        return true;
    }

    public function refund($transaction): void {
        $model = new Transaction();        
        $model->user_id = $transaction->user_id;
        $model->amount = $transaction->amount;
        $model->type = 'refund';       
        $model->save();
    }
}