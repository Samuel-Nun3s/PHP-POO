<?php 
    class BankAccount { // Conta do banco
        // Attributes:
        public $numAccount; // Numero da conta
        protected $type; // Tipo (Corrente = CC / Poupança = CP)
        private $owner; // Dono
        private $balance; // Saldo
        private $status; // Status (Aberta/Fechada)

        // Methods:
        // Constructor:
        public function __construct() {
            $this->balance = 0;
            $this->status = false;
            echo "<p>Conta criada com sucesso!</p>";
        }

        // Specifics:
        public function openAccount($t) {
            $this->setType($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setBalance(50);
            } elseif ($t == "CP") {
                $this->setBalance(150);
            }
        }

        public function closeAccount() {
            if ($this->getBalance() > 0) {
                echo "<p>Conta ainda tem dinheiro, não pode ser fechada!</p>";
            } elseif ($this->getBalance() < 0) {
                echo "<p>Conta está em débito, não pode ser fechada!</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function deposit($v) {
            if ($this->getStatus()) {
                $this->setBalance($this->getBalance() + $v);
                echo "<p>Depósito de R$ $v na conta de " . $this->getOwner() . "</p>";
            } else {
                echo "<p>Impossivel depositar</p>";
            }
        }

        public function withdraw($v) {
            if ($this->getStatus()) {
                if ($this->getBalance() >= $v) {
                    $this->setBalance($this->getBalance() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de " . $this->getOwner() . "</p>";
                } else {
                    echo "<p>Saldo insuficiente!</p>";
                }
            } else {
                "<p>Impossivel sacar</p>";
            }
        }

        public function payMonthlyFee() {
            if ($this->getType() == "CC") {
                $v = 12;
            } elseif ($this->getType() == "CP") {
                $v = 20;
            }

            if ($this->getStatus()) {
                if ($this->getBalance() > $v) {
                    $this->setBalance($this->getBalance() - $v);
                    echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getOwner() . "</p>";
                } else {
                    echo "<p>Saldo insuficiente!</p>";
                }
            } else {
                echo "<p>Impossivel Pagar!</p>";
            }
        }

        // Getters:
        public function getNumAccount() {
            return $this->numAccount;
        }

        public function getType() {
            return $this->type;
        }

        public function getOwner() {
            return $this->owner;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function getStatus() {
            return $this->status;
        }
  
        // Setters:
        public function setNumAccount($n) {
            $this->numAccount = $n;
        }

        public function setType($t) {
            $this->type = $t;
        }

        public function setOwner($o) {
            $this->owner = $o;
        }

        public function setBalance($b) {
            $this->balance = $b;
        }

        public function setStatus($s) {
            $this->status = $s;
        }
    }
?>