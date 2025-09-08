<?php
$pageTitle = "About Us - scentaura";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    
    <!-- Bootstrap CSS (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff8f0;
            color: #333;
        }
        .about-section {
            padding: 60px 20px;
        }
        .about-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #b87c4b;
        }
        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>

    <div class="container about-section">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="about-title">About Us</h1>
                <p class="about-text">
                    Welcome to <strong>ScentAura</strong> – Where Scent Meets Soul.
                    <br><br>
                    At our shop, fragrance is more than just a product – it’s an experience. Every perfume in our collection has been handpicked to help you express your style, mood, and identity. Whether you’re drawn to floral elegance, warm woods, or fresh citrus, we have a scent that speaks to you.
                    <br><br>
                    We are proud to offer:
                    <ul class="text-start">
                        <li>Authentic, curated perfume collections</li>
                        <li>Expert guidance to help you find your signature scent</li>
                        <li>Elegant gift packaging and customization options</li>
                    </ul>
                    Our goal is simple: to inspire confidence and connection through the power of scent. Thank you for choosing us to be part of your fragrance journey.
                    <br><br>
                    <em>Your story. Your scent. Your shop.</em>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
