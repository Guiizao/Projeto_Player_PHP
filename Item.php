<?php

require_once "Magia.php";
require_once "Defesa.php";
require_once "Ataque.php";

class Item
{
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe)
    {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (empty($name)) {
            echo "Informe o Nome dos Items!";
        } else {
            $this->name = $name;
        }
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void
    {
        if ($tamanho != 7 && $tamanho != 4 && $tamanho != 2) {
            echo "O tamanho dos itens deve ser 7, 4 ou 2!<br>";
        } else {
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): void
    {
        if (empty($classe)) {
            echo "Informe a Classe dos Items!<br>";
        } else {
            $this->classe = $classe;
        }
    }
}
