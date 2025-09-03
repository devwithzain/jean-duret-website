<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to Our Newsletter!</title>
</head>

<body style="background: #f6f8fa; margin: 0; padding: 0; font-family: 'Segoe UI', Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background: #f6f8fa;">
        <tr>
            <td align="center">
                <table width="480" cellpadding="0" cellspacing="0"
                    style="background: #fff; border-radius: 12px; box-shadow: 0 2px 12px #000d511a; margin: 40px 0;">
                    <tr>
                        <td style="padding: 32px 32px 16px 32px; text-align: center;">
                            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Newsletter"
                                width="64" style="margin-bottom: 16px;">
                            <h2 style="color: #000D51; font-size: 2rem; margin: 0 0 12px 0; font-weight: 700;">Welcome
                                to the Newsletter!</h2>
                            <p style="color: #333; font-size: 1.1rem; margin: 0 0 18px 0;">Thanks for subscribing! You
                                are now part of our community. Stay tuned for updates, tips, and exclusive content 🚀
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0 32px 32px 32px; text-align: center;">
                            <a href="{{ env('APP_URL') }}"
                                style="display: inline-block; background: #000D51; color: #fff; text-decoration: none; padding: 12px 32px; border-radius: 6px; font-weight: 600; font-size: 1rem;">Visit
                                Our Website</a>
                        </td>
                    </tr>
                </table>
                <p style="color: #888; font-size: 0.95rem; margin-top: 8px;">&copy; {{ date('Y') }} Jean Duret. All
                    rights reserved.</p>
            </td>
        </tr>
    </table>
</body>

</html>
