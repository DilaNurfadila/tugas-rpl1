<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: maroon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            color: white;
            transition: 1s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $angka = [
            [1,2,3], // Index 0
            [4,5,6], // Index 1
            [7,8,9] // Index 2
        ];
    ?>

    <div class="kotak"><?= $angka[0][0]; ?></div>
    <div class="kotak"><?= $angka[1][1]; ?></div>
    <div class="kotak"><?= $angka[0][1]; ?></div>
    <div class="kotak"><?= $angka[0][2]; ?></div>

    <!-- <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?> -->
</body>
</html>