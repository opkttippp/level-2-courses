<?php
if (empty($_SESSION['name'])) {
    echo'
<ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/news/show">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/account/register">Sign up</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/account/login">Login</a>
    </li>
</ul>';
} else {
    echo'
<ul class="navbar-nav me-auto mb-2 mb-md-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/news/show">Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile/edit">Profile</a>
    </li> 
    <li class="nav-item">
        <a class="nav-link">';
    echo $_SESSION['name'];
    echo'</a>
    </li>
       <?php <li class="nav-item">
    <a class="nav-link" href="/account/logout">Выход</a>
    </li>
</ul>';
}
