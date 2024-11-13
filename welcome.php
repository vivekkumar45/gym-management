<?php
// Start the session
session_start();

// Check if the session variable 'member_name' is set
if (!isset($_SESSION['member_name'])) {
    // Redirect to members page if there's no session
    header("Location: members.php");
    exit();
}

// Get the member's name from the session
$member_name = $_SESSION['member_name'];

// Clear the session variable (optional, so the message only shows once)
unset($_SESSION['member_name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h1>Welcome, <?php echo htmlspecialchars($member_name); ?>!</h1>
        <p>We're glad to have you as a part of our gym community.</p>
        <a href="members.php">Go back to Members Page</a>
    </div>
</body>

</html>