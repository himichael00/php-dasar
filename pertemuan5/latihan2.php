<?php
// perulangan pada array
// pake for atau for each
$data = [1,2,3,4,5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i=0; $i < count($data); $i++) : ?>
    <div class="kotak">
        <?php echo $data[$i]; ?>
    </div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ($data as $j) : ?>
        <div class="kotak">
            <?php echo $j; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>