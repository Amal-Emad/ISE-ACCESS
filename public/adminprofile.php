<?php
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    $userType = $_SESSION['user_type']; // Assuming you store user type in the session

    include('./header.php');
    include_once ('../private/conn.php');

    if ($userType !== 'admin') {
        header('location: welcome.php'); // Redirect non-admin users
        exit();
    }

    // Remove Post
    if(isset($_GET['id'])){
        $removePostId = $_GET['id'];
        mysqli_query($conn, "DELETE FROM `posts` WHERE post_id = $removePostId");
        header('location: adminprofile.php');
        exit();
    }

    // Retrieve and display student posts
    $studentPostsQuery = mysqli_query($conn, "SELECT * FROM `posts` WHERE user_id != $id");

    echo "<table>";
    echo "<tr><th>Name</th><th>Post</th><th>Remove</th></tr>";
    
    // Display posts and remove options
    while($post = mysqli_fetch_assoc($studentPostsQuery)) {
        echo "<tr>";
        echo "<td>" . $post['text'] . "</td>";
        echo "<td><img src='../private/posts_picture/" . $post['picture'] . "' width='100px'></td>";
        echo "<td><a href='adminprofile.php?id=" . $post['post_id'] . "'>Remove</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";

} else {
    header('location:index.php');
    exit();
}
?>

<!-- Include footer content here -->
