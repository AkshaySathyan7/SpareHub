<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (isset($_GET['item'])) {
    $item = $_GET['item'];

    // Fetch details of the selected item
    $query = "SELECT * FROM cart WHERE item='$item'";
    $result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
    
    if ($row = mysqli_fetch_array($result)) {
        // Prepare the item details as an associative array
        $itemDetails = array(
            'item'=> $row['item'],
            'price' => $row['price'],
            'quantity' => $row['shop'],
            'description' => $row['status'],
            'id' => $row['id']

        );
        ?>
        <form method="POST" action="complaint_product.php">
            <?php
        echo "<p><strong>Item:</strong> " . $itemDetails['item'] . "</p>";
        echo "<p><strong>Price:</strong> " . $itemDetails['price'] . "</p>";
        echo "<p><strong>Shop:</strong> " . $itemDetails['quantity'] . "</p>";
        echo "<p><strong>Status:</strong> " . $itemDetails['description'] . "</p>";
        echo "<p><strong>ID:</strong> " . $itemDetails['id'] . "</p>";
        ?>
                    <input type="hidden" id="itemDescription" name="quantity" value="<?php echo  $itemDetails['quantity']; ?>">
                    <input type="hidden" id="itemDescription" name="item" value="<?php echo  $itemDetails['item']; ?>">
                    <input type="hidden" id="itemDescription" name="price" value="<?php echo  $itemDetails['price']; ?>">
                    <input type="hidden" id="itemDescription" name="id" value="<?php echo  $itemDetails['id']; ?>">

                    <textarea id="comments" name="comment" rows="4" cols="50" placeholder="Type your complaint here..."></textarea><br>

        <button type="submit">Submit</button>
        
<?php

        
        // Return the details as a JSON response
        //echo json_encode($itemDetails);
    } else {
        echo json_encode(array('error' => 'No details available for the selected item.'));
    }
}
?>
