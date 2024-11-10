<?php
// Database configuration
$host = 'localhost';
$dbname = 'marketing';
$username = 'root';
$password = 'Dadi@6563';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if form data is set
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['market_type']) && !empty($_POST['owner_name']) && !empty($_POST['problem'])) {
        // Prepare an SQL statement
        $stmt = $conn->prepare("INSERT INTO problems (market_type, owner_name, problem) VALUES (:market_type, :owner_name, :problem)");
        
        // Bind parameters
        $stmt->bindParam(':market_type', $_POST['market_type']);
        $stmt->bindParam(':owner_name', $_POST['owner_name']);
        $stmt->bindParam(':problem', $_POST['problem']);
        
        // Execute the statement
        $stmt->execute();

        // Display success message using JavaScript alert without redirecting
        echo "<script>
            alert('Registered Successfully...!');
            window.history.back();
        </script>";
    } else {
        echo "<script>alert('Please fill in all required fields.');</script>";
    }
} catch (PDOException $e) {
    echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
}

// Close the connection
$conn = null;
?>
