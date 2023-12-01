<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Película - Cine Colombia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        header {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
        section {
            margin: 20px 0;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <h1>Cine Colombia</h1>
    </header>

    <section>
        <h2>Detalles de Película</h2>
        
        <?php
            // Verificar si se proporciona un parámetro de película en la URL
            if(isset($_GET['pelicula_id'])) {
                // Obtener el ID de la película desde la URL
                $pelicula_id = $_GET['pelicula_id'];

                // Aquí podrías recuperar detalles de la película desde una base de datos
                // o cualquier otra fuente de datos y mostrar la información.
                // Por ejemplo:
                $titulo_pelicula = "Título de la Película";
                $descripcion_pelicula = "Descripción de la película...";
                
                // Mostrar detalles de la película
                echo "<h3>$titulo_pelicula</h3>";
                echo "<p>$descripcion_pelicula</p>";
            } else {
                // Si no se proporciona un ID de película, mostrar un mensaje de error o redirigir a la página principal.
                echo "<p>Lo sentimos, no se ha proporcionado un ID de película válido.</p>";
            }
        ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cine Colombia</p>
    </footer>

</body>
</html>
