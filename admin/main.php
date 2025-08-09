<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['user_type'] != 'admin') {
    header("location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <p>Logged in as: <?php echo $_SESSION['user']['username']; ?></p>
    <ul>
        <li><a href="adoptionListing.php">Manage Adoption Listings</a></li>
        <li><a href="adoptionSubmission.php">View Adoption Submissions</a></li>
        <li><a href="../logout.php">Logout</a></li>
    </ul>
</body>
</html>
