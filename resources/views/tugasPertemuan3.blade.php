<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 3 - Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .judul-contoh {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            background-color: aqua;

        }
    </style>
</head>

<body>
    <div class="container">
        <!--Judul, Nama, dan Isi-->
        <div class="jumbotron">
            <h1 class="display-3">Selamat datang di Tugas pertemuan 3</h1>
            <p class="lead">PWEB C - Fachriza Rizky Susanto - 5026241092</p>
            <hr class="my-2">
            <p>Ada 4 contoh utama, yaitu:</p>
            <div class="row">
                <div class="col-3">
                    <a class="btn btn-primary btn-lg" href="#stacked-form" role="button">Stacked Form</a>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary btn-lg" href="#inline-form" role="button">Inline Form</a>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary btn-lg" href="#form-row-grid" role="button">Form Row/Grid</a>
                </div>
                <div class="col-3">
                    <a class="btn btn-primary btn-lg" href="#form-validation" role="button">Form Validation</a>
                </div>
            </div>
        </div>

        <!--Contoh 1: Stacked Form-->
        <h1 class="judul-contoh" id="stacked-form">Stacked Form</h1>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p></p>

        <!--Contoh 2: Inline Form-->
        <h1 class="judul-contoh" id="inline-form">Inline Form</h1>
        <form class="form-inline" action="/action_page.php">
            <label for="email" class="mr-sm-2">Email address:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" placeholder="Enter email" id="email">
            <label for="pwd" class="mr-sm-2">Password:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" placeholder="Enter password" id="pwd">
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
        <p></p>

        <!--Contoh 3: Form Row/Grid-->
        <h1 class="judul-contoh" id="form-row-grid">Form Row/Grid</h1>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="col">
                    <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                </div>
            </div>
        </form>
        <p></p>

        <!--Contoh 4: Form Validation-->
        <h1 class="judul-contoh" id="form-validation">Form Validation</h1>
        <form action="/action_page.php" class="was-validated">
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree on the terms and conditions.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
