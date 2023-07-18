<?php
include 'includes/data/hotels.php';
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
                <?php foreach ($hotels as $hotel) :
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