<?php

require_once "Item.php";
require_once "Inventario.php";
require_once "Player.php";

$player1 = new Player("Jogador 1");
$player2 = new Player("Jogador 2");

$itemAtaque1 = new Ataque("Espada Longa");
$itemAtaque2 = new Ataque("Arco Curto");
$itemAtaque3 = new Ataque("Machado de Guerra");
$itemAtaque4 = new Ataque("Lança");

$itemDefesa1 = new Defesa("Escudo de Ferro");
$itemDefesa2 = new Defesa("Armadura de Couro");
$itemDefesa3 = new Defesa("Cloak of Protection");
$itemDefesa4 = new Defesa("Capa Mágica");

$itemMagia1 = new Magia("Poção de Cura");
$itemMagia2 = new Magia("Elixir de Mana");
$itemMagia3 = new Magia("Feitiço de Invisibilidade");
$itemMagia4 = new Magia("Bola de Fogo");

echo "<h3>Jogador 1: {$player1->getNickname()}</h3><br>";

$player1->coletarItem($itemAtaque1);
$player1->coletarItem($itemDefesa1);
$player1->coletarItem($itemMagia1);
$player1->coletarItem($itemAtaque2);
$player1->coletarItem($itemDefesa2);
$player1->coletarItem($itemMagia2);

echo "<h4>Inventário de {$player1->getNickname()}</h4>";
echo "Capacidade Máxima: " . $player1->getInventario()->getCapacidadeMaxima() . "<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

if ($player1->getInventario()->capacidadeLivre() == 0) {
    echo "<br><strong>Inventário de {$player1->getNickname()} está cheio!</strong><br>";
}

$player1->subirNivel();
echo "<br><strong>Jogador 1 subiu para o nível {$player1->getNivel()}</strong><br>";
echo "Capacidade Máxima após subir de nível: " . $player1->getInventario()->getCapacidadeMaxima() . "<br>";

echo "Inventário após o aumento de capacidade: <br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

echo "<br>";

$player1->coletarItem($itemAtaque3);
$player1->coletarItem($itemDefesa3);
$player1->coletarItem($itemMagia3);

echo "<br><strong>Jogador 1 após adicionar mais itens:</strong><br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

echo "<br>";

$player1->coletarItem($itemAtaque4);
$player1->coletarItem($itemDefesa4);
$player1->coletarItem($itemMagia4);

echo "<br><strong>Jogador 1 após adicionar todos os itens possíveis:</strong><br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

echo "<br>";

echo "<h3>Jogador 2: {$player2->getNickname()}</h3>";
$player2->coletarItem($itemAtaque2);
$player2->coletarItem($itemDefesa2);
$player2->coletarItem($itemMagia2);

echo "<h4>Inventário de {$player2->getNickname()}</h4>";
foreach ($player2->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

echo "<br>";

$player2->subirNivel();
echo "<br><strong>Jogador 2 subiu para o nível {$player2->getNivel()}</strong><br>";
echo "Capacidade Máxima após subir de nível: " . $player2->getInventario()->getCapacidadeMaxima() . "<br>";

$player2->coletarItem($itemAtaque3);
$player2->coletarItem($itemDefesa3);
$player2->coletarItem($itemMagia3);
$player2->coletarItem($itemAtaque4);

echo "<h4>Inventário de {$player2->getNickname()} após adicionar mais itens:</h4>";
foreach ($player2->getInventario()->getItens() as $item) {
    echo $item->getName() . " (" . $item->getClasse() . ")<br>";
}

echo "<br>";
