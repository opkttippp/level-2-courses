<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <title>Mysite</title>
</head>
<body>

<div class="container col-3 bg-light p-4 text-center">
    <div><h2>Registering a profile</h2></div>
    <div class="main-body">

        <form>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" id="Name">

            </div>
            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input type="text" class="form-control" id="Surname">
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
