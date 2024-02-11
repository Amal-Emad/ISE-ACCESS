<?php 
session_start();
if(isset($_SESSION['email'])){      //sure user logedin,if yes comp
    include('./header.php');
    include_once ('../private/conn.php'); 
    $id = $_SESSION['id'];        //any action to this id
    

    if(isset($_POST['submit'])){
        $text = mysqli_real_escape_string($conn,$_POST['text']) ;
        $error = [];
        
        if(!$text){
            $errors[] = 'Text is required';
        } 
        if (empty( $_FILES["picture"]["name"])) {
            $errors[] = 'Picture is required';
        } 
        
        if(strlen($text) < 10){
            $errors[] = 'Text needs to have a minimum of 10 letters';
        }
        
        if(!isset($errors)){
            $image = $_FILES['picture']['name'];
            $image_size = $_FILES['picture']['size'];
            $image_error = $_FILES['picture']['error'];
            $file = explode('.',$image);
            $fileActual = strtolower(end($file));
            $allowed = array('png','jpg','jpeg','svg');
            
            if(in_array($fileActual,$allowed)){
                if($image_error === 0){
                    if($image_size < 4000000){
                        $image_new_name = uniqid('',true).'-'.$image;
                        $target = '../private/posts_picture/'.$image_new_name;
                        $create_at = date('Y-m-d H:i:s');
                        $sql = "INSERT INTO posts (text,picture,user_id,create_at) VALUES ('$text','$image_new_name','$id','$create_at')";
                        
                        if(!empty($image)){
                            mysqli_query($conn,$sql);
                            
                            if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
                                header('location:welcome.php');
                            }
                        } 
                    } else {
                        $errors[] = 'Your picture is too big';
                    }
                } else {
                    $errors[] = 'Error uploading picture';
                }
            } else {
                $errors[] = 'Invalid picture format';
            }
        }
    }
?>

<head>
    
    <link rel="stylesheet" href="all.css">
</head>

<div class="container">
    <center>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 w-50" id="livesearch"  name="livesearch" type="search" placeholder="Search" aria-label="Search">
            <br>
        </form>

        


        <!-- Livesearch JavaScript Code --> 
            
        <script src="js/jquery.js"></script>
        <div id="output">
            <script>
                $(document).ready(function(){
                    $('#livesearch').keyup(function(){
                        let input = $(this).val();
                        if(input != ""){
                            $.ajax({
                                url:"search.php",
                                method:"POST",
                                data:{input:input},
                                success:function(data){
                                    $("#output").html(data);
                                    $("#output").css("display","block");
                                }
                            });
                        } else {
                            window.location = "welcome.php";
                        }   
                    });
                });
            </script>


<!-- Livesearch JavaScript Code --> 
            
<script src="js/jquery.js"></script>
        <div id="output">
            <script>
                $(document).ready(function(){
                    $('#livesearch').keyup(function(){
                        let input = $(this).val();
                        if(input != ""){
                            $.ajax({
                                url:"search.php",
                                method:"POST",
                                data:{input:input},
                                success:function(data){
                                    $("#output").html(data);
                                    $("#output").css("display","block");
                                }
                            });
                        } else {
                            window.location = "welcome.php";
                        }   
                    });
                });
            </script>

            

            <br>
            <a class="btn btn-primary" href="#posts">Add post</a><br><br>
            <?php if(!empty($errors)): ?>
                <div class="alert alert-primary">
                    <?php foreach($errors as $error): ?>
                        <div><?php echo '- '.$error ;?></div>
                    <?php endforeach ?>
                </div>
            <?php endif; ?> 

            <?php
            $user_info = mysqli_query($conn,"SELECT * FROM `posts`");
            while($data = mysqli_fetch_array($user_info)){
                $user_id = $data['user_id'];
                $post_id = $data['post_id'];
                
                echo '<form action="" method="POST">';
                echo '<input type="hidden" name="get_id" value="'.$data["post_id"].'">';
                echo "<img src='../private/posts_picture/".$data['picture']."' width='300px'  class='rounded' >";
                echo '<p><br>'.$data['text'].'</p>';
                echo '<p style="color:grey">'.$data['create_at'].'</p>';

                $user = mysqli_query($conn,"SELECT * FROM `users` WHERE id='$user_id'");
                while($data_user= mysqli_fetch_array($user)){
                    echo '<p class="btn btn-primary">'.$data_user['username'].'</p>';
                }

                // Display Comments
                $check = mysqli_query($conn,"SELECT * FROM comments WHERE post_id='$post_id'");
                if(mysqli_num_rows($check) < 1 ){
                    echo '<div class="NO">No Comments</div>';
                } else {
                    echo '<h3>Comments</h3>';
                    $user_comments = mysqli_query($conn,"SELECT * FROM comments WHERE post_id='$post_id'");
                    while($data = mysqli_fetch_array($user_comments)){
                        $id_user = $data['user_id'] ;
                        echo '<div class="card" style="width:30rem">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">'.$data['text'];

                        $find_user  = mysqli_query($conn,"SELECT * FROM users WHERE id='$id_user'");
                        while($data = mysqli_fetch_array($find_user)){
                            echo '<span dir="ltr"> &nbsp; | '.$data['username'].'</span></li>';
                        }

                        echo '</ul></div>';
                    }
                }
                ?>

                <!-- Comment Form -->
    <details>
    <summary class="text-primary summary-color">Drop Comment</summary>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Write Comment</label>
        <textarea class="form-control" name="comment_text" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br>
        <button name="comment" class="btn btn-primary">Drop Comment</button>
    </div>
</details>



                </form>
                <hr>
            <?php
            }

            if(isset($_POST['get_id'])){
                $get_id = $_POST['get_id'];
            }

            if(isset($_POST['comment'])){
                $comment_text = $_POST['comment_text'];

                if(!isset($comment_text) || $comment_text == ""){
                    exit();
                }

                $create_at = date('Y-m-d H:i:s');
                $sql = "INSERT INTO comments (text,created_at,user_id,post_id) 
                        VALUES ('$comment_text','$create_at','$id','$get_id')";
                mysqli_query($conn,$sql);
                echo '<meta http-equiv="Refresh" content="0; url=welcome.php">';
            }
            ?>

            <!-- Add Post Form -->
<form action="" method="POST" enctype="multipart/form-data">
    <h1 id="posts">Add Post</h1>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Text</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <label for="formFile" class="form-label">Update Profile Picture</label>
    <p>Use dimensions <span>750x750</span> for a better look</p>
    <input class="form-control" name="picture" type="file" id="formFile">
    <br> <button name="submit" type="submit" class="btn btn-primary">Post</button>
    </div>


    


</form>
<footer class="mt-5 text-center">
        
        <p>Intelligent Systems Engineering Student at Tafila Technical University</p>
        <p>Made with <span style="color: red;">&#10084;</span> by Amal Alkraimeen</p>
    </footer>

        <?php
        } else {
            header('location:index.php');
        }
        ?>
    </center>
</div>
