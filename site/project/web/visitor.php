<!DOCTYPE html> 
<html> 
<head> 
    <title>Visitor Count</title> 
</head> 
<body> 
    <h1>Welcome to My Website</h1> 
 
    <?php 
    // Function to increment and retrieve the visitor count 
    function getVisitorCount() { 
        $counter_file = "visitor_count.txt"; // Path to the visitor count file 
        $count = 1; // Default count if the file doesn't exist 
 
        if (file_exists($counter_file)) { 
            $count = file_get_contents($counter_file); 
            $count++; 
        } 
 
        file_put_contents($counter_file, $count); // Update the count in the file 
 
        return $count; 
    } 
 
    // Get the visitor count 
    $visitor_count = getVisitorCount(); 
 
    // Display the visitor count 
    echo "<h2>Visitor Count: $visitor_count</h2>"; 
    ?> 
 
    <p>This is a sample web page.</p> 
</body> 
</html>