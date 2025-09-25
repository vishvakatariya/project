
<?php
include 'db.php';
$submitted=false;
// contact.php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    // Sanitize input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "INSERT INTO contactmsg (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) 
    {
        $submitted = true;
    } 
    else 
    {
        $error = "Error: " . $conn->error;
    }
}
    // Here, you'd normally send an email or store in database
    // mail() function or database logic can go here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - SCENTAURA</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

 <header class="header">
        <div class="logo">SCENTAURA - Where Scent Meets Soul.</div>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="about-us.php" >About Us</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>
    </header>


<section class="contact-section">
    <div class="container">
        <h2>Get in Touch</h2>
        <p>Have a question about our fragrances, your order, or anything else? We'd love to hear from you!</p>

        <?php if ($submitted): ?>
            <div class="success-message">
                ✅ Thank you, <?= $name ?>! Your message has been received. We'll contact you soon.
            </div>
       
    </div>
        <?php else: ?>
            <form action="contact.php" method="POST" class="contact-form">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Your Email</label>
                <input type="email" name="email" id="email" required>

                <label for="message">Your Message</label>
                <textarea name="message" id="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        <?php endif; ?>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <p>&copy; <?= date("Y") ?> ScentAura. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
