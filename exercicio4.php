
<?php
class Pedido{
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;
// Métodos
public function adicionarItem($valor){
    $this->valor += $valor;
}
public function cancelar(){
    $this->status = "Cancelado";
}
public function finalizar(){
    $this->status = "Finalizado";
}

// Exibir os dados
public function exibirResumo(){
    echo "<p><b>Número:</b> " . $this->numero . "</p>";
    echo "<p><b>Cliente:</b> " . $this->cliente . "</p>";
    echo "<p><b>Valor:</b> R$ " . number_format($this->valor, 2, ',', '.') . "</p>";
    echo "<p><b>Status:</b> " . $this->status . "</p>";
    }
}
// Pedido 1
$Pedido1 = new Pedido();

$Pedido1->numero = 1;
$Pedido1->cliente = "Allana";
$Pedido1->valor = 100.00;
$Pedido1->status = "Aguardando";

// Métodos Pedido 1
$Pedido1->adicionarItem(50.00);
$Pedido1->finalizar();

// Exibindo informações 1
echo "<h2>Pedido 1</h2>";
$Pedido1->exibirResumo();

echo "<hr>";

// Pedido 2
$Pedido2 = new Pedido();

$Pedido2->numero = 2;
$Pedido2->cliente = "Lucas";
$Pedido2->valor = 80.00;
$Pedido2->status = "Aguardando";

// Métodos Pedido 2
$Pedido2->adicionarItem(17.50);
$Pedido2->cancelar();

// Exibindo informações do Pedido 2
echo "<h2>Pedido 2</h2>";
$Pedido2->exibirResumo();

?>