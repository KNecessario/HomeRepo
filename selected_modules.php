<?php
// selected_modules.php
session_start();
include("php/connection.php");

// Check if a module is selected via GET parameter
if (isset($_GET['module'])) {
  $module_name = urldecode($_GET['module']);

  // Fetch module details from the database
  $stmt = $conn->prepare("SELECT * FROM modules WHERE modulename = ?");
  $stmt->bind_param("s", $module_name);
  $stmt->execute();
  $result = $stmt->get_result();
  $module = $result->fetch_assoc();

  if (!$module) {
    echo "Module not found.";
    exit();
  }

  // Fetch the different versions of the selected module
  $versions_stmt = $conn->prepare("SELECT * FROM selectedmodules WHERE module_id = ?");
  $versions_stmt->bind_param("i", $module['module_id']);
  $versions_stmt->execute();
  $versions_result = $versions_stmt->get_result();
  $versions = [];
  while ($version = $versions_result->fetch_assoc()) {
    $versions[] = $version;
  }
} else {
  echo "No module selected.";
  exit();
}

// Handling form submission for selecting a version
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $selected_module_id = $_POST['module_id'];
  $selected_version_id = $_POST['selected_id']; // Fix: Use `selected_id` instead of `version_id`

  // Check if the selected version matches the selected module
  $stmt = $conn->prepare("SELECT * FROM selectedmodules WHERE selected_id = ? AND module_id = ?");
  $stmt->bind_param("ii", $selected_version_id, $selected_module_id);
  $stmt->execute();
  $version_result = $stmt->get_result();

  if ($version_result->num_rows > 0) {
    // Version exists for the selected module
    $selected_version = $version_result->fetch_assoc();
    echo "You have selected version: " . htmlspecialchars($selected_version['version_name']);
  } else {
    echo "Invalid version selected for this module.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($module['modulename']); ?> - Documentation</title>
  <link rel="icon" href="img/image.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/documentationStyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://fontawesome.com/icons/location-dot?f=classic&s=solid" />

</head>

<body>
  <!--nav bar-->
  </head>

  <body>
    <!-- Navbar -->

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

        <div class="container" id="containerBack">
          <a href="documentation.php"><img src="image/icon/back.svg" alt="" id="img1"></a>
          <h1 class="my-4"><?php echo htmlspecialchars($module['modulename']); ?> Documentation</h1>
        </div>



        <div class="container-fluid" id="divWrapper">




          <!-- Display versions and handle version selection -->
          <?php if (!empty($versions)): ?>
            <?php foreach ($versions as $version): ?>
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Version: <?php echo htmlspecialchars($version['version_name']); ?></h5>
                  <p class="card-text"><?php echo htmlspecialchars($version['description']); ?></p>

                </div>
                <div class="container-fluid p-0 m-0" id="divbutton">
                  <form action="select_module.php" method="POST">
                    <input type="hidden" name="module_id" value="<?php echo $row['module_id']; ?>">
                    <input type="hidden" name="modulename" value="<?php echo htmlspecialchars($row['modulename']); ?>">
                    <input type="hidden" name="description" value="<?php echo htmlspecialchars($row['description']); ?>">
                    <button type="submit" class="btnView">View</button>


                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>No versions available for this module.</p>
          <?php endif; ?>

        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>

</html>