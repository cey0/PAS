<?php 
session_start();

include '../koneksi.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($c, $_POST['username']);
    $password = mysqli_real_escape_string($c, $_POST['password']);

    // Query to fetch user data from the database
    $st = $c->prepare("SELECT * FROM masyarakat WHERE username=? AND password=?");
    $st->bind_param("ss", $username, $password);
    $st->execute();
    $rs = $st->get_result();

    if ($rs->num_rows === 1) {
        // User found, set session variables and redirect to dashboard or home page
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: ../dashboard.html");
        exit; // Stop further execution
    } else {
        // Invalid username or password, redirect back to the login page with an error message
        header("location: login.php?error=invalid");
        exit; // Stop further execution
    }
} else {
   
}
?>
