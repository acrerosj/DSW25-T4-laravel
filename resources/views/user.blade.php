<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista de un usuario</h1>
    @if ($name)
        <h2>Nombre: {{ $name }}</h2>
    @else
        <h2>Usuario no encontrado</h2>
    @endif
</body>
</html>