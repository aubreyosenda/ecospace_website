<?php
// Combined page to include both Carousel and Header components
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecospace Services - Providing Geospatial Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Global styles that both components can use */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        /* Add this to ensure consistent container widths */
        .header-container, .carousel-container .container {
            max-width: 1320px; /* Match Bootstrap's xxl breakpoint */
            margin: 0 auto;
            padding: 0 12px; /* Match Bootstrap's gutter */
        }
        
        /* On larger screens, adjust the header container to match carousel */
        @media (min-width: 1400px) {
            .header-container {
                padding: 0 40px; /* Match the carousel container padding */
            }
        }
    </style>
    
    <!-- Header Styles -->
    <style>
        <?php include 'header-styles.css'; ?>
    </style>
    
    <!-- Carousel Styles -->
    <style>
        <?php include 'carousel-styles.css'; ?>
    </style>
</head>
<body>
    <!-- Carousel Component -->
    <?php include 'carousel.php'; ?>
    
    <!-- Header Component -->
    <?php include 'header.php'; ?>
    
    <!-- Main Content 
    <main class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Welcome to Ecospace Services</h2>
                <p>Your trusted partner for geospatial solutions. We provide cutting-edge technology and expertise to help you solve complex spatial challenges.</p>
            </div>
        </div>
    </main>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>