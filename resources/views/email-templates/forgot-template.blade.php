<!DOCTYPE html>
<html lang="en" style="margin: 0; padding: 0;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Reset</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4">
        <tr>
            <td align="center" style="padding: 40px 10px;">
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden;">
                    <tr>
                        <td style="background-color: #2b2d42; padding: 20px; color: white; text-align: center;">
                            <h1 style="margin: 0; font-size: 24px;">Reset Your Password</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">
                            <p style="font-size: 16px; color: #333333;">Hi {{ $user->name }},</p>
                            <p style="font-size: 16px; color: #333333;">You recently requested to reset your password. Click the button below to set a new one.</p>
                            <p style="text-align: center; margin: 30px 0;">
                                <a href="{{ $actionlink }}" style="background-color: #007bff; color: white; padding: 12px 24px; border-radius: 5px; text-decoration: none; display: inline-block;">Reset Password</a>
                            </p>
                            <p style="font-size: 14px; color: #777777;">If you did not request a password reset, you can safely ignore this email.</p>
                            <p style="font-size: 14px; color: #777777;">This link will expire in 15 minutes.</p>
                            <p style="font-size: 14px; color: #777777;">Thanks,<br>The Larablog Team</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f4f4f4; padding: 20px; text-align: center; font-size: 12px; color: #999;">
                            © {{ date('Y') }} Larablog. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
