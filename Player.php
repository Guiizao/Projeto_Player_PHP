<?php

require_once "Inventario.php";

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname)
    {
        $this->setNickname($nickname);
        $this->nivel = 1;
        $this->inventario = new Inventario(20);
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        if (empty($nickname)) {
            throw new InvalidArgumentException("Informe um Nickname!<br>");
        }
        $this->nickname = $nickname;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;
        $this->atualizarCapacidadeInventario();
    }

    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    public function coletarItem(Item $item): void
    {
        $this->inventario->adicionar($item);
    }

    public function soltarItem(Item $item): void
    {
        $this->inventario->remover($item);
    }

    public function subirNivel(): void
    {
        $this->nivel += 1;
        $this->atualizarCapacidadeInventario();
    }


    private function atualizarCapacidadeInventario(): void
    {
        $novaCapacidade = 20 + $this->nivel * 3;
        $this->inventario->atualizarCapacidade($novaCapacidade);
    }
}
