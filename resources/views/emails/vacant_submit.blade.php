<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de Empleo Recibida</title>
</head>
<body>
    <h1>Solicitud de Empleo Recibida</h1>
    <p><b>Nombre:</b> {{ $data['nombre'] }}</p>
    <p><b>Email:</b> {{ $data['email'] }}</p>
    <p><b>Teléfono:</b> {{ $data['telefono'] }}</p>
    <p><b>Linkedin:</b> <a href="{{ $data['linkedin_url'] }}" target="_blank">{{ $data['linkedin_url'] }}</a></p>
    
</body>
</html>