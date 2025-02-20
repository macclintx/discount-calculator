<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Discount Calculator</title>
    <style>
        /* General styles for the body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        /* Form container */
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Labels */
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        /* Input fields */
        input[type="number"], input[type="date"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Radio buttons */
        .radio-group {
            text-align: left;
            margin-bottom: 10px;
        }

        /* Submit button */
        input[type="submit"] {
            background: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .form-container {
                width: 90%;
            }
        }

        @media (min-width: 601px) and (max-width: 1024px) {
            .form-container {
                max-width: 500px;
            }
        }

        @media (min-width: 1025px) {
            .form-container {
                max-width: 600px;
            }
        }
    </style>
</head>
<body>

    <h2 style="color: #333;">Dynamic Discount Calculator</h2>

    <form action="index.php" method="post" class="form-container">
        
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" placeholder="Enter price" required>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" placeholder="Enter quantity" required>

        <label>Membership:</label>
        <div class="radio-group">
            <input type="radio" id="regular" name="membership" value="regular">
            <label for="regular">Regular</label><br>
            
            <input type="radio" id="vip" name="membership" value="vip">
            <label for="vip">VIP</label>
        </div>

        <!-- New Date Input -->
        <label for="purchase_date">Purchase Date:</label>
        <input type="date" name="purchase_date" id="purchase_date" required>

        <input type="submit" value="Calculate Discount">
    </form>

</body>
</html>
