<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="all.css"> 
    <title>Library - ISE Access</title>
</head>
<body>
<style>
        .library-title {
            color: #8c15fb;
            text-align: center;
        }
</style>
  
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
                  <a class="nav-link active" aria-current="page" href="library.php"> Ise library</a>
                </li>
        <li class="nav-item">
          <a class="nav-link" href="freq_q.php">Frequent Questions</a>
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

  <!-- Search bar -->
  <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search in Library" aria-label="Search in Library" aria-describedby="searchBtn">
        <button class="btn btn-primary" type="button" id="searchBtn">Search</button>
    </div>

<h1 class="mb-4 library-title">ISE LIBRARY</h1>
    
    <!-- Vertical Library Links with Tooltips -->
    <div class="d-flex flex-column">
        <a href="https://drive.google.com/drive/folders/1fCpHmo5vCzMGBjLF8vRhg5vOa2CN8L7d" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Machine Learning is a subset of artificial intelligence that focuses on the development of algorithms that enable computers to learn from data and make predictions or decisions. It's used in various fields for tasks like pattern recognition, image and speech recognition, and data analysis.
   - Inclusion Reason: Machine Learning is a fundamental skill in modern intelligent systems. By understanding machine learning techniques, students can develop intelligent software that learns and adapts to changing conditions.">Machine Learning</a>
        <a href="https://drive.google.com/drive/folders/1FyeF6_GgP8dMqe1o2_bS7O5Xo2c4YtTP" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Computer Vision is a field that involves teaching computers to interpret and understand the visual world. It's used in applications like image and video analysis, object detection, facial recognition, and self-driving cars.
   - Inclusion Reason: Computer Vision is important for building systems that can perceive and understand visual information, which is crucial for developing intelligent systems that interact with the environment.">Computer Vision</a>
        <a href="https://drive.google.com/drive/folders/1HhkglTneLt82Y6PfkgoPehZ6Qm5uENMp" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Data Structures are ways of organizing and storing data in a computer to facilitate efficient access and modification. They are essential for optimizing data manipulation and retrieval operations.
   - Inclusion Reason: Understanding data structures is vital for designing efficient algorithms and optimizing the performance of software systems, which are key components of intelligent software development.">Data Structures</a>
        <a href="https://drive.google.com/drive/folders/1U-Qubyui6BfNpuTCVB6d-zICwDaVEZUW" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Database Management involves the design, implementation, and management of databases to store and retrieve data. It covers relational databases, query languages, and data integrity.
   - Inclusion Reason: Databases are essential for storing and managing data in intelligent systems. Students need to learn how to design and manage databases to support efficient data storage and retrieval">Data Base Management</a>
        <a href="https://drive.google.com/drive/folders/1EsPzHelJMcZrAP36WjnzU4yg_71ytpoY" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Embedded Systems are specialized computing systems designed to perform dedicated functions within larger systems. They are used in devices like appliances, cars, and industrial machines.
   - Inclusion Reason: Many intelligent systems are embedded in real-world devices. Understanding embedded systems is crucial for developing intelligent devices that can interact with the physical world.">Embedded Systems</a>
        <a href="https://drive.google.com/drive/folders/1dhK0f-8ibMD4KK6FfX0Tv6iCi4zDRGcr" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="  - Description: High Performance Processors are CPUs designed to execute instructions quickly and efficiently. They are used in applications that require heavy computational workloads.
   - Inclusion Reason: Developing intelligent software often involves processing large amounts of data. Understanding high-performance processors is important for optimizing software performance in intelligent systems.">High Performance Processors</a>
        
        <a href="https://drive.google.com/drive/folders/1rPl79n7xZawk5FeB8OR7m2fVQl3HBP7w" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Neural Networks are a class of machine learning algorithms inspired by the structure of the human brain. They are used for tasks like image recognition, natural language processing, and more.
   - Inclusion Reason: Neural Networks are the foundation of many modern AI techniques. Understanding how they work and their applications is essential for building advanced intelligent systems.">Neural Networks</a>
        <a href="https://drive.google.com/drive/folders/1ilB_mU1uWOR1Xd9T9py8Ji5Yi0AxyEMv" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Fuzzy Logic is a mathematical framework that deals with uncertainty and imprecision. It's used in situations where data might not be binary but instead has varying degrees of truth.
   - Inclusion Reason: Fuzzy Logic is relevant for intelligent systems that need to make decisions in uncertain or ambiguous situations, which is common in real-world scenarios.
