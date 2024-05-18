<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Credenciales de acceso</title>
</head>
<body>
    <h1>Hola,</h1>
    <p>Has sido registrado en {{ config('app.name') }}. Aquí están tus credenciales de acceso:</p>

    <ul>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Contraseña:</strong> {{ $password }}</li>
   
           @if ($roles != 'admin' &&  $roles == 'tienda')
           <li><strong>Código del punto de recarga:</strong> {{ $unique_code }}</li>
           
           @else
           <li><strong>Código de Cliente:</strong> {{ $unique_code }}</li>
           @endif
      
       
    </ul>

    <p>¡Gracias por unirte a nosotros!</p>
    <p>Saludos, {{ config('app.name') }}</p>
</body>
</html>
