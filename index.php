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



        // Create shorthand verions of the variable names 
        $file = $_SERVER['SCRIPT_FILENAME'];
        $user = $_SERVER['HTTP_USER_AGENT'];
        $server = $_SERVER['SERVER_SOFTWARE'];

        // Print the name of this script: 
        echo "<p>You are running the file: <br /> <strong> $file </strong>. </p> </n>";
        
        // Print the users information: 
        echo "<p>You are viewing this page using: <br /> <strong> $user </strong>. </p> </n>";

        // Print servers information: 
        echo "<p>This server is running: <br /> <strong> $server </strong>. </p> </n>";
    ?>
</body>    
</html> 