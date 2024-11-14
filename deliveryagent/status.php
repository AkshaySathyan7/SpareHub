<?php
session_start();
$ac=$_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data from the POST request
    $order_id = isset($_POST['order_id']) ? $_POST['order_id'] : 'N/A';
    $shop_name = isset($_POST['shop_name']) ? $_POST['shop_name'] : 'N/A';
    $customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : 'N/A';
    $customer_address = isset($_POST['customer_address']) ? $_POST['customer_address'] : 'N/A';
    $delivery_status = isset($_POST['delivery_status']) ? $_POST['delivery_status'] : 'N/A';

    // Display the submitted form data
   // echo "<h2>Form Data Submitted:</h2>";
   // echo "<p><strong>Order ID:</strong> " . htmlspecialchars($order_id) . "</p>";
  //  echo "<p><strong>Shop Name and Address:</strong> " . htmlspecialchars($shop_name) . "</p>";
   // echo "<p><strong>Customer Name:</strong> " . htmlspecialchars($customer_name) . "</p>";
   // echo "<p><strong>Customer Address:</strong> " . htmlspecialchars($customer_address) . "</p>";
    //echo "<p><strong>Delivery Status:</strong> " . htmlspecialchars($delivery_status) . "</p>";

    $query1 = "UPDATE cart SET agent='$ac' WHERE id='$order_id'";
    //echo $query1;

    // Execute the query
    if (mysqli_query($con, $query1)) {
        // If the query is successful, redirect to status.php
        echo "<script>
            alert('Updated Successfully!'); 
            window.location.href = 'agentdash.php';  // Redirect to status.php after the alert
          </script>"; // Stop further execution after the redirect
    } else {
        // If there is an error, display it
        die("Couldn't update record: " . mysqli_error($con));
    }
    $query = "UPDATE cart SET status='$delivery_status' WHERE id='$order_id'";
    if (mysqli_query($con, $query)) {
        // If the query is successful, redirect to status.php
       
    } else {
        // If there is an error, display it
        die("Couldn't update record: " . mysqli_error($con));
    }

}
?>
