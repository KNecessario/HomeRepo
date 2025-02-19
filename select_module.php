<?php
// select_module.php
session_start();
include("php/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $module_id = $_POST['modules_id'];
    $module_name = $_POST['modulename'];

    // Store selected module details in session
    $_SESSION['selected_module'] = [
        'id' => $module_id,
        'name' => $module_name
    ];

    // Redirect to selected_modules.php
    header("Location: selected_modules.php?module=" . urlencode($module_name));
    exit();
} else {
    echo "Invalid request.";
}
?>
