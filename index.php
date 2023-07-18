<?php
include 'includes/data/hotels.php'
?>

<!-- $hotels  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <title>Hotels</title>
</head>

<body>
    <?php foreach ($hotels as $hotel) : ?>
        <ul>
            <?php foreach ($hotel as $key => $info) : ?>
                <li><?= $key ?>: <?= $info ?></li>
            <?php endforeach ?>

        </ul>
    <?php endforeach ?>
</body>

</html>