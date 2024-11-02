v<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">
    <title>Change Password Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6D83F2, #9A79F9);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .change-password-box {
            background-color: white;
            padding: 30px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            text-align: center;
        }

        h2 {
            font-size: 26px;
            color: #333;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #666;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6D83F2;
            box-shadow: 0 0 8px rgba(109, 131, 242, 0.4);
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-actions button {
            width: 48%;
            padding: 12px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .form-actions button[type="submit"] {
            background-color: #6D83F2;
        }

        .form-actions button[type="submit"]:hover {
            background-color: #5b6be0;
            transform: translateY(-2px);
        }

        .form-actions button[type="reset"] {
            background-color: #ff6b6b;
        }

        .form-actions button[type="reset"]:hover {
            background-color: #e05a5a;
            transform: translateY(-2px);
        }

        .form-group input::placeholder {
            color: #999;
        }

        /* Add subtle animations */
        .change-password-box {
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="change-password-box">
            <h2>Change Password</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" id="current-password" name="current-password" placeholder="Enter current password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">New Password</label>
                    <input type="password" id="new-password" name="new-password" placeholder="Enter new password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Re-enter new password" required>
                </div>
                <div class="form-actions">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>