<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function escreve_separa($cadeia){
        for ($i = 0; $i < strlen($cadeia); $i++) {
            echo $cadeia[$i];
            if($i < strlen($cadeia)-1)
                echo "-";
        }
    }

    escreve_separa("ola");
    echo "<p>";
    escreve_separa("Texto maior");
    ?>
</body>
</html>
