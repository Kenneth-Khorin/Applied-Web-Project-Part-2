<?php
require_once("settings.php");

echo "<h1>Testing Database Connection</h1>";

if ($conn) {
    echo "<p style='color: green;'> Database connection successful!</p>";
    
    // Test query
    $sql = "SELECT COUNT(*) as total FROM eoi";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "<p style='color: green;'> Found " . $row['total'] . " EOI records in database</p>";
        echo "<p>Ready to start building manage.php!</p>";
    }
    
    mysqli_close($conn);
} else {
    echo "<p style='color: red;'> Database connection failed!</p>";
}
?>