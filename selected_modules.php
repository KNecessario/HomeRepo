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
    $versions_stmt = $conn->prepare("SELECT * FROM module_versions WHERE module_id = ?");
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
    $selected_version_id = $_POST['version_id'];

    // Check if the selected version matches the selected module
    $stmt = $conn->prepare("SELECT * FROM module_versions WHERE version_id = ? AND module_id = ?");
    $stmt->bind_param("ii", $selected_version_id, $selected_module_id);
    $stmt->execute();
    $version_result = $stmt->get_result();

    if ($version_result->num_rows > 0) {
        // Version exists for the selected module
        $selected_version = $version_result->fetch_assoc();
        echo "You have selected version: " . htmlspecialchars($selected_version['version_name']);
        // Redirect or take other actions as needed
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
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg d-flex justify-content-between">
    <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="logo" />
    </a>
  </nav>

  <section class="container-fluid p-0" id="container1">
    <div class="container-lg p-0" id="main1">
      <h1 class="my-4"><?php echo htmlspecialchars($module['modulename']); ?> Documentation</h1>
      <div class="container-fluid" id="divWrapper">

        <!-- Displaying the module details -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($module['modulename']); ?></h5>
            <p class="card-text"><?php echo htmlspecialchars($module['description']); ?></p>
          </div>
        </div>

        <!-- Display versions and handle version selection -->
        <?php if (!empty($versions)): ?>
          <?php foreach ($versions as $version): ?>
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">Version: <?php echo htmlspecialchars($version['version_name']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($version['version_description']); ?></p>

                <form action="selected_modules.php" method="POST">
                  <input type="hidden" name="module_id" value="<?php echo $module['module_id']; ?>">
                  <input type="hidden" name="modulename" value="<?php echo htmlspecialchars($module['modulename']); ?>">
                  <input type="hidden" name="description" value="<?php echo htmlspecialchars($module['description']); ?>">
                  <input type="hidden" name="version_id" value="<?php echo $version['version_id']; ?>">
                  <button type="submit" class="btnView">Select Version</button>
                </form>
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
