<?php
    class Account{
        public $balance;

        public function __construct($balance) {
            $this->balance = $balance;
        }
        public function credit($deposit) {
          return $this->balance += $deposits;
          echo "Account was credited" . $deposit . "Your new balance is" . $balance;
        }
        public function debit($withdrawal) {
          return $this->balance -=$withdrawals;
          echo "Account was debited" . $withdrawal. "Your new balance is" . $balance;
        }
    }
?>