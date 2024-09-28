<?php
session_start();
$errorMessage = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $age = intval($_POST['age']);
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));


    if (empty($name) || $age <= 0 || empty($username) || empty($password)) {

        $errorMessage = "All fields are required.";
        echo json_encode(['success' => false, 'message' => $errorMessage]);
        exit();
    } else {

        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['username'] = $username;


        if ($username === 'admin' && $password === 'password') {

            echo json_encode(['success' => true, 'redirect' => 'intprog.php']);
        } else {
            echo json_encode(['success' => false, 'message' => "Invalid username or password."]);
        }
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #3AAFA9 url('bgtech1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 50px;
            text-align: center;
        }

        h1 {
            font-size: 3em;
            color: #fff;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        h2 {
            font-size: 1.5em;
            color: #fff;
            margin-bottom: 30px;
        }

        .form-container {
            margin-top: 20px;
            display: inline-block;
            text-align: left;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .form-container label {
            font-size: 1.2em;
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container input {
            font-size: 1em;
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container input:focus {
            outline: none;
            border-color: #004d40;
            box-shadow: 0 0 5px #004d40;
        }

        .form-container button {
            font-size: 1.2em;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            background-color: #004d40;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #00332e;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2em;
            border: 2px solid #004d40;
            border-radius: 5px;
            background-color: #fff;
            color: #004d40;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #004d40;
            color: #fff;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Welcome, My Friend</h1>
<h2>Please fill out all required fields to log in!</h2>

<div class="form-container">
    <form id="loginForm" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" required>
        <button type="submit">Log In</button>
    </form>
    <div id="loginMessage"><?php if (isset($errorMessage)) echo $errorMessage; ?></div>
</div>

<script>
$(document).ready(function() {
    $('#loginForm').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: '',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    window.location.href = response.redirect;
                } else {
                    $('#loginMessage').text(response.message);
                }
            },
            error: function() {
                $('#loginMessage').text('An error occurred. Please try again.');
            }
        });
    });
});
</script>

</body>
</html>
