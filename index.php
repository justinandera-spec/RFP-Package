<?php
// If no 'q' parameter is present, show the generator
if (!isset($_GET['q'])) {
    include 'generate.php';
    exit();
}

// Otherwise, handle the redirect
$map = [
    'KgH9ggt' => 'https://google.com',
    // Add more codes here
];

$code = $_GET['q'];
if (isset($map[$code])) {
    header("Location: " . $map[$code]);
    exit();
} else {
    echo "Invalid share code";
}
?>
