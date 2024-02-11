<?php
session_start();
include_once ('../private/conn.php');
?>
<head>
<link rel="stylesheet" href="all.css" >
</head>
<div class="container">
<?php
$livesearch = $_POST['input'];
$user_info = mysqli_query($conn,"SELECT * FROM `posts` WHERE text LIKE '%$livesearch%'");
while($data = mysqli_fetch_array($user_info)){
$user_id = $data['user_id'];
$post_id = $data['post_id'];
echo '<form action="" method="POST" >';
echo '<input type="hidden" name="get_id" value="'.$data["post_id"].'">';
echo "<img src='../private/posts_picture/".$data['picture']."'' width='300px'  class='rounded' >";
echo '<p><br>'.$data['text'].'</p>
<p  style="color:grey">'.$data['create_at'].'</p>';

$user = mysqli_query($conn,"SELECT * FROM `users` WHERE id='$user_id'");
while($data_user= mysqli_fetch_array($user)){
    echo '<p class="btn btn-success">'.$data_user['username'].'<p>';
}

?>
<?php
$check = mysqli_query($conn,"SELECT * FROM comments WHERE post_id='$post_id'");
if(mysqli_num_rows($check) < 1 ){
    echo '<div class="alert alert-danger">No Comments</div>';
}else{
    echo '<h3>Comments</h3>';
    $user_comments = mysqli_query($conn,"SELECT * FROM comments WHERE post_id='$post_id'");
    while($data = mysqli_fetch_array($user_comments)){
        $id_user = $data['user_id'] ;
        echo '<div class="card" style="width:30rem">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">'.$data['text'];
       // echo '<li class="list-group-item">'.$data['created_at'].'</li>';
        $find_user  = mysqli_query($conn,"SELECT * FROM users WHERE id='$id_user'");
        while($data = mysqli_fetch_array($find_user)){
            echo '<span dir="ltr"> &nbsp; | '.$data['username'].'</span></li>';
        
    }

 echo '</ul></div>';
}
}


}



?>
