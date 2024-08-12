<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 15px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 10px;
            line-height: 1.6;
        }

        .content ul {
            list-style-type: none;
            padding: 0;
        }

        .content ul li {
            background-color: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
        }

        .footer {
            background-color: #f1f1f1;
            padding: 15px 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Mind Works</h1>
        </div>
        <div class="content">
            <p>Hello Mindworks Media,</p>
            <p>You have received a new contact request with the following details:</p>
            <ul>
                <li><strong>Name:</strong> {{ $fullname }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Phone:</Strong> {{ $phone }}</li>
            </ul>
            <p><strong>Message:</strong> {!! $contact_message !!}</p>

            <p>Please respond to this request at your earliest convenience.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Minds Works. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
