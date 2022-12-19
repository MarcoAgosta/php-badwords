<?php
$testo = $_POST["testo"];
$censura = $_POST["censura"];
$testoCensurato = str_replace($censura,"***",$testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="text-center col-6 m-auto mt-5 mb-5">
        <div>
            <h3 class="mb-2">Questo è il testo inserito</h3>
            <span><?php echo $testo; ?></span>
            <span class="m-3 d-block">La lunghezza del testo è: <?php echo strlen($testo);?> caratteri.</span>
        </div>
        <div class="m-5"></div>
        <div>
            <h3 class="mb-2">Ecco il testo censurato!</h3>
            <span><?php echo $testoCensurato; ?></span>
            <span class="m-3 d-block">La lunghezza del testo censurato è: <?php echo strlen($testoCensurato);?> caratteri.</span>
        </div>
    </div>
</body>
</html>