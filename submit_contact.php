<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check if any required field is empty
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'znn');
        if ($conn->connect_error) {
            echo "$conn->connect_error";
            die("Connection Failed : " . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO znn (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
            $execval = $stmt->execute();
            if ($execval) {
                
				header("Location: articles.html");
				exit();

            } else {
                echo "Error: " . $conn->error;
            }
            $stmt->close();
            $conn->close();
        }
    }
} else {
    echo "Invalid request.";
}
?>
