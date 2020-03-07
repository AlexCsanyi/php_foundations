<?php 
    class Bank{
        public $accno;
        public $name;
        public $balance = 0;

        function depositAmount($amt): int{
            $this->balance = $amt + $this->balance;
            return $this->balance;
        }

        function deductAmount($amt){
            if($this->balance > $amt){
                $this->balance = $this->balance - $amt;
                return $this->balance;
            }else{
                echo "$this->name does not have enough on account: $this->accno, you cannot deduct $amt USD" . PHP_EOL;
                return;
            }
        }

        function checkBalance(){
            echo "The user $this->name has $this->balance USD on account number: $this->accno";
        }
    };

    $user = new Bank();
    $user -> accno = 101;
    $user -> name = "Alex Csanyi";
    $user -> depositAmount(0);
    $user -> deductAmount(5);
    $user -> checkBalance();

?>