<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {

    $filename = htmlspecialchars($_POST["name"]) . '.txt'; 

    echo "Welcome, the file name that you are looking for is: " . htmlspecialchars($_POST["name"]) . "<br>";

    if (file_exists($filename)) {
        echo "File exists. Reading the file ^-^..." . "<br>";
        
        
        $content = file_get_contents($filename);
        echo "File Content:". "<br>";
        echo nl2br($content) . "<br>";  

        $lines = file($filename);
        echo "File Content as an Array:"."<br>";
        print_r($lines);
    } else {
        echo "File does not exist. Creating the file..."."<br>";


        $content = "Hello!, we are Group 1, and this is our 3rd Activity.\n";  

    
        file_put_contents($filename, $content);
        echo "File created and content written successfully.<br>";

        echo nl2br($content) . "<br>";
    }
} else {
    echo "Please enter a file name.";
}
?>

<form method="POST" action="">
    <label for="name">Enter File Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</form>

</body>
</html>