<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Merca Y Gana</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        /* Encabezado */
        h1 {
            color: #4285f4;
        }

        /* Contenido principal */
        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Lista de credenciales */
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        /* Agradecimiento */
        .thanks {
            margin-top: 20px;
            font-weight: bold;
            color: #4285f4;
        }
    </style>
</head>

<body>
    <h1>Bienvenido a Merca Y Gana</h1>
    <div class="content">
        <p>Agradecemos tu registro en Merca Y Gana. A continuación, te proporcionamos tus credenciales de acceso:</p>
        <ul>
            <li><strong>Usuario:</strong> {{ $credentials['email'] }}</li>
            <li><strong>Contraseña:</strong> {{ $credentials['password'] }}</li>
            <li><strong>Código de cliente:</strong> {{ $clientCode }}</li>
        </ul>
        <p class="thanks">¡Gracias por unirte a nosotros!</p>
    </div>
</body>

</html>
