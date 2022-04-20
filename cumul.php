<?php

    session_start();

    $result = 0;

    if(isset($_SESSION['cumul'])) {
        $result = $_SESSION['cumul'];
    }


    if(isset($_POST['number'])) {
        $result += $_POST['number'];
        $_SESSION['cumul'] = $result;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="bg-secondary">

    <main class="container mt-5 bg-white rounded shadow">
        <h1 class="text-center fs-1 p-5"><?= $result ?></h1>

        <form method="POST" class="row text-center bg-light p-3 border border-3">
            <p class="col-6 m-auto mb-5">
                <input type="number" class="form-control" name="number">
            </p>

            <p>
                <input type="submit" class="btn btn-outline-primary" value="OK">
            </p>
        </form>
    </main>
    
</body>
</html>