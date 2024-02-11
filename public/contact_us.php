<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Add Font Awesome CDN link -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="all.css">
    <title>Contact Us - ISE Access</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ISE ACCESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Home</a>
        </li>
        <li class="nav-item">
                  <a class="nav-link" href="library.php"> ISE Library</a>
                </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact_us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="contact_us.php">Contact Us</a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h1>Contact Us</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Phone Numbers</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Phone 1: +123-456-7890</td>
            </tr>
            <tr>
                <td>Phone 2: +962-654-3210</td>
            </tr>
            <tr>
        <td>
            <a href="https://www.instagram.com/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i></a>
        </td>
    </tr>
        </tbody>
    </table>

    <!-- Embedded Google Map -->
    <div class="mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364.70864269977716!2d35.64295591870443!3d30.84105944148756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x150394862e64a255%3A0xee20bf16bccac991!2sTafila%20Technical%20University!5e0!3m2!1sen!2sjo!4v1692860461239!5m2!1sen!2sjo"
            width="100%"
            height="400"
            frameborder="0"
            style="border:0"
            allowfullscreen>
        </iframe>
    </div>
</div>

<footer class="mt-5 text-center">
      
        <p>Intelligent Systems Engineering Student at Tafila Technical University</p>
        <p>Made with <span style="color: red;">&#10084;</span> by Amal Alkraimeen</p>
    </footer>

<!-- Include the Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
