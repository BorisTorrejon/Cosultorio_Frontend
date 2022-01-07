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
                <form class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class=" mb-3 col-sm-5">
                            <label class="form-label">Edad</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="mb-3 col-sm-7">
                            <label class="form-label">Telefono</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
                <table class="col"></table>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>

</html>