
<?php
include 'include/dbcon.php'; 
$departurearea = $_POST['departure_area'];
$destination = $_POST['destination'];
$traveldate = $_POST['travel_date'];
$bustype = $_POST['bus_type'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$luggage = $_POST['luggage'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];




mysqli_query($con,"INSERT INTO book (`departure_area`,`destination`,`travel_date`,`bus_type`,`adults`,`children`,`luggage`,`email`,`phone`,`description`) VALUES ('$departurearea','$destination','$traveldate','$bustype','$adults','$adults','$luggage','$email','$phone','$description')") or die(mysqli_error($con));

echo "<script type='text/javascript'>alert('Successfully Booked!');</script>";
echo "<script>document.location='print.php'</script>";

?>