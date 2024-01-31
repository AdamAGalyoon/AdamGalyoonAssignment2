<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .output, .error {
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        max-width: 400px;
    }

</style>
<body>

<?php
function cleanInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Check if all of the required parameters are provided
if (isset($_GET['firstname'], $_GET['lastname'], $_GET['age'])) {
    $firstname = cleanInput($_GET['firstname']);
    $lastname = cleanInput($_GET['lastname']);
    $age = cleanInput($_GET['age']);

    echo "<div class='output'>";
    echo "Hello, my name is $firstname $lastname.<br>";


    // Check age and decide whether user is old enough to vote in the united states
    if ($age >= 18) {
        echo "I am $age years old and I am old enough to vote in the United States.<br>";
    } else {
        echo "I am $age years old and I am not old enough to vote in the United States.<br>";
    }

    // Calculate days based on age
    $days = $age * 365; 
    echo "I have lived approximately $days days.<br>";

    echo "</div>";

} else {
    // error message if required parameters are not provided
    echo "<div class='error'>Error: Please provide firstname, lastname, and age parameters.</div>";
}

// current date
echo "<div class='output'>Current Date: " . date("Y-m-d") . "</div>";
?>

</body>
</html>
