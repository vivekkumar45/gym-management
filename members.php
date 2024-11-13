<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle adding a new member
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_member'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $membership_type = $_POST['membership_type'];

    // Insert member data into the database with a manually entered ID
    $sql = "INSERT INTO members (id, name, age, membership_type) VALUES ('$id', '$name', '$age', '$membership_type')";
    if ($conn->query($sql) === TRUE) {
        // Set session variables for the welcome message
        $_SESSION['member_name'] = $name;

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle deleting a member
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM members WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Member deleted successfully.</p>";
    } else {
        echo "Error deleting member: " . $conn->error;
    }
}

// Fetch members from the 'members' table
$sql = "SELECT id, name, age, membership_type FROM members";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 1em;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        .form-container {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            width: 100%;
            margin: 5px 0;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .delete-btn {
            padding: 5px 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="members.php">Members</a>
        <a href="exercise.php">Exercises</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="container">
        <h1>Gym Members</h1>

        <!-- Table to display members -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Membership Type</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["membership_type"] . "</td>";
                    echo "<td><a href='members.php?delete=" . $row["id"] . "'><button class='delete-btn'>Delete</button></a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No members found</td></tr>";
            }
            ?>
        </table>

        <!-- Form to add new members -->
        <div class="form-container">
            <h2>Add New Member</h2>
            <form method="POST">
                <label for="id">ID:</label>
                <input type="number" name="id" required>

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="age">Age:</label>
                <input type="number" name="age" required>

                <label for="membership_type">Membership Type:</label>
                <select name="membership_type" required>
                    <option value="Plus Membership">Plus Membership</option>
                    <option value="Premium Membership">Premium Membership</option>
                </select>

                <input type="submit" name="add_member" value="Add Member">
            </form>
        </div>
    </div>
</body>

</html>

<?php $conn->close(); ?>