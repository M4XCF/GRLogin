<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="iniciarsesion.php" method="POST">
        <label for="Usuario">Usuario:</label>
        <input type="text" id="Usuario" name="Usuario" required><br><br>
        
        <label for="Clave">Clave:</label>
        <input type="password" id="Clave" name="Clave" required><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
