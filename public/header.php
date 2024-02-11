<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="all.css"> 
</head>
<body>
  

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" onmouseover="showNote()" onmouseout="hideNote()">ISE ACCESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <?php 
    if(isset($_SESSION['email'])){
        echo '<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="welcome.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home" onclick="showStars()">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="library.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ISE Library" onclick="showStars()">ISE Library</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="freq_q.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Frequent Questions" onclick="showStars()">Frequent Questions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profile.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile" onclick="showStars()">Profile</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Services" onclick="showStars()">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="contact_us.php">Contact Us</a>
                  <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
              </li>';
    } else {
        echo '<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log In" onclick="showStars()">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sign Up" onclick="showStars()">Sign Up</a>
              </li>';
    }
    ?>
</ul>
    </div>
  </div>
</nav>

<div class="container">
 
</div>

<!-- Note about ISE ACCESS -->
<div id="iseNote" class="container text-center mt-4" style="display: none;">
    <p><strong>ISE Access is a student club where you can find anything you want!</strong></p>
</div>



<script>
function showNote() {
    document.getElementById("iseNote").style.display = "block";
}

function hideNote() {
    document.getElementById("iseNote").style.display = "none";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
