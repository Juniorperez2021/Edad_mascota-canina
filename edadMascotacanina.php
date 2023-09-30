<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad Canina</title>
</head>
<body>
    <h1>Introduce la edad de tu mascota</h1>
    
    <form method="post">
        <label for="edadMascota">Edad en años humanos:</label>
        <input type="number" id="edadMascota" name="edadMascota" required>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    class MascotaCanina {
        public function calcularEdadCanina($edadHumana) {
            $edadCanina = $edadHumana * 7;
            return "Su mascota tiene $edadCanina años en edad canina.";
        }
    }

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la edad ingresada por el usuario
        $edadHumana = $_POST["edadMascota"];
        
        // Crear una instancia de la clase MascotaCanina
        $mascota = new MascotaCanina();
        
        // Calcular y mostrar el resultado
        $resultado = $mascota->calcularEdadCanina($edadHumana);
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>
