<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pascientes</title>
</head>

<body>
    <?php require 'views/header.php'?>
    <div class="container flex-grow-1">
        <h1>Pacientes</h1>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <?php require './views/patient/form.php'?>
                </div>
                <div class="col-8">
                    <?php require './views/patient/table.php'?>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>

</html>