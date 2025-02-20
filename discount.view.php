<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .result-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .final-price {
            font-size: 24px;
            font-weight: bold;
            color: #007BFF;
        }

        @media (max-width: 600px) {
            .result-container {
                width: 90%;
            }
        }

        @media (min-width: 601px) and (max-width: 1024px) {
            .result-container {
                max-width: 500px;
            }
        }

        @media (min-width: 1025px) {
            .result-container {
                max-width: 600px;
            }
        }
    </style>
</head>
<body>
    
    <div class="result-container">
        <h2>Final Price:</h2>
        <p class="final-price">
            $<?=(int)$final_price;?>
        </p>
    </div>

</body>
</html>
