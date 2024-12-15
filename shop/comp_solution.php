<?php
// Check if 'id' and 'complaint' are set in the URL
if (isset($_GET['id']) && isset($_GET['complaint'])) {
    // Get the 'id' and 'complaint' from the URL
    $id = $_GET['id'];
    $complaint = urldecode($_GET['complaint']); // Decode the complaint text

    // Display the ID and Complaint Text
    echo "<h2>Complaint Details</h2>";
    echo "<p><strong>Complaint ID:</strong> " . htmlspecialchars($id) . "</p>";
    echo "<p><strong>Complaint:</strong> " . htmlspecialchars($complaint) . "</p>";
} else {
    echo "<p>No complaint details found!</p>";
}
?>
