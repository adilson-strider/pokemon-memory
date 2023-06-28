<?php
$pokeAPIBaseUrl = "https://pokeapi.co/api/v2/pokemon/";
$randomIds = [];

while (count($randomIds) < 8) {
    $randomNumber = rand(1, 150);
    if (!in_array($randomNumber, $randomIds)) {
        $randomIds[] = $randomNumber;
    }
}

$pokemonData = [];
foreach ($randomIds as $id) {
    $pokemonUrl = $pokeAPIBaseUrl . $id;
    $response = file_get_contents($pokemonUrl); //<---------------------------
    $pokemon = json_decode($response);
    $pokemonData[] = $pokemon;
}

echo json_encode($pokemonData);
?>
