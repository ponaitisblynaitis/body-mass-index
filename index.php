

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <title>Document</title>
</head>
<body class="bg-warning-subtle">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h1 class="card titleText text-center mb-5 bg-warning p-2 text-dark bg-opacity-10">
                Body Mass Index calculator
            </h1>
            <div>
                <form class="card bg-warning p-2 text-dark bg-opacity-50" action="bmicalculator.php">
                    <input class="form-control text-center" class="input" name="height" type="text" placeholder="Please, enter Your height in centimeters!">
                    <input class="form-control mt-3 text-center" class="input" name="weight" type="text" placeholder="Please, enter Your weight in kilograms">
                    <button class="btn btn-warning text-dark mt-3" type="submit">Calculate</button>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>