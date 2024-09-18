<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(45deg, #FB5252, #57D288);
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-bottom: 4px solid #FB5252;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-family: 'Urbanist', serif;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 15px;
            line-height: 1.6;
            font-size: 16px;
        }

        .content ul {
            list-style-type: none;
            padding: 0;
        }

        .content ul li {
            background-color: #ffffff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid rgba(109, 108, 121, 0.2);
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .content ul li:hover {
            background-color: #F4F5F9;
        }

        .footer {
            background-color: #221F3F;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-top: 4px solid #57D288;
        }

        .footer p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Services and Plans</h1>
        </div>
        <div class="content">
            <p>Hello Mindworks Media,</p>
            <p>You have received a new contact request with the following details:</p>
            <ul>
                <li><strong>Name:</strong> {{ $fullname }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Phone:</strong> {{ $phone }}</li>
                <li><strong>Services:</strong> {{ $service }}</li>
                <li><strong>Services Plan:</strong> {{ $type }}</li>
                <li><strong>Services Price:</strong> {{ $plan }}</li>
            </ul>
            <p>Please respond to this request at your earliest convenience.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Mind Works. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
