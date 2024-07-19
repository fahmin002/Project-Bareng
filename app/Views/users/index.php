<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Bootstrap 5 icons CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>CRUD Operations</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>


    <section class="p-3">

        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary newUser" href="/users/create">New User <i class="bi bi-people"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody id="data">
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td><?= ($user['role_id'] == 1) ? "Admin" : "Dosen" ?></td>
                                <td>
                                    <a href="/users/edit/<?= $user['id'] ?>">Edit </a>
                                </td>
                                <td>
                                    <a href="/users/delete/<?= $user['id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!--Read Data Modal-->
    <div class="modal fade" id="readData">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="#" id="myForm">

                        <div class="card imgholder">
                            <img src="./image/Profile Icon.webp" alt="" width="200" height="200" class="showImg">
                        </div>

                        <div class="inputField">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" name="" id="showName" disabled>
                            </div>
                            <div>
                                <label for="age">Age:</label>
                                <input type="number" name="" id="showAge" disabled>
                            </div>
                            <div>
                                <label for="city">City:</label>
                                <input type="text" name="" id="showCity" disabled>
                            </div>
                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" name="" id="showEmail" disabled>
                            </div>
                            <div>
                                <label for="phone">Number:</label>
                                <input type="text" name="" id="showPhone" minlength="11" maxlength="11" disabled>
                            </div>
                            <div>
                                <label for="post">Post:</label>
                                <input type="text" name="" id="showPost" disabled>
                            </div>
                            <div>
                                <label for="sDate">Start Date:</label>
                                <input type="date" name="" id="showsDate" disabled>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>

</html>