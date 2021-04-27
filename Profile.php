<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <title>Mysite</title>
</head>
<body>

<div class="container col-3 bg-light p-4 text-center">
    <div><h2>My profile </h2></div>
    <div class="main-body">

        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="images/1.jpg" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h4>John Doe</h4>
                </div>
            </div>
        </div>

        <div class="main-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="John">

                </div>
                <div class="mb-3">
                    <label class="form-label">Surname</label>
                    <input type="text" class="form-control" id="Surname" placeholder="Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label">Login</label>
                    <input type="text" class="form-control" id="Login">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
