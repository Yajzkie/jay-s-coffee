<?php
session_start();
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.html");
        } else {
            $error_message = "Invalid password";
        }
    } else {
        $error_message = "User not found";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url("img/img3.jpeg");
            background-size: cover;
            background-position: center center; 
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            margin-bottom: 16px;
        }

        .register-link {
            display: block;
            margin-top: 16px;
            color: #007BFF;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2>Login</h2>

    <?php
    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
    ?>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</form>

</body>
</html>
