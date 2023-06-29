<?php
  class SavingAccount extends Account{
    public $interest;

    function __construct($balance,$interest){
        $this->balance = $balance;
        $this->interest = $interest;
     }
    function makeInterest(){
      $this->interest = ($balance*$interest)/100;
        return $this->credit($interest);
     }
     }
     
?>