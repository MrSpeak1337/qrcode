<?php

// Get the website link from the GET request
$website = $_GET['website'];

// Validate the website link
if (!filter_var($website, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    exit("Invalid website link");
}

// Generate the QR code using the library of your choice
// For example, using the PHP QR Code library:
require_once 'libs/qrlib.php';
QRcode::png($website);

?>