">Fuzzy Logic</a>
        <a href="https://drive.google.com/drive/folders/1t4tOKXZyuDmXW3EVwXWhwLtdyA3f164h" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Computer Networks involve the study of how computers and devices are interconnected to share resources and information. It covers network protocols, architectures, and security.
   - Inclusion Reason: Intelligent systems often need to communicate and exchange data. Understanding computer networks is essential for building intelligent systems that can interact with each other.">Computer Networks</a>
        <a href="https://drive.google.com/drive/folders/1V7YpoBGdWH8Mw72JXEp1MAMy1Q0XjhuW" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Discrete Mathematics deals with countable and distinct objects, as opposed to continuous mathematics. It covers topics like logic, sets, relations, and graph theory.
    - Inclusion Reason: Discrete Mathematics provides the foundation for understanding algorithms, data structures, and logic, which are essential for building intelligent software systems.">Discrete</a>
        <a href="https://drive.google.com/drive/folders/12aZiz1u_EC3aHThKeWI32pnClvZGkNb0" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Operating Systems manage computer hardware and software resources, providing a stable environment for software to run. They handle tasks like memory management, process scheduling, and file systems.
    - Inclusion Reason: Intelligent systems run on operating systems. Understanding operating systems is important for developing software that interacts efficiently with the underlying hardware.">Operating Systems</a>
        <a href="https://drive.google.com/drive/folders/1d7V147IhFMP_KOyXrwJcB22V2ATIWY1G" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Logic Design involves designing digital circuits using logic gates to perform computations and control operations. It's crucial for building hardware components of intelligent systems.
    - Inclusion Reason: Logic Design is fundamental for creating the hardware components that support intelligent systems, especially when dealing with embedded systems and hardware-level interactions.">Logic Design</a>
    
    <a href="https://drive.google.com/drive/folders/1fCpHmo5vCzMGBjLF8vRhg5vOa2CN8L7d" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Machine Learning is a subset of artificial intelligence that focuses on the development of algorithms that enable computers to learn from data and make predictions or decisions. It's used in various fields for tasks like pattern recognition, image and speech recognition, and data analysis.
   - Inclusion Reason: Machine Learning is a fundamental skill in modern intelligent systems. By understanding machine learning techniques, students can develop intelligent software that learns and adapts to changing conditions.">Machine Learning</a>
        <a href="https://drive.google.com/drive/folders/1FyeF6_GgP8dMqe1o2_bS7O5Xo2c4YtTP" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Computer Vision is a field that involves teaching computers to interpret and understand the visual world. It's used in applications like image and video analysis, object detection, facial recognition, and self-driving cars.
   - Inclusion Reason: Computer Vision is important for building systems that can perceive and understand visual information, which is crucial for developing intelligent systems that interact with the environment.">Computer Vision</a>
        <a href="https://drive.google.com/drive/folders/1HhkglTneLt82Y6PfkgoPehZ6Qm5uENMp" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Data Structures are ways of organizing and storing data in a computer to facilitate efficient access and modification. They are essential for optimizing data manipulation and retrieval operations.
   - Inclusion Reason: Understanding data structures is vital for designing efficient algorithms and optimizing the performance of software systems, which are key components of intelligent software development.">Data Structures</a>
        <a href="https://drive.google.com/drive/folders/1U-Qubyui6BfNpuTCVB6d-zICwDaVEZUW" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Database Management involves the design, implementation, and management of databases to store and retrieve data. It covers relational databases, query languages, and data integrity.
   - Inclusion Reason: Databases are essential for storing and managing data in intelligent systems. Students need to learn how to design and manage databases to support efficient data storage and retrieval">Data Base Management</a>
        <a href="https://drive.google.com/drive/folders/1EsPzHelJMcZrAP36WjnzU4yg_71ytpoY" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Embedded Systems are specialized computing systems designed to perform dedicated functions within larger systems. They are used in devices like appliances, cars, and industrial machines.
   - Inclusion Reason: Many intelligent systems are embedded in real-world devices. Understanding embedded systems is crucial for developing intelligent devices that can interact with the physical world.">Embedded Systems</a>
        <a href="https://drive.google.com/drive/folders/1dhK0f-8ibMD4KK6FfX0Tv6iCi4zDRGcr" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="  - Description: High Performance Processors are CPUs designed to execute instructions quickly and efficiently. They are used in applications that require heavy computational workloads.
   - Inclusion Reason: Developing intelligent software often involves processing large amounts of data. Understanding high-performance processors is important for optimizing software performance in intelligent systems.">High Performance Processors</a>
        
        <a href="https://drive.google.com/drive/folders/1rPl79n7xZawk5FeB8OR7m2fVQl3HBP7w" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Neural Networks are a class of machine learning algorithms inspired by the structure of the human brain. They are used for tasks like image recognition, natural language processing, and more.
   - Inclusion Reason: Neural Networks are the foundation of many modern AI techniques. Understanding how they work and their applications is essential for building advanced intelligent systems.">Neural Networks</a>
        <a href="https://drive.google.com/drive/folders/1ilB_mU1uWOR1Xd9T9py8Ji5Yi0AxyEMv" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Fuzzy Logic is a mathematical framework that deals with uncertainty and imprecision. It's used in situations where data might not be binary but instead has varying degrees of truth.
   - Inclusion Reason: Fuzzy Logic is relevant for intelligent systems that need to make decisions in uncertain or ambiguous situations, which is common in real-world scenarios.
