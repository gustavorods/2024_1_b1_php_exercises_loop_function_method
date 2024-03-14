<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada do dois</title>
</head>
<body>
    <?php
    $i = 0;
    $n = $_POST['txtnum'];

    while($i <= 10) {
        $tab = $n * $i;
        echo $n . ' x ' . $i . " = " . $tab . "<br/>";
        $i++;
    }
    ?>
</body>
</html>