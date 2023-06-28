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
.content {
    display: flex;
    /*justify-content: center;*/
    align-items: center;
    font-family: cursive;
}
.content2 {
    border: 2px solid black;
    border-radius: 12px;
    padding: 60px 300px 60px 60px;
    width: fit-content;
    margin: 30px 0;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
p {
    cursor: pointer;
}
p:hover , a:hover{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    color: var(--green-color);
    border-radius: 12px;
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

    <div class="container content">
        <div class="container-fluid content2">
            <h4 style="font-family: cursive; font-weight: 700; color: var(--red-color);">Contact Us</h4>
            <p style="display:flex;align-items: center;"><i style="padding-right: 15px;" class="material-icons-outlined done">phone</i> <a href="tel=+212681592917" style="text-decoration: none;color: black;">+212681592917</a></p>
             <p style="display:flex;align-items: center;"><i style="padding-right: 15px;" class="material-icons-outlined done">email</i> <a href="mailto=younesboukdir100@gmail.com" style="text-decoration: none;color: black;">younesboukdir100@gmail.com</a></p>
              <p style="display:flex;align-items: center;"><i style="padding-right: 15px;" class="material-icons-outlined done">location_on</i>Morocco,Casablanca</p>
               <p style="display:flex;align-items: center;"><i style="padding-right: 15px;" class="material-icons-outlined done">access_time</i>24/24  7/7</p>
               <div class="social_media" style="display: flex; justify-content: between; align-items: center;">
                   <a href="facebook.com"><span class="material-icons text-primary">facebook</span></a>
               </div>
        </div>
    </div>
</body>

</html>
