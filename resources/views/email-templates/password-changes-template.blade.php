<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Password Changed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
            color: #333;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #999;
        }

        .info-box {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 6px;
            margin: 20px 0;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                width: 90% !important;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h2>Password Changed Successfully</h2>
        </div>
        <div class="content">
            <p>Hi <strong>{{ $user->name }}</strong>,</p>
            <p>Your account password has been successfully updated.</p>
            <div class="info-box">
                <p><strong>Username/Email:</strong> {{ $user->email }} or {{$user->username}}</p>
                <p><strong>New Password:</strong> {{ $new_password }}</p>
            </div>
            <p>If you did not make this change, please contact our support team immediately.</p>
            <p>Thanks,<br>The Support Team</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Larablog. All rights reserved.
        </div>
    </div>
</body>

</html>
