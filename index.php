<?php
include 'includes/data/hotels.php';

$vote = $_GET['vote'] ?? '';
// Validazione, se il get non è vuoto (perché è un checkbox quindi do per scontato che ogni valore diverso da vuoto sia vero) cancello ogni array che contiene un booleano falso in 'parking'
foreach ($hotels as $i => $hotel)
    if (!empty($_GET['parking']) && str_contains(false, $hotels[$i]['parking'])) unset($hotels[$i]);
foreach ($hotels as $i => $hotel)
    if ($vote > $hotels[$i]['vote']) unset($hotels[$i])

?>

<!-- $hotels  -->


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Hotels</title>
</head>

<body>
    <div class="container">
        <h1>Hotels!!</h1>

        <form action="">
            <label for="parking">Parcheggio in sede</label>
            <input id="parking" name="parking" type="checkbox">
            <div>
                <label for="vote">Filtra in base al voto minimo</label>
                <select name="vote" id="vote">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div>
                <button class="btn btn-success mt-3">Filtra</button>
                <button class="btn btn-info mt-3" type="reset"><a href="index.php" class="text-decoration-none text-black">Reset</a></button>
            </div>

        </form>
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance from center</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($hotels as $i => $hotel) :
                    if ($hotel['parking'] == true) $hotel['parking'] = '&check;';
                    else $hotel['parking'] = '&cross;';
                    $hotel['distance_to_center'] .= ' km';

                ?>
                    <tr>
                        <?php foreach ($hotel as $info) : ?>
                            <td><?= $info ?></td>
                        <?php endforeach ?>

                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>

    </div>




</body>

</html>