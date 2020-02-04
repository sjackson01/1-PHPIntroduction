<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Predefined Variables</title>
</head>
<header>
    <a href="constants.php">Constants</a>
</header>
<body>
    <?php
        
        // Set today's date as a constant 
        define('TODAY', 'Feburary, 3, 2020');

        // Print message using predefined constants
        echo '<p>Today is ' . TODAY . ' .<br>This server dis running version <strong>'
        . PHP_VERSION . '</strong> of PHP on the <strong>' . PHP_OS . '</strong>'
        . ' operating system.</p>';

    ?>
</body>    
</html> 
