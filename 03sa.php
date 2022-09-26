<?php {
    echo "<br><br><b>'Pokemon's Defense'</b><br>";
}

function pokemon_defense($pokemon, $limit_number)
{
    for ($i = 1; $i <= 10; $i++) {

        if ($pokemon[$i]["defense"] >= $limit_number) {
            echo "<br>" . $pokemon[$i]["species"] . "'s defense is greater than or equal to" . " " . $limit_number;
        }
    }
}

pokemon_defense(
    array(
        1 => array("id" => 1, "species" => "Bulbasaur", "type_1" => "Grass", "type_2" => "Poison", "ability" => "Overgrow", "hp" => 45, "attack" => 49, "defense" => 49),
        2 => array("id" => 2, "species" => "Ivysaur", "type_1" => "Grass", "type_2" => "Poison", "ability" => "Overgrow", "hp" => 60, "attack" => 62, "defense" => 63),
        3 => array("id" => 3, "species" => "Venusaur", "type_1" => "Grass", "type_2" => "Poison", "ability" => "Overgrow", "hp" => 80, "attack" => 82, "defense" => 83),
        4 => array("id" => 4, "species" => "Charmander", "type_1" => "Fire", "type_2" => "N/A", "ability" => "Blaze", "hp" => 39, "attack" => 52, "defense" => 43),
        5 => array("id" => 5, "species" => "Charmeleon", "type_1" => "Fire", "type_2" => "N/A", "ability" => "Blaze", "hp" => 58, "attack" => 64, "defense" => 58),
        6 => array("id" => 6, "species" => "Charizard", "type_1" => "Fire", "type_2" => "Flying", "ability" => "Blaze", "hp" => 78, "attack" => 84, "defense" => 78),
        7 => array("id" => 7, "species" => "Squirtle", "type_1" => "Water", "type_2" => "N/A", "ability" => "Torrent", "hp" => 44, "attack" => 48, "defense" => 65),
        8 => array("id" => 8, "species" => "Wartotle", "type_1" => "Water", "type_2" => "N/A", "ability" => "Torrent", "hp" => 59, "attack" => 63, "defense" => 80),
        9 => array("id" => 9, "species" => "Blastoise", "type_1" => "Water", "type_2" => "N/A", "ability" => "Torrent", "hp" => 79, "attack" => 83, "defense" => 100),
        10 => array("id" => 10, "species" => "Caterpie", "type_1" => "Bug", "type_2" => "N/A", "ability" => "Shield Dust", "hp" => 50, "attack" => 20, "defense" => 55)
    ),
    10
); #limit number here.
