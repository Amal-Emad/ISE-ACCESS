<?php
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    $userType = $_SESSION['user_type']; // Assuming you store user type in the session

    include_once ('../private/conn.php');

    if ($userType !== 'admin') {
        header('location: welcome.php'); // Redirect non-admin users
        exit();
    }

    // Check if post ID is provided in the URL
    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        
        // Remove post from the database
        $removePostQuery = mysqli_query($conn, "DELETE FROM `posts` WHERE post_id = $postId");

        if ($removePostQuery) {
            header('location: adminprofile.php'); // Redirect back to admin profile
            exit();
        }
    }
} else {
    header('location:index.php');
    exit();
}
?>
