
<?php include '../includes/carousel_header.php'; ?>
<?php
// Include all section files
require_once 'hero_section.php';
require_once 'cards_section.php';
require_once 'career_section.php';
require_once 'values_section.php';
require_once 'clients_section.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecospace - Providing Geospatial Solutions</title>
    <style>
        /* Global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Section spacing */
        section {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <?php
    // Render sections in the correct order
    renderHeroSection();
    renderCardsSection();
    renderCareerSection();
    renderValuesSection();
    renderClientsSection();
    ?>
</body>
</html>
<?php include '../includes/footer.php'; ?>

