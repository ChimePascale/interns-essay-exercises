<?php
 class CheckingAccount extends Account {
    public $fee;

    function __construct($balance,$fee){
        $this->balance =$balance;
        $this->fee = $fee;
     }
     function makeFee() {
       return $this->debit($fees);
     }  
  }
 ?>