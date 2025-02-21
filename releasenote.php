<?php
include("php/connection.php");
$sql = "SELECT * FROM releaseNotes";
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
  <link rel="stylesheet" href="css/release.css" />

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


  <!-- Release Notes Section -->
  <section class="container-fluid " id="containerfluid1">
    <div class="container" id="layout1">
      <h1 class="text-center mb-4">Release Notes</h1>

      <div class="container">
        <p class="text-center" id="textSub">
          The latest release of LHIKE ERP introduces major enhancements to various modules.
          This update includes new features, bug fixes, and performance improvements.
        </p>
      </div>


      <div class="row g-4">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card shadow-sm">
                <div class="card-header text-white">
                  <h5 class="mb-0"><?php echo htmlspecialchars($row['releasenote_name']); ?></h5>
                  <p class="release-date mb-0"><?php echo date("F d, Y", strtotime($row['note_release_date'])); ?></p>
                </div>
                <div class="card-body">
                  <p class="description"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                  <button class="view-btn">View</button>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo '<p class="text-center">No release notes available.</p>';
        }
        ?>
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