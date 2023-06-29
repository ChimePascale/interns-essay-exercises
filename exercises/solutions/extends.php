<?php
  $withdrawals = new CheckingAccount("withdrawals");
  $deposits = new CheckingAccount("deposits");
  echo $withdrawal->makeFee();
  echo "<br>";
  echo $withdrawal->makeFee();
  $deposits = new SavingAccount("deposits");
  echo $deposits->makeInterest();
  $withdrawals = new Account("withdrawals");
  $deposits = new Account("deposits");
  echo $withdrawal->debit();
  echo $deposits->debit();
?>