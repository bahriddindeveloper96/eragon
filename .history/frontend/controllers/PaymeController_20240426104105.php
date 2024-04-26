<?php 
namespace app\controllers;

use uzdevid\payme\merchant\disposable\DisposableAccount;
use uzdevid\payme\merchant\disposable\SavingsControllerInterface;

class PaymeController extends DisposableAccount implements DisposableControllerInterface {
    
    public function init(): void {
        $this->key = "{payme kaliti}";
        parent::init();
    }

   function orderClass(): string {
        // TODO: Implement orderClass() method.
    }

    function transactionClass(): string {
        // TODO: Implement transactionClass() method.
    }

    function transactionCreated($order, $transaction): void {
        // TODO: Implement transactionCreated() method.
    }

    function transactionPerformed($order, $transaction): void {
        // TODO: Implement transactionPerformed() method.
    }

    function allowRefund($order, $transaction): bool {
        // TODO: Implement allowRefund() method.
    }

    function refund($order, $transaction): void {
        // TODO: Implement refund() method.
    }
}
?>