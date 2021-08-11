<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Métodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC"){
                $this->setSaldo(50);
            }elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fecha-la</p>";
            }elseif ($this->getSaldo() < 0) {
                echo "<p>Conta está em debito, impossivel encerrar</p>";
            }else{
                $this->setStatus(false);
            }
        }
        public function depositar($v){
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
            }else{
                echo "<p>Conta fechada, não consigo depositar</p>";
            }
        }
        public function sacar($v){
            if ($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo());
                }else{
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            }else{
                echo "<p>Não posso Sacar numa conta fechada</p>";
            }
        }
        public function pagarMensal(){
            if ($this->getTipo() == "CC"){
                $v = 12;
            }elseif ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "<p>Problemas na conta, não posso cobrar</p>";
            }
        }
        //Construtor, getters e setters
        function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso</p>";
        }
        function getnumConta(){
            return $this->numConta;
        }
        function setnumConta($n){
            $this->numConta = $n;
        }
        function getTipo(){
            return $this->tipo;
        }
        function setTipo($t){
            $this->tipo = $t;
        }
        function getDono(){
            return $this->dono;
        }
        function setDono($d){
            $this->dono = $d;
        }
        function getSaldo(){
            return $this->saldo;
        }
        function setSaldo($s){
            $this->saldo = $s;
        }
        function getStatus(){
            return $this->status;
        }
        function setStatus($S){
            $this->status = $S;
        }

    }
?>