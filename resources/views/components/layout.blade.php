<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style type="text/css">
            .calculator {
                width: 300px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-color: #f9f9f9;
            }

            .calculator h2 {
                margin-top: 0;
                font-size: 24px;
                text-align: center;
                color: #333;
            }

            .calculator form {
                margin-top: 20px;
            }

            .calculator form input[type="text"],
            .calculator form select {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
                font-size: 16px;
                box-sizing: border-box;
            }

            .calculator form button {
                width: 100%;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 3px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .calculator form button:hover {
                background-color: #0056b3;
            }

            .calculator .result {
                margin-top: 20px;
                font-size: 18px;
                text-align: center;
                color: #333;
            }
            .calculator .errors {
                padding: 5px;
                background: #ff4949;
                border-radius: 10px;
                color: #fff;
                font-weight: 700;
            }

    </style>
</head>
<body>
    <div class="calculator">
        <h1>Simple Calculator</h1>
            {{ $slot }}
    </div>
    @stack('scripts')
</body>
</html>
