<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gym Management Home</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="members.php">Members</a>
        <a href="exercise.php">Exercises</a>
        <a href="contact.php">Contact</a>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Our Gym</h1>
        <p>Your Fitness Journey Begins Here</p>
        <a href="members.php" class="cta-button">Join Now</a>
    </div>

    <!-- Highlights Section -->
    <div class="container">
        <h2>Why Choose Us?</h2>
        <div class="highlights">
            <div class="highlight">
                <h3>Experienced Trainers</h3>
                <p>Get guidance from our expert trainers who are here to help you achieve your fitness goals.</p>
            </div>
            <div class="highlight">
                <h3>State-of-the-Art Equipment</h3>
                <p>We provide the best gym equipment to make your workouts more effective and enjoyable.</p>
            </div>
            <div class="highlight">
                <h3>Personalized Programs</h3>
                <p>Our tailored workout plans fit your unique needs and help you progress efficiently.</p>
            </div>
        </div>
    </div>


</body>

</html>

<?php $conn->close(); ?>