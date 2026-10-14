<?php
class ContaBancaria{
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

// Métodos
    public function depositar($valor){
        $this->saldo += $valor;
        echo "Deposito realizado. Saldo atual: R$" . $this->saldo . "<br>";
    }
    public function sacar($valor){
        $this->saldo -= $valor;
        echo "Saque realizado. Saldo atual: R$" . $this->saldo . "<br>";
    }
    public function consultarSaldo(){
       echo "Seu saldo é: R$" . $this->saldo . "<br>";
    }
}
$contaBancaria1 = new ContaBancaria();

$contaBancaria1->titular = "Allana Mourão";
$contaBancaria1->numero = 123;
$contaBancaria1->saldo = 200.00;
$contaBancaria1->tipo = "Corrente";

// Exibindo informações
echo "<p><b>Conta Bancária 1</b></p>";
echo "<p>Titular: ". $contaBancaria1->titular . "</p>";
echo "<p>Número da conta: ". $contaBancaria1->numero . "</p>";
echo "<p>Saldo disponível: ". $contaBancaria1->saldo . "</p>";
echo "<p>Tipo da conta: ". $contaBancaria1->tipo ."</p>";

// Ações conta1
$contaBancaria1->depositar(100);
$contaBancaria1->sacar(10);
$contaBancaria1->consultarSaldo();

// Conta 2
$contaBancaria2 = new ContaBancaria();

$contaBancaria2->titular = "Lucas Pietro";
$contaBancaria2->numero = 456;
$contaBancaria2->saldo = 5000.30;
$contaBancaria2->tipo = "Poupança";

// Exibindo informações
echo "<p><b>Conta Bancária 1</b></p>";
echo "<p>Titular: ". $contaBancaria2->titular . "</p>";
echo "<p>Número da conta: ". $contaBancaria2->numero . "</p>";
echo "<p>Saldo disponível: ". $contaBancaria2->saldo . "</p>";
echo "<p>Tipo da conta: ". $contaBancaria2->tipo ."</p>";

// Ações conta2
$contaBancaria2->sacar(100);
$contaBancaria2->depositar(400);
$contaBancaria2->consultarSaldo();
?>