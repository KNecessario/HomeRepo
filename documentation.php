<?php
// documentation.php

// Include the connection file using the absolute path
include("php/connection.php");
// Fetch all modules from the database
$sql = "SELECT * FROM modules";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fixed Navbar</title>
  <link rel="icon" href="img/image.png" type="image/x-icon" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/documentationStyle.css" />
  <!--Font import Roboto Slab-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://fontawesome.com/icons/location-dot?f=classic&s=solid" />
</head>

<body>
  <!--nav bar-->
  <nav class="navbar navbar-expand-lg d-flex justify-content-between">
    <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="logo" />
    </a>

    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarNav">
      <div class="mx-auto d-flex justify-content-center">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="releasenote.php">Release Note</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation.php">Documentation</a>
=======
            <a class="nav-link" href="#containerfluid1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#containerfluid3">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="release-note.html">Release Note</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation.html">Documentation</a>
>>>>>>> e18cb5c9ff69a39a82024c96cc96d6b3484053fb
          </li>
        </ul>
      </div>
    </div>

    <button class="btnContact">Contact Us</button>
  </nav>

  <section class="container-fluid p-0" id="container1">
    <div class="container-lg p-0" id="main1">
      <h1 class="my-4">Documentation</h1>
      <div class="container-fluid" id="divWrapper">
        <?php if($result && $result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row['modulename']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                <!-- You can add additional dynamic content, for example, a date or link -->
                 <!-- Selection Form -->
<<<<<<< HEAD
              </div>
              <div class="container-fluid p-0 m-0" id="divbutton">
                <form action="select_module.php" method="POST">
                  <input type="hidden" name="module_id" value="<?php echo $row['module_id']; ?>">
                  <input type="hidden" name="modulename" value="<?php echo htmlspecialchars($row['modulename']); ?>">
                  <input type="hidden" name="description" value="<?php echo htmlspecialchars($row['description']); ?>">
                  <button type="submit" class="btnView">View</button>
                </form>
              </div>
              
=======
                 <form action="select_module.php" method="POST">
                            <input type="hidden" name="module_id" value="<?php echo $row['module_id']; ?>">
                            <input type="hidden" name="modulename" value="<?php echo htmlspecialchars($row['modulename']); ?>">
                            <input type="hidden" name="description" value="<?php echo htmlspecialchars($row['description']); ?>">
                            <button type="submit" class="btnView">Select</button>
                 </form>
              </div>
>>>>>>> e18cb5c9ff69a39a82024c96cc96d6b3484053fb
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No modules found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>










  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
<<<<<<< HEAD
    
=======
    document.addEventListener("DOMContentLoaded", function() {
      const homeSections = [
        document.getElementById("containerfluid1"),
        document.getElementById("containerfluid2"),
      ];
      const aboutSections = [
        document.getElementById("containerfluid3"),
        document.getElementById("containerfluid4"),
        document.getElementById("containerfluid5"),
      ];

      const homeLink = document.querySelector(
        ".nav-link[href='#containerfluid1']"
      );
      const aboutLink = document.querySelector(
        ".nav-link[href='#containerfluid3']"
      );

      function updateActiveLink() {
        let scrollPosition = window.scrollY + window.innerHeight / 3;

        let isInHome = homeSections.some((section) => {
          let top = section.offsetTop;
          let bottom = top + section.clientHeight;
          return scrollPosition >= top && scrollPosition < bottom;
        });

        let isInAbout = aboutSections.some((section) => {
          let top = section.offsetTop;
          let bottom = top + section.clientHeight;
          return scrollPosition >= top && scrollPosition < bottom;
        });

        if (isInHome) {
          homeLink.classList.add("active");
          aboutLink.classList.remove("active");
        } else if (isInAbout) {
          aboutLink.classList.add("active");
          homeLink.classList.remove("active");
        } else {
          homeLink.classList.remove("active");
          aboutLink.classList.remove("active");
        }
      }

      window.addEventListener("scroll", updateActiveLink);
      updateActiveLink();
    });
>>>>>>> e18cb5c9ff69a39a82024c96cc96d6b3484053fb
  </script>
</body>

</html>
