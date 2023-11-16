<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO login (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Registration successful!";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-image: url("img/img2.jpg");
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
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: #dc3545;
            margin-bottom: 16px;
        }

        .login-link {
            display: block;
            margin-top: 16px;
            color: #007BFF;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form method="post">
    <h2>Register</h2>

    <?php
    if (isset($error_message)) {
        echo "<p class='error'>$error_message</p>";
    }
    ?>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Register</button>

    <p>Already have an account?<a href="index.php">Login here</a></p>
</form>

</body>
</html>
