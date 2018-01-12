<?php


function escreveInput($players)
{
    $string = "";
    for ($x = 0; $x < $players; $x++) {
        $string .= '<label for="jogador' . ($x + 1) . '">Jogador ' . ($x + 1) . '</label>
    <input type="text" name="' . ($x + 1) . '" id="jogador' . ($x + 1) . '"><br>';

    }
    return $string;
}