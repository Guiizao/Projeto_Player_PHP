<?php

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct(int $capacidadeMaxima)
    {
        $this->setCapacidadeMaxima($capacidadeMaxima);
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getCapacidadeMaxima(): int
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function atualizarCapacidade(int $novaCapacidade): void
    {
        $this->capacidadeMaxima = $novaCapacidade;
    }

    public function adicionar(Item $item): void
    {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            array_push($this->itens, $item);
            echo "<strong>Item: </strong> " . $item->getName() . " (" . $item->getClasse() . ") adicionado ao inventário com sucesso!<br><hr>";
        } else {
            echo "O inventário está cheio! Não há espaço suficiente para adicionar o item " . $item->getName() . " (" . $item->getClasse() . ").<br><hr>";
        }
    }


    public function remover(Item $item): void
    {
        foreach ($this->itens as $indice => $valor) {
            if ($valor->getName() == $item->getName()) {
                unset($this->itens[$indice]);
                $this->itens = array_values($this->itens);
                echo "Item {$item->getName()} removido com sucesso!<br>";
                return;
            }
        }
        echo "Item não encontrado no inventário!<br>";
    }

    public function capacidadeLivre(): int
    {
        $tamanhoOcupado = 0;
        foreach ($this->itens as $item) {
            $tamanhoOcupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $tamanhoOcupado;
    }
}
