<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpading="10" cellspacing="0">
        <?php for ( $i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ( $j = 1; $j <= 5; $j++) : ?>
                    <?php if ($j %2 == 0) : ?>
                            <td class="warna-baris">
                    <?php else : ?>
                            <td>
                    <?php endif; ?>
                        <?php echo "$i dan $j"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <table border="1" cellpading="10" cellspacing="0">
        <?php for ( $i = 1; $i <= 5; $i++) : ?>
            <?php if ( $i %2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ( $j = 1; $j <= 5; $j++) : ?>
                    <td>
                        <?php echo "$i dan $j"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>