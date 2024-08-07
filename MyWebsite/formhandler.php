<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = htmlspecialchars($_POST["number"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    echo "<h2>Submitted Data:</h2>";
    echo "Number: " . $number . "<br>";   
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Favourite Pet: " . $favouritepet . "<br>";

   header("Location: index.php");
} else{
     header("Location:  index.php");
}
?>
