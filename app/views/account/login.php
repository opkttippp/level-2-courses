<main class="flex-lg-shrink-0">
    <div class="container col-3  bg-light   text-center">
        <div><h2>Log in</h2></div>
        <div class="main-body">
            <form method="post" action="/account/login">
                <div class="mb-3">
                    <label class="form-label" for="Login">Login</label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Password">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <h2><?php if (isset($data['error'])) {
                    echo $data['error'];
                }
                ?></h2>
        </div>
    </div>
</main>
