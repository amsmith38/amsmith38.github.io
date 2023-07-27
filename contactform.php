<!doctype html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "amsmith38@my.waketech.edu";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";
  
  mail($to, $subject, $body);
  
  // Redirect the user to a thank you page
  header("Location: thank_you.html");
  exit;
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
</body>
</html>