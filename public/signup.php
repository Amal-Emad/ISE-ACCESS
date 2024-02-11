<?php include('./header.php') ?>
<?php
include_once ('../private/conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = mysqli_real_escape_string($conn,$_POST['username']) ;
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $userType = mysqli_real_escape_string($conn, $_POST['userType']); // Added line
    $error = [];

    $check_user = mysqli_query($conn,"SELECT * FROM `users` WHERE email='$email'");
    if(mysqli_num_rows($check_user) != 0){
        $errors[] = 'This email has already been used. Use another email';
    }

    if(!$email){
        $errors[] = 'Email is required';
    } 

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Enter a valid email'; 
    }

    if(empty($_FILES["picture"]["name"])){
        $errors[] = 'Picture is required';
    }

    if(strlen($username) < 8){
        $errors[] = 'Username needs to have a minimum of 8 letters';
    }

    if(strlen($password) < 8){
        $errors[] = 'Password needs to have a minimum of 8 letters';
    }

    if(!isset($errors)){
        $image = $_FILES['picture']['name'];
        $image_size = $_FILES['picture']['size'];
        $image_error = $_FILES['picture']['error'];
        $file = explode('.', $image);
        $fileActual = strtolower(end($file));
        $allowed = array('png', 'jpg', 'jpeg', 'svg');
        if(in_array($fileActual, $allowed)){
            if($image_error === 0){
                if($image_size < 4000000){
                    $image_new_name = uniqid('', true) . '-' . $image;
                    $target = '../private/profile_picture/' . $image_new_name;
                    $sql = "INSERT INTO users (username, email, password, picture, user_type) VALUES ('$username', '$email', '$password', '$image_new_name', '$userType')"; // Modified query
                    if(!empty($image)){
                        mysqli_query($conn, $sql);
                        if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)){
                            header('location:index.php');
                        }
                    } 
                } else {
                    $errors[] = 'Your picture is too big';
                }
            } else {
                $errors[] = 'Check picture type';
            }
        }
    }
}
?>

<div class="container">
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <div><?php echo '- ' . $error; ?></div>
        <?php endforeach ?>
    </div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign Up</div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" name="username" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Profile Picture</label>
                            <p>Use these dimensions <span>750x750</span> for a nice look</p>
                            <input class="form-control" name="picture" type="file" id="formFile">
                        </div>
                        <!-- Buttons for choosing admin or student -->
                        <div class="row mb-3">
                            <label for="userType" class="col-md-4 col-form-label text-md-end">User Type</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="userType" id="adminRadio" value="admin">
                                    <label class="form-check-label" for="adminRadio">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="userType" id="studentRadio" value="student" checked>
                                    <label class="form-check-label" for="studentRadio">Student</label>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">Already have an account? Login</a>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <style>
                span {
                    color: crimson;
                }
            </style>
            <footer class="mt-5 text-center">
                <p>Intelligent Systems Engineering Student at Tafila Technical University</p>
                <p>Made with <span style="color: red;">&#10084;</span> by Amal Alkraimeen</p>
            </footer>
        </div>
    </div>
</div>
