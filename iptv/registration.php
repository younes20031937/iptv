<?php 
    if(isset($_GET["id"])) {
        require "connexion.php";
        $id = $_GET["id"];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $query = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($query);
        $firstName = $row["firstName"];
        $lastName=$row["lastName"];
        $phone = $row["phone"];
        $email = $row["email"];
        $password = $row["password"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        input[name="register"],input[name="update"] {
            border-radius: 8px;
            padding: 8px;
            background-color: red;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"] {
            border-radius: 8px;
            width: 400px;
            border: none;
            height: 25px;
            padding-left: 6px;
            font-family: cursive;
            font-weight: 400;
        }

        input[type="text"]:hover,
        input[type="number"]:hover,
        input[type="email"]:hover,
        input[type="password"]:hover {
            background-color: #c5c6d0;
        }
    </style>
</head>

<body>
    <div class="content">
        <form method="post">
            <label for="">First Name :</label><br>
            <input type="text" name="firstName" value="<?php if(isset($_GET["id"])) {echo $firstName;} ?>"><br><br>
            <label for="">Last Name: </label><br>
            <input type="text" name="lastName" value="<?php if(isset($_GET["id"])) {echo $lastName;} ?>"><br><br>
            <label for="">Your Phone Number : </label><br>
            <input type="number" name="phone" value="<?php if(isset($_GET["id"])) {echo $phone;} ?>"><br><br>
            <label for="">Your Email :</label><br>
            <input type="email" name="email" value="<?php if(isset($_GET["id"])) {echo $email;} ?>"><br><br>
            <label for="">Password : </label><br>
            <input type="password" name="password" value="<?php if(isset($_GET["id"])) {echo $password;} ?>"><br><br>
            <input type="submit" name="<?php if(isset($_GET["id"])) {
                echo "update";
            }else {
                echo "register";
            } ?>" value="<?php 
            if(isset($_GET["id"])){
                echo "Update";
            }else {
                echo "Register";
            } ?>"><br><br>
            <span id="span">If you registered before, click here to <a id="login" href="login.php">log in</a></span>
 

<?php

if (isset($_POST["register"])) {
    if (empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["phone"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        echo "<p class='error_message'> Please fill in all the required fields </p>";
    } else {
        require "connexion.php";
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql_add_user = "INSERT INTO users (firstName, lastName, phone, email, password) VALUES ('$firstName', '$lastName', '$phone', '$email', '$password')";
        $query = mysqli_query($conn, $sql_add_user);

        if ($query) {
            echo "<p class='added'>User Added</p>";
        } else {
            echo "<p class='error_message'>Failed to add user</p>";
        }
    }
}
?>
       </form>
    </div>
    <script>
        const span = document.getElementById("span");
        <?php if(isset($_GET["id"])) { ?>
            span.style.display = "none";
        <?php } ?>
    </script>
</body>

</html>
<?php 
    if(isset($_POST["update"])) {
        require "connexion.php";
        $id = $_GET["id"];
        $firstName2 = $_POST["firstName"];
        $lastName2 = $_POST["lastName"];
        $phone2 = $_POST["phone"];
        $email2 = $_POST["email"];
        $password2 = $_POST["password"];
        $sql2 = "UPDATE users SET firstName = '$firstName2', lastName = '$lastName2', phone = '$phone2', email = '$email2', password = '$password2' WHERE id = '$id'";

        $query2 = mysqli_query($conn , $sql2);
        if (!$query2) {
            die('Erreur MySQL : ' . mysqli_error($conn));
        }
        else {
            header("location:admin.php");
        }
        
    }
?>