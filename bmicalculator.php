<?php
$weight = $_GET['weight'];
$height = $_GET['height'];
$bmiPass = $weight / (($height / 100)**2);

if ($bmiPass <= 18.5) {
    $result="You are UNDERWEIGHT! It is time to visit Your Grandma!";
}

if ($bmiPass >= 18.5 && $bmiPass <= 24.9) {
    $result="えええ、すごいね! あなたのたいじゅはせいじょです！";
}

if ($bmiPass >= 24.9 && $bmiPass <= 29.9) {
    $result="Oh, NO! It is time to hit the GYM";
}

if ($bmiPass >= 29.9 && $bmiPass <= 39.9) {
    $result="YOU ARE OBESE! Take care of Your health, IMMEDIATELY!";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <title>Document</title>
    <title>Document</title>
</head>
<body class="bg-warning-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1 class="card titleText text-center mb-5 bg-warning p-2 text-dark bg-opacity-10">
                    Body Mass Index calculator
                </h1>
                <div class="card text text-center bg-warning p-2 text-dark bg-opacity-10">
                    <h5>Your height is <span class="fw-bold"><?=$height?></span>  cm,
                        Your weight is <span class="fw-bold"><?=$weight?></span> kg</h5> <br>
                    Your Body Mass Index is <span class="fw-bold"><?=(round($bmiPass))?></span> <br>
                    <?=$result?>
                </div>
                <div class="btn btn-warning mt-5 d-flex justify-content-center">
                    <a class="text-decoration-none text-dark" href="index.php">Try Again!</a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>