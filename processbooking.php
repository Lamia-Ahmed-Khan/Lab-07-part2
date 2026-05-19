<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"] ?? "";
    $lastname  = $_POST["lastname"] ?? "";
    $age       = $_POST["age"] ?? "";
    $species   = $_POST["species"] ?? "";
    $food      = $_POST["food"] ?? "";
    $partysize = $_POST["partysize"] ?? "";

    $booking = [];

    if (isset($_POST["accom"])) {
        $booking[] = "Accommodation";
    }
    if (isset($_POST["4day"])) {
        $booking[] = "4 Day Tour";
    }
    if (isset($_POST["10day"])) {
        $booking[] = "10 Day Tour";
    }

    $bookingText = implode(" and ", $booking);

    echo "<p>Welcome " . $firstname . " " . $lastname . " !</p>";

    echo "<p>You are now booked on the " . $bookingText . "</p>";

    echo "<p>Species: " . $species . "</p>";
    echo "<p>Age: " . $age . "</p>";
    echo "<p>Meal Preference: " . $food . "</p>";
    echo "<p>Number of travellers: " . $partysize . " in regular</p>";
}

?>

</body>
</html>