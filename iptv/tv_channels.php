<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>TV Channels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
        	* {
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    --red-color :#e3242b;
    --green-color:#3cb043;
    --purple-color:#a32cc4;
    --gray-color:#d9dddc;
}
.red-back {
    background-color: var(--red-color);
    height: 180px;
    border-radius: 0 0 5% 5%;
}
.logo {
    width: 140px;
    height: 140px;
}
.top li {
    margin: 0 30px;
}
.top a {
    color: #fff;
    font-weight: 700;
    font-family: cursive;
    margin: 0 10px;
}
.navbar-nav a.signUp {
    border: 1px solid white;
    color: black;
    background-color: white;
    padding: 3px;
    border-radius: 8px;
    margin-top: 4px;
}
        </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm p-0 red-back d-block">
        <div class="container pt-2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="navbar-brand">
                        <img src="images/logo.png" alt="logo" class="img-fluid logo">
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav top mr-3">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="active nav-item"><a href="tv_channels.php" class="nav-link">Tv Channels</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
                <li class="nav-item"><a href="registration.php" class="nav-link signUp">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>TV Channels</h1>
        <ul class="list-group mt-3">
            <li class="list-group-item">Channel 1</li>
            <li class="list-group-item">Channel 2</li>
            <li class="list-group-item">Channel 3</li>
            <li class="list-group-item">Channel 4</li>
            <li class="list-group-item">Channel 5</li>
            <li class="list-group-item">Channel 6</li>
            <li class="list-group-item">Channel 7</li>
            <li class="list-group-item">Channel 8</li>
            <li class="list-group-item">Channel 9</li>
            <li class="list-group-item">Channel 10</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HZihYpBekz9i6l+dYz0QKK with the same entity at the cutoff (2021-09-30 00:00:00.000000)
