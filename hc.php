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
            "ss://Y2hhY2hhMjAtaWV0Zi1wb2x5MTMwNTpHdDdEUXU4SFR1c2xVNXdZb0N2V2ZB@159.223.221.61:14094/?outline=1",
        ];
        foreach ($codes as $key => $value) {
            echo '<p>'.$value.'</p>';
            echo '<img src="https://chart.googleapis.com/chart?chs=300x300&cht='.$value.'&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8" />';
        }
    ?>
    test
</body>
</html>