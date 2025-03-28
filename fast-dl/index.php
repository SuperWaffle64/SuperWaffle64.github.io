<?php
$directory = 'fast-dl/tf2/maps'; // Change this to the folder you want to list

// Ensure the directory exists
if (is_dir($directory)) {
    $files = array_diff(scandir($directory), array('..', '.'));
    echo "<h2>Files in $directory</h2><ul>";
    
    foreach ($files as $file) {
        echo "<li><a href='$directory/$file'>$file</a></li>";
    }
    
    echo "</ul>";
} else {
    echo "<p>Directory does not exist.</p>";
}
?>
