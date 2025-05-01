// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
// Server-side PHP logic to process the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST['celsius'];

    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>Temperature Result</title>
        <link rel='stylesheet' href='../public_html/css/style.css'>
    </head>
    <body>
    <div class='container'>
        <h1>Temperature Result</h1>";

    if (!is_numeric($celsius)) {
        echo "<p>Please enter a valid number.</p>";
    } elseif ($celsius < 15) {
        echo "<p>It is cold outside.</p>";
    } else {
        echo "<p>It is hot outside.</p>";
    }

    echo "<br><a href='../public_html/index.php'>Go Back</a>
    </div>
    </body>
    </html>";
} else {
    // If accessed directly, redirect to the form
    header("Location: ../public_html/index.php");
    exit();
}
