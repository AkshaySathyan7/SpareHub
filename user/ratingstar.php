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

        <!-- Hidden Inputs -->
        <input type="hidden" name="quantity" value="<?php echo  $itemDetails['quantity']; ?>">
        <input type="hidden" name="item" value="<?php echo  $itemDetails['item']; ?>">
        <input type="hidden" name="price" value="<?php echo  $itemDetails['price']; ?>">
        <input type="hidden" name="id" value="<?php echo  $itemDetails['id']; ?>">

        <!-- 5-Star Rating System -->
        <label for="rating">Rate this item:</label><br>
        <div class="stars">
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5" title="5 stars">&#9733;</label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4" title="4 stars">&#9733;</label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3" title="3 stars">&#9733;</label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2" title="2 stars">&#9733;</label>
            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1" title="1 star">&#9733;</label>
        </div>

        <br>
        <button type="submit">Submit</button>
        </form>

        <style>
            .stars {
                direction: rtl;
                font-size: 24px;
            }
            .stars input[type="radio"] {
                display: none;
            }
            .stars label {
                color: #ccc;
                cursor: pointer;
                transition: color 0.2s;
            }
            .stars input[type="radio"]:checked ~ label,
            .stars label:hover,
            .stars label:hover ~ label {
                color: gold;
            }
        </style>

        <script>
            // Optional: Handle the rating with JavaScript
            document.querySelector('.stars').addEventListener('change', function(event) {
                // If the user selects a rating, it can be sent with the form submission
                console.log("Selected rating: " + event.target.value);
            });
        </script>

        <?php
    } else {
        echo json_encode(array('error' => 'No details available for the selected item.'));
    }
}
?>
