<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .question {
            margin-bottom: 20px;
        }
        .question p {
            font-weight: bold;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Survey</h1>
    <form action="#" method="POST">
        <div class="question">
            <p>Question 1: What is your favorite color?</p>
            <input type="radio" id="color1" name="color" value="red">
            <label for="color1">Red</label><br>
            <input type="radio" id="color2" name="color" value="blue">
            <label for="color2">Blue</label><br>
            <input type="radio" id="color3" name="color" value="green">
            <label for="color3">Green</label><br>
            <input type="radio" id="color4" name="color" value="yellow">
            <label for="color4">Yellow</label><br>
        </div>

        <div class="question">
            <p>Question 1: What is your favorite color?</p>
            <input type="radio" id="color1" name="color" value="red">
            <label for="color1">Red</label><br>
            <input type="radio" id="color2" name="color" value="blue">
            <label for="color2">Blue</label><br>
            <input type="radio" id="color3" name="color" value="green">
            <label for="color3">Green</label><br>
            <input type="radio" id="color4" name="color" value="yellow">
            <label for="color4">Yellow</label><br>
        </div>
        
        <div class="conclusion">
            <h3>Special Offer</h3>
            <p>As a token of appreciation for your valuable feedback, we'd like to offer you a 30% discount on our annual plan. Simply use the coupon code WS30March at checkout to redeem your discount.</p>
            <p>Thank you for participating in our survey! Your feedback helps us tailor our product to better meet your needs.</p>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
