<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Contacting Us</title>
</head>
<body>
<div class="container" style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f0f0f0;">
    <div class="image-div" style="border-radius: 30px;">
        <img src="https://www.bookkraaft.com/logo.svg" style="width: 65%; margin: 20px auto; display: block;" alt="">
    </div>
    <div class="card"
         style="background: white; color: black; border: 1px solid black; border-radius: 20px; padding: 25px;">
        <h1 style="font-size: 24px; margin-bottom: 20px;">Dear {{$name}}</h1>
        <p></p>
        <p>Thank you for getting in touch! We appreciate you contacting us. One of our team will get back to you
            shortly.</p>
        <p><strong>Have a great day!</strong></p>
        <p>Regards</p>
    </div>
</div>
<div style="height: 150px; width: 100%; background: white; text-align: center;">
    <p>&copy; {{ date('Y') }} <a href="https://www.bookkraaft.com">https://www.bookkraaft.com</a></p>
</div>
</body>
</html>
