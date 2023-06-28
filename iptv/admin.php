<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootsap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin</title>
    <style>
        :root {
            --red-color: #e3242b;
            --green-color: #3cb043;
            --purple-color: #a32cc4;
            --gray-color: #d9dddc;
        }

        body {
            overflow-x: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 14px;
            background: linear-gradient(red, #000);
        }

        .table-container {
            max-height: 200px;
            overflow-y: scroll;
            width: fit-content;
            min-width: 800px;
        }

        table {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: var(--gray-color);
            border-radius: 12px;
            width: 100%;
        }

        td {
            padding: 10px;
            font-family: cursive;
        }

        h4 {
            font-family: arial;
            font-weight: 600;
            border: 1px solid var(--red-color);
            background-color: var(--red-color);
            color: #fff;
            border-radius: 16px;
            padding: 8px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: black;
            padding: 6px;
            border-radius: 10px;
        }

        a:first-child {
            border: 1px solid green;
            background-color: green;
            margin: 0 10px 0 0;
        }

        a:last-child {
            border: 1px solid var(--red-color);
            background-color: var(--red-color);
        }

    </style>
</head>

<body>
    <h4 style="color: #fff;background-color: #000;border: none;" id="users" onclick="show_users()">Show Users</h4>
    <h4 style="color: #fff;background-color: #000;border: none;" id="sub" onclick="show_sub()">Show Subscribers</h4>
    <div id="users_part" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
        <center>
            <h4>Users : </h4>
        </center>
        <div class="table-container">
            <table>
                <tr style="color:white;background-color: black;">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th class="emailTH">Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                <?php
                require "connexion.php";
                $sql_ajout = "SELECT * FROM users";
                $query = mysqli_query($conn, $sql_ajout);
                if ($query) {
                    while ($rows = mysqli_fetch_Assoc($query)) {
                        $firstName = $rows["firstName"];
                        $lastName = $rows["lastName"];
                        $phone = $rows["phone"];
                        $email = $rows["email"];
                        $password = $rows["password"];
                        $id = $rows["id"];
                        echo "<tr>";
                        echo "<td> $firstName </td>";
                        echo "<td> $lastName </rd>";
                        echo "<td> $phone </td>";
                        echo "<td>  $email </td>";
                        echo "<td> $password </td>";
                        echo "<td> <a href='registration.php?id=".$id."'> Update </a> <a href='delete.php?id=" . $id . "'>Delete </a> </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <div id="subscribers_part" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
        <center>
            <h4>Subscribers :</h4>
        </center>
        <?php
        require "connexion.php";
        $sql_ajout2 = "SELECT * FROM paypal";
        $query2 = mysqli_query($conn, $sql_ajout2);
        $sql_ajout3 = "SELECT * FROM credit_card";
        $query3 = mysqli_query($conn, $sql_ajout3);
        if ($query2) {
            echo "<div class='table-container'>";
            echo "<table>";
            echo "<center><h3 style='margin-bottom: 20px;'>Paypal Method : </h3></center>";
            echo "<tr style='color:white;background-color: black;'>";
            echo "<th>Name</th>";
            echo "<th>Phone Number </th>";
            echo "<th style='min-width: 300px'>Email </th>";
            echo "<th> Password </th>";
            echo "<th>Type of IPTV</th>";
            echo "<th>Action </th>";
            echo "</tr>";
            while ($rows = mysqli_fetch_assoc($query2)) {
            	$id = $rows["id"];
                $name = $rows["name"];
                $phone = $rows["phone"];
                $email = $rows["email"];
                $password = $rows["password"];
                $type = $rows["type"];
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$phone </td>";
                echo "<td>$email</td>";
                echo "<td>$password</td>";
                echo "<td>$type</td>";
                echo "<td> <a href='paym.php?id=".$id."&method=paypal'>Update</a><a href='delete.php?id=".$id."&method=paypal'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        if ($query3) {
            echo "<div class='table-container'>";
            echo "<table>";
            echo "<center><h3>Credit Card Method : </h3></center>";
            echo "<tr style='color:white;background-color: black;'>";
            echo "<th>Name</th>";
            echo "<th>Phone Number</th>";
            echo "<th style='min-width:215px;'>Card Number</th>";
            echo "<th>Expiration Date </th>";
            echo "<th>CVV</th>";
            echo "<th>Type of IPTV</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            while ($rows = mysqli_fetch_assoc($query3)) {
            	$id = $rows["id"];
                $name = $rows["name"];
                $phone = $rows["phone"];
                $card_number = $rows["card_number"];
                $expiry_date = $rows["expiry_date"];
                $cvv = $rows["cvv"];
                $type = $rows["type"];
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$phone</td>";
                echo "<td>$card_number</td>";
                echo "<td>$expiry_date</td>";
                echo "<td>$cvv</td>";
                echo "<td>$type</td>";
                echo "<td><a href='paym.php?id=".$id."&method=credit_card'>Update</a><a href='delete.php?id=".$id."&method=credit_card'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
    <script>
        var users = document.getElementById("users");
        var sub = document.getElementById("sub");
        var subscribers_part = document.getElementById("subscribers_part");
        var users_part = document.getElementById("users_part");
        subscribers_part.style.display="none";
        users_part.style.display="none";

        function show_sub() {
            subscribers_part.style.display = "block";
            users_part.style.display = "none";
            sub.style.display="none";
            users.style.display="block";
        }

        function show_users() {
            subscribers_part.style.display = "none";
            users_part.style.display = "block";
            users.style.display="none";
            sub.style.display="block";
        }
    </script>
</body>

</html>