<?php 
    class Bank2{
        public $accno;
        public $name;
        public $balance = 0;

        function __construct($accno, $name){
            $this->accno = $accno;
            $this->name = $name;
        }

        function depositAmount($amt){
            $this->balance = $amt + $this->balance;
            return $this;
        }

        function deductAmount($amt){
            if($this->balance > $amt){
                $this->balance = $this->balance - $amt;
                return $this;
            }else{
                echo "$this->name does not have enough on account: $this->accno, you cannot deduct $amt USD" . PHP_EOL;
                return $this;
            }
        }

        function checkBalance(){
            echo "The user $this->name has $this->balance USD on account number: $this->accno";
            return $this; 
        }
    };

    $user = new Bank2("101", "Alex Csanyi");
    $user -> depositAmount(50)->checkBalance();
    $user -> deductAmount(5)->checkBalance();

?>