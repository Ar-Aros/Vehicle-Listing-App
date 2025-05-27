<?php
$viewsDir = __DIR__ . '/views';

if (!is_dir($viewsDir)) {
    die("The 'views' folder does not exist inside 'public'. Please create it or check the folder name.");
}

$files = scandir($viewsDir);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Pages</title>
    
</head>
<body>
    <h1>Vehicle Management Pages</h1>
    <ul>
        <?php
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $displayName = ucwords(str_replace(['_', '.php'], [' ', ''], $file));
                echo "<li><a href=\"views/$file\">$displayName</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
