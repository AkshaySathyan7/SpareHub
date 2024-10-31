<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Complaint Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        background-color: lightblue;
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        background-color: #3498db;
        color: #fff;
        width: 250px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        transition: background-color 0.3s ease;
    }

    .sidebar h2 {
        margin-bottom: 30px;
        font-size: 24px;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        margin: 15px 0;
        font-size: 18px;
        position: relative;
        transition: color 0.3s ease;
    }

    .sidebar a:hover {
        color: #f1c40f;
    }

    .sidebar a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background: #f1c40f;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .sidebar a:hover::after {
        transform: scaleX(1);
    }

    .container {
        flex-grow: 1;
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .container:hover {
        transform: scale(1.02);
    }

    header {
        text-align: center;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 28px;
        color: #5f665f;
        margin-bottom: 10px;
    }

    p {
        color: #666;
        font-size: 14px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #4CAF50;
        outline: none;
    }

    button {
        padding: 12px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
        width: 30%;
        align-self: center;
    }

    button:hover {
        background-color: darkblue;
        transform: translateY(-2px);
    }

    button:active {
        transform: translateY(0);
    }
</style>
<body>
    <div class="sidebar">
        <h2>Spare Hub <i class="fa-regular fa-user"></i></h2>
        <a href="userdash.php"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php"><i class="fas fa-list"></i> Profile</a>
        <a href="complaint.php"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.html"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.html"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <div class="container">
        <header>
            <h1>User Complaint</h1>
            <p>Please fill out the form below to submit your complaint.</p>
        </header>
        <main>
            <form id="complaint-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Please enter your name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Please enter your valid email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Product Name:</label>
                    <input type="text" id="subject" placeholder="Enter product name" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Complaint Message:</label>
                    <textarea id="message" name="message" placeholder="Enter your complaints here" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </main>
    </div>
</body>
</html>
