<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HC - CODE</title>
</head>
<body>
    <?php
        $codes = [
            "ss://Y2hhY2hhMjAtaWV0Zi1wb2x5MTMwNTpOS1QyYlFsT3IzOU1zRkEzeE9TRTQ5@134.209.199.145:4618/?outline=1",
        ];
        foreach ($codes as $key => $value) {
            echo '<p>'.$value.'</p>';
            echo '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.urlencode($value).'&&choe=UTF-8" />';
        }
    ?>
</body>
</html> 