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
    <div class="col-4 m-auto mt-5 text-center border p-3">
        <h2 class="mb-4">Censura il tuo testo</h2>
        <form action="back.php" method="POST">
            <input class="form-control w-100 mb-2" placeholder="Testo di partenza" type="text" name="testo">
            <input class="form-control w-100 mb-4" placeHolder="Parola da censurare" type="text" name="censura">
            <button class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>