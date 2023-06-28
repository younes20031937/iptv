<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p.user {
            color: red;
            font-family: cursive;
            font-weight: 500;
        }

        a {
            text-decoration: none;
            color: red;
            font-family: cursive;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: cursive;
        }

        form {
            border: 3px solid black;
            border-radius: 12px;
            padding: 20px 250px 20px 50px;
            width: fit-content;
            margin: 40px 0;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        button[name="login"] {
            border-radius: 8px;
            padding: 8px;
            background-color: red;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        input {
            border-radius: 8px;
            width: 400px;
            border: none;
            height: 25px;
            padding-left: 6px;
            font-family: cursive;
            font-weight: 400;
        }

        input:hover {
            background-color: #c5c6d0;
        }
    </style>
</head>

<body>
    <div class="content">
        <form action="" method="post">
            <label for="">Email : </label><br>
            <input type="email" name="email"><br><br>
            <label for="">Password : </label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" name="login">
                Log In
            </button>


</html>

<?php
if (isset($_POST["login"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo "<p class='error_message'>Please enter both email and password</p>";
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require "connexion.php";
        $sql_verification = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $query = mysqli_query($conn, $sql_verification);
        if (mysqli_num_rows($query) > 0) {
            header("location: index.html");
            exit();
        } else {
            echo "<p class='user'>User not found</p>";
        }
    }
}
?>
        </form>
    </div>
</body>