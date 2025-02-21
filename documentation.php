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
              </div>
              <div class="container-fluid p-0 m-0" id="divbutton">
                <form action="select_module.php" method="POST">
                  <input type="hidden" name="module_id" value="<?php echo $row['module_id']; ?>">
                  <input type="hidden" name="modulename" value="<?php echo htmlspecialchars($row['modulename']); ?>">
                  <input type="hidden" name="description" value="<?php echo htmlspecialchars($row['description']); ?>">
                  <button type="submit" class="btnView">View</button>
                </form>
              </div>
              
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
    
  </script>
</body>

</html>
