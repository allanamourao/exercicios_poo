<?php

class Aula{
    public string $disciplina;
    public string $professor;
    public float $duracao;
    public int $numeroSala;
    public string $bloco;

// Métodos
public function exibirInformacoes() {
    echo "<p><b>Disciplina:</b> " . $this->disciplina . "</p>";
    echo "<p><b>Professor:</b> " . $this->professor . "</p>";
    echo "<p><b>Duração da aula:</b> " . $this->duracao . " horas</p>";
    echo "<p><b>Número da sala:</b> " . $this->numeroSala . "</p>";
    echo "<p><b>Bloco:</b> " . $this->bloco . "</p>";
}

// Alterar professor
public function trocarProfessor($valor) {
        $this->professor = $valor;
    }
// Alterar local
public function alterarLocal($n_sala, $bloco) {
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;
    }
}

$Aula1 = new Aula();

$Aula1->disciplina = "Matemática";
$Aula1->professor = "Ana Paula";
$Aula1->duracao = 1.30;
$Aula1->numeroSala = 9;
$Aula1->bloco = "B";

// Alterar professor e local
$Aula1->trocarProfessor("João");
$Aula1->alterarLocal(10, "C");

// Exibindo Informações 1
echo "<h3>Aula 1</h3>";
$Aula1->exibirInformacoes();
echo "<hr>";

// Aula 2
$Aula2 = new Aula();

$Aula2->disciplina = "Língua Portuguesa";
$Aula2->professor = "Michele";
$Aula2->duracao = 1.50;
$Aula2->numeroSala = 7;
$Aula2->bloco = "A";

// Exibindo informações 2
echo "<h3>Aula 2</h3>";
$Aula2->exibirInformacoes();

?>