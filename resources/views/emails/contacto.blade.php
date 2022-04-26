<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Web Devarana</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish&family=Playfair+Display&display=swap');
</style>
<body style="background-color: #f9f9f7;padding: 10px">
    <div style="max-width:800px; width: 100%; margin:auto">
        <h1 style="font-weight: normal; color:#d64767;font-family:'Playfair Display', serif;text-align: center;font-size: 30px;margin: 15px 0px;">Contacto Devarana.mx</h1>
        <p style="color:#656a76;font-family: 'Mulish', sans-serif;font-size: 18px;margin:0;">Nombre: {{ $data['name'] }}</p>
        <p style="color:#656a76;font-family: 'Mulish', sans-serif;font-size: 18px;margin:0;">Email: <a style="color:#656a76;" href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
        <p style="color:#656a76;font-family: 'Mulish', sans-serif;font-size: 18px;margin:0;">Teléfono: <a style="color:#656a76;" href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></p>
        <p style="color:#656a76;font-family: 'Mulish', sans-serif;font-size: 18px;margin:0;">Mensaje: {{ $data['message'] }}</p>
    </div>
</body>
</html>