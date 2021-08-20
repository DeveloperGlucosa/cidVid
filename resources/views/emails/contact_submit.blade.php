<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo mensaje recibido</title>
</head>
<body>
    <h1>Nuevo mensaje recibido</h1>
    <p><b>Nombre:</b> {{ $data['nombre'] }}</p>
    <p><b>Email:</b> {{ $data['email'] }}</p>
    <p><b>Teléfono:</b> {{ $data['telefono'] }}</p>
    <p><b>Empresa:</b> {{ $data['empresa'] }}</p>
    <p><b>Mensaje:</b> {{ $data['mensaje'] }}</p>
    
</body>
</html>