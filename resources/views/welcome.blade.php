<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando correos</title>
</head>
<body>
    <form action="{{route('enviar-correo')}}" method="POST">
        @csrf
        <button type="submit">
            Enviar correo
        </button>
    </form>
</body>
</html>