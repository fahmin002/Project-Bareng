<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="/assets/iconSTMIK.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .social-buttons {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .social-buttons a {
            font-size: 1.5rem;
            color: #495057;
            transition: color 0.3s;
        }

        .social-buttons a:hover {
            color: #007bff;
        }

        .form-outline {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Masuk</h1>
        <?php if(session()->getFlashdata('msg')): ?>
        <div><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <form action="/auth/login" method="post">
            <div class="form-outline mb-4">
                <input type="username" name="username" id="username" class="form-control" required />
                <label class="form-label" for="username">Username</label>
            </div>
            <div class="form-outline mb-4">
                <input type="password" name="password" id="loginPassword" class="form-control" required />
                <label class="form-label" for="loginPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Sign in</button>
            <a href="/" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i></a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-Q82z0AWWXbWlj6A+dIjPZeUZsmYedBjwIkhvGrgshlQCOmN8mEAXx5f2feI0zSY6"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-4QLAk6zT1NCF9zDQHQgAq8pAA2K63uV/tScNCbVBvwCJP17vM03u8nOt8/HjlWkG"
        crossorigin="anonymous"></script>
</body>

</html>
