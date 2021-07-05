<?php

if (!empty($data)) {
    ?>
    <main class="flex-lg-shrink-0">
        <div class="container col-3 bg-light text-center">
            <div>
                <h2>My profile </h2>
            </div>
            <div class="main-body">

                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php echo $data['img']; ?>" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                        </div>
                    </div>
                </div>
            </div>
            <form action="/profile/new" method="post" enctype="multipart/form-data" style="padding-bottom: 50px">
                <div class="mb-3">
                    <input type="file" name="attachment" value="Сhoose a picture ">
                </div>
                <div class="main-body">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="<?php echo $data['name']; ?>"
                               size="100">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="surname">Surname</label>
                        <input type="text" class="form-control" name="surname"
                               placeholder="<?php echo $data['surname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="login">Login</label>
                        <input type="text" class="form-control" name="login"
                               placeholder="<?php echo $data['login']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pass">Password</label>

                        <input type="password" class="form-control" name="pass"
                               placeholder="<?php echo $data['pass']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">email</label>
                        <input type="email" class="form-control" name="email"
                               placeholder="<?php echo $data['email']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        </div>
    </main>
    <?php
}
