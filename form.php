<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $findUs = htmlspecialchars(trim($_POST['find-us']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Server-side validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    // Database connection details
    $host = 'localhost'; // or your hosting provider's database server
    $dbname = 'slopehil_contactform'; // replace with your database name
    $username = 'slopehil_contactform'; // replace with your database username
    $password = 'Muriuki@2005'; // replace with your database password

    // Save to database using PDO
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("INSERT INTO contact_form (name, email, phone, find_us, message) VALUES (:name, :email, :phone, :find_us, :message)");
        $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'find_us' => $findUs, 'message' => $message]);
        echo "Form submitted successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Send email notification
    $to = "contact@slopehillsmoversltm.co.ke"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $email_message = "Name: $name\nEmail: $email\nPhone: $phone\nHow Did You Find Us: $findUs\nMessage: $message";
    $headers = "From: no-reply@slopehillsmoversltm.co.ke"; // Replace with your sender email address

    if (mail($to, $subject, $email_message, $headers)) {
        echo "Notification sent";
    } else {
        echo "Error sending notification";
    }

    // Redirect to thank you page
    header("Location: thank_you.html");
    exit();
}
?>
