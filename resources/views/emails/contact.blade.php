<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .section {
            margin: 15px 0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Form Submission</h1>

        <div class="section">
            <strong>Name:</strong>
            <p>{{ $name }}</p>
        </div>

        <div class="section">
            <strong>Email:</strong>
            <p>{{ $email }}</p>
        </div>

        <div class="section">
            <strong>Message:</strong>
            <p>{{ $body }}</p>
        </div>

        <div class="footer">
            <p>This email was sent from your contact form.</p>
        </div>
    </div>
</body>
</html>
