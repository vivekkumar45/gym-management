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

// Handle adding a new exercise
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_exercise'])) {
    $id = $_POST['id']; // Get ID from input
    $exercise_name = $_POST['exercise_name'];
    $repetitions = $_POST['repetitions'];
    $sets = $_POST['sets'];
    $calories_burnt = $_POST['calories_burnt'];
    $day = $_POST['day'];

    // Insert new exercise into the database
    $sql = "INSERT INTO exercises (id, exercise_name, repetitions, sets, calories_burnt, day) VALUES ('$id', '$exercise_name', '$repetitions', '$sets', '$calories_burnt', '$day')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>New exercise added successfully.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle deleting an exercise
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM exercises WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Exercise deleted successfully.</p>";
    } else {
        echo "Error deleting exercise: " . $conn->error;
    }
}

// Handle modifying an exercise
if (isset($_POST['edit_exercise'])) {
    $id = $_POST['id'];
    $exercise_name = $_POST['exercise_name'];
    $repetitions = $_POST['repetitions'];
    $sets = $_POST['sets'];
    $calories_burnt = $_POST['calories_burnt'];
    $day = $_POST['day'];

    // Update exercise data in the database
    $sql = "UPDATE exercises SET exercise_name='$exercise_name', repetitions='$repetitions', sets='$sets', calories_burnt='$calories_burnt', day='$day' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Exercise updated successfully.</p>";
    } else {
        echo "Error updating exercise: " . $conn->error;
    }
}

// Fetch exercises from the 'exercises' table
$sql = "SELECT id, exercise_name, repetitions, sets, calories_burnt, day FROM exercises";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
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

        .delete-btn,
        .edit-btn {
            padding: 5px 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover,
        .edit-btn:hover {
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
        <h1>Exercise Plans</h1>

        <!-- Table to display exercises -->
        <table>
            <tr>
                <th>ID</th>
                <th>Exercise Name</th>
                <th>Repetitions</th>
                <th>Sets</th>
                <th>Calories Burnt</th>
                <th>Day</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["exercise_name"] . "</td><td>" . $row["repetitions"] . "</td><td>" . $row["sets"] . "</td><td>" . $row["calories_burnt"] . "</td><td>" . $row["day"] . "</td>";
                    echo "<td>
                            <a href='exercise.php?delete=" . $row["id"] . "'><button class='delete-btn'>Delete</button></a>
                            <form method='POST' style='display:inline-block;'>
                                <input type='hidden' name='id' value='" . $row["id"] . "'>
                                <input type='submit' name='edit_exercise' value='Edit' class='edit-btn'>
                            </form>
                          </td></tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No exercises found</td></tr>";
            }
            ?>
        </table>

        <!-- Form to add new exercises -->
        <div class="form-container">
            <h2>Add New Exercise</h2>
            <form method="POST">
                <label for="id">ID:</label>
                <input type="number" name="id" required>

                <label for="exercise_name">Exercise Name:</label>
                <input type="text" name="exercise_name" required>

                <label for="repetitions">Repetitions:</label>
                <input type="number" name="repetitions" required>

                <label for="sets">Number of Sets:</label>
                <input type="number" name="sets" required>

                <label for="calories_burnt">Calories Burnt:</label>
                <input type="number" name="calories_burnt" required>

                <label for="day">Day:</label>
                <select name="day" required>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>

                <input type="submit" name="add_exercise" value="Add Exercise">
            </form>
        </div>
    </div>
</body>

</html>

<?php $conn->close(); ?>