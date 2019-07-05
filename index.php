<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create('id_ID');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
</head>

<body>
    <h1>Data Penduduk</h1>
    <?php
    for ($i = 0; $i < 10; $i++) : ?>
        <li><?= $faker->name; ?></li>
        <li><?= $faker->address; ?></li>
        <li><?= $faker->email; ?></li>
    <?php endfor; ?>
</body>

</html>