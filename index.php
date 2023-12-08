<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="kotak position-absolute top-50 start-50 translate-middle rounded">
                <div class="judul mt-5 text-white ms-5 fw-bold"><h3>Login</h3></div>
                <form method="POST" action="login/cek_login.php">
                    <div class="col d-flex flex-column">
                        <label for="username" class="ms-5 mt-4 label">username</label>
                        <input class="input ms-5 mt-2" type="text" name="username" id="username">
                    </div>
                    <div class="col d-flex flex-column">
                        <label for="password" class="ms-5 mt-4 label">password</label>
                        <input class="input ms-5 mt-2" type="text" name="password" id="password">
                    </div>
                    <div class="button ms-4">
                        <button class="btn btn-primary w-100 mt-5" type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>