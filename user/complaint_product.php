<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $quantity = $_POST['quantity'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $comment = $_POST['comment'];
    $email = $_SESSION['email'];
    $id=$_POST['id'];
    $status='Pending';

    // Display the submitted data
   // echo "<h3>Complaint Details</h3>";
   // echo "<p><strong>Item:</strong> $item</p>";
   // echo "<p><strong>Price:</strong> $price</p>";
   // echo "<p><strong>Quantity:</strong> $quantity</p>";
  //  echo "<p><strong>Description:</strong> $comment</p>";
   // echo "<p><strong>Username:</strong> $email</p>";
   // echo "<p><strong>Username:</strong> $id</p>";


     $con = mysqli_connect("localhost", "root", "", "sparehub");
    $query = "INSERT INTO orders(pro_id,item,shop,username,complaint,status) VALUES ('$id', '$item', '$shop', '$email','$comment','$status')";
    if (mysqli_query($con, $query)){
        echo "<script>
        alert('Complaint added Successfully!');
        window.location.href = 'userdash.php'; // Redirect to login page
    </script>";} else {
        header('Location :registration.html?er=' .mysqli_error($con).'');
        echo "Error inserting into reg_user table: " . mysqli_error($con) . "<br>";
    }

    // You can process or save the data as needed (e.g., save to a database, send an email, etc.)
}
?>
