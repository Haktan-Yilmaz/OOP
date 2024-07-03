<?php
class Bankaccount {
    private $balance;
    private $accountNumber;

    // Constructor to initialize balance and account number
    public function __construct($balance, $accountNumber) {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
    }

    // Method to set the account number
    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
        return "Uw bankaccount nummer is gewijzigd in: $accountNumber";
    }

    // Method to get the account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Method to set the balance
    public function setBalance($balance) {
        $this->balance = $balance;
    }

    // Method to get the balance
    public function getBalance() {
        return "Uw huidige saldo is: € " . number_format($this->balance, 2, ',', '.');
    }

    // Method to deposit money
    public function deposit($amount) {
        $this->balance += $amount;
        return "U heeft € " . number_format($amount, 2, ',', '.') . " op uw bankaccount gezet. Uw huidige saldo is: € " . number_format($this->balance, 2, ',', '.');
    }

    // Method to withdraw money
    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return "U heeft € " . number_format($amount, 2, ',', '.') . " opgenomen. Uw huidige saldo is: € " . number_format($this->balance, 2, ',', '.');
        } else {
            return "U heeft onvoldoende saldo om € " . number_format($amount, 2, ',', '.') . " op te nemen.";
        }
    }
}

// Testing the Bankaccount class

// Creating a new bank account
$account = new Bankaccount(50.00, 123456);
echo "Uw bankaccount nummer is: " . $account->getAccountNumber() . "<br>";
echo $account->getBalance() . "<br>";

// Withdrawing money
echo $account->withdraw(15) . "<br>";
echo $account->getBalance() . "<br>";

// Depositing money
echo $account->deposit(20) . "<br>";
echo $account->getBalance() . "<br>";

// Trying to withdraw more than the balance
echo $account->withdraw(100) . "<br>";
echo $account->getBalance() . "<br>";

// Changing the account number
echo $account->setAccountNumber(98765) . "<br>";
echo $account->getBalance() . "<br>";
?>
