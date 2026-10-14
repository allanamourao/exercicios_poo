<?php
class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;

// Métodos
    public function ligar(){
        $this->ligado = true;
        echo "O celular foi ligado.<br>";
    }
    public function desligar(){
        $this->ligado = false;
        echo "O celular foi desligado.<br>";
    }
    public function user($consumo){
       $this->bateria -= $consumo;
       echo "A bateria atual é: " . $this->bateria . "%<br>";
    }
    public function carregar($carga){
       $this->bateria += $carga;
       if ($this->bateria < 0) {
    $this->bateria = 0;
    }
       if ($this->bateria > 100) {
    $this->bateria = 100;
    }

    echo "Celular carregado. Bateria: " . $this->bateria . "%<br>";
    }
}
$celular1 = new Celular();

$celular1->marca = "Apple";
$celular1->modelo = "Iphone 17";
$celular1->cor = "Laranja";
$celular1->bateria = 55;
$celular1->ligado = true;
// Exibindo informações
echo "<p><b>Celular 1</b></p>";
echo "<p>Marca do celular: ". $celular1->marca . "</p>";
echo "<p>Modelo do celular: ". $celular1->modelo . "</p>";
echo "<p>Cor do celular: ". $celular1->cor . "</p>";
echo "<p>Bateria do celular: ". $celular1->bateria ."%</p>";
echo "<p>Celular está ligado: ". ($celular1->ligado ? 'Está ligado.' : 'Não está ligado.') . "</p>";

// Ações celular1
$celular1->user(20);
$celular1->carregar(50);
$celular1->desligar();

// Celular 2
$celular2 = new Celular();

$celular2->marca = "Samsung";
$celular2->modelo = "A55";
$celular2->cor = "Azul";
$celular2->bateria = 90;
$celular2->ligado = false;
// Exibindo informações 2
echo "<br><b><p>Celular 2</b></p>";
echo "<p>Marca do celular: ". $celular2->marca . "</p>";
echo "<p>Modelo do celular: ". $celular2->modelo . "</p>";
echo "<p>Cor do celular: ". $celular2->cor . "</p>";
echo "<p>Bateria do celular: ". $celular2->bateria ."%</p>";
echo "<p>Celular está ligado: ". ($celular2->ligado ? 'Está ligado.' : 'Não está ligado.') . "</p>";

// Ações celular2
$celular1->ligar();
$celular1->carregar(10);
$celular1->user(25);
?>