">Fuzzy Logic</a>
        <a href="https://drive.google.com/drive/folders/1t4tOKXZyuDmXW3EVwXWhwLtdyA3f164h" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" Description: Computer Networks involve the study of how computers and devices are interconnected to share resources and information. It covers network protocols, architectures, and security.
   - Inclusion Reason: Intelligent systems often need to communicate and exchange data. Understanding computer networks is essential for building intelligent systems that can interact with each other.">Computer Networks</a>
        <a href="https://drive.google.com/drive/folders/1V7YpoBGdWH8Mw72JXEp1MAMy1Q0XjhuW" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Discrete Mathematics deals with countable and distinct objects, as opposed to continuous mathematics. It covers topics like logic, sets, relations, and graph theory.
    - Inclusion Reason: Discrete Mathematics provides the foundation for understanding algorithms, data structures, and logic, which are essential for building intelligent software systems.">Discrete</a>
        <a href="https://drive.google.com/drive/folders/12aZiz1u_EC3aHThKeWI32pnClvZGkNb0" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title=" - Description: Operating Systems manage computer hardware and software resources, providing a stable environment for software to run. They handle tasks like memory management, process scheduling, and file systems.
    - Inclusion Reason: Intelligent systems run on operating systems. Understanding operating systems is important for developing software that interacts efficiently with the underlying hardware.">Operating Systems</a>
        <a href="https://drive.google.com/drive/folders/1d7V147IhFMP_KOyXrwJcB22V2ATIWY1G" class="btn btn-primary mb-2" data-bs-toggle="tooltip" data-bs-placement="right" title="- Description: Logic Design involves designing digital circuits using logic gates to perform computations and control operations. It's crucial for building hardware components of intelligent systems.
    - Inclusion Reason: Logic Design is fundamental for creating the hardware components that support intelligent systems, especially when dealing with embedded systems and hardware-level interactions.">Logic Design</a>
    </div>
</div>

<footer class="mt-5 text-center">
        
        <p>Intelligent Systems Engineering Student at Tafila Technical University</p>
        <p>Made with <span style="color: red;">&#10084;</span> by Amal Alkraimeen</p>
    </footer>

<!-- Include the Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--  tooltips -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

</body>
</html>
