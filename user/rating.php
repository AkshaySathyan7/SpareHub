<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $quantity = $_POST['quantity'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $email = $_SESSION['email'];
    $id=$_POST['id'];
    //$status='Pending';

    // Display the submitted data
    echo "<h3>Complaint Details</h3>";
    echo "<p><strong>Item:</strong> $item</p>";
    echo "<p><strong>Price:</strong> $price</p>";
    echo "<p><strong>Quantity:</strong> $quantity</p>";
    echo "<p><strong>Description:</strong> $rating</p>";
    echo "<p><strong>Username:</strong> $email</p>";
    echo "<p><strong>Username:</strong> $id</p>";


   

    // You can process or save the data as needed (e.g., save to a database, send an email, etc.)
}
?>
