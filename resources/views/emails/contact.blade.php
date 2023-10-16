<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Email</title>
    </head>

    <body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

        <div
            style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px; box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.1); padding: 20px;">
            <h1 style="font-size: 24px; color: #333;">Contact from {{ $name }}</h1>

            <p style="font-size: 16px; color: #555;">Message:</p>
            <p style="font-size: 18px; color: #333;">{{ $body }}</p>

            <p style="font-size: 16px; color: #555;">Email:</p>
            <p style="font-size: 18px; color: #333;">{{ $email }}</p>
        </div>
    </body>

</html>