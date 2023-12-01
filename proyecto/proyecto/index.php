<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Colombia</title>
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

        nav {
            display: flex;
            justify-content: space-around;
            background-color: #ddd;
            padding: 10px;
        }

        nav a {
            text-decoration: none;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            color: #333;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
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

    <nav>
        <a href="#peliculas">Películas</a>
        <a href="#ventas">Ventas</a>
        <a href="#directores">Directores</a>
        <a href="#actores">Actores</a>
        <a href="#salas">Salas</a>
        <a href="#funciones">Funciones</a>
        <a href="#cartelera">Cartelera</a>
    </nav>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cine Colombia</p>
    </footer>

</body>
</html>
