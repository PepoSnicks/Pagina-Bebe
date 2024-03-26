<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos para Padres</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url('https://img.freepik.com/vector-gratis/fondo-abstracto-negro-azul_1340-17012.jpg?w=826&t=st=1711478154~exp=1711478754~hmac=15f7a1c25917f2c6b063d818b2916d7d1b7eef235bf19ee63925e1627bae30b8'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
    backdrop-filter: blur(10px); 
    margin: 0;
    padding: 0;
    color: #fff; /* Cambiar el color de texto a blanco */
}

h1 {
    color: #fff;
    text-align: center;
    margin-top: 50px;
}

.container {
    max-width: 600px; /* Ancho máximo ajustado a 600px */
    margin: 77.5px auto; /* Margen superior de 50px, centrado horizontalmente */
    text-align: center;
}

.btn {
    display: inline-block; /* Mostrar en línea para que se ajuste al contenido */
    padding: 15px 30px; /* Mantener el mismo tamaño de relleno */
    margin: 20px; /* Margen de 20px en todos los lados */
    font-size: 18px; /* Mantener el mismo tamaño de fuente */
    background-color: #4CAF50; /* Color de fondo verde */
    color: white; /* Texto blanco */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #45a049; /* Color verde más oscuro al pasar el ratón */
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
    position: relative; /* Cambiar a relative */
    width: 100%;
    z-index: 1000; /* Ajustar el z-index si es necesario */
    clear: both; /* Limpiar los elementos flotantes */
}

    </style>
</head>
<body>
    <h1>Bienvenido a Recursos para Padres</h1>
    
    <div class="container">
        <form action="cuidado.php" method="post">
            <button class="btn" type="submit">Consejos sobre cuidado infantil</button>
        </form>

        <form action="recetas.php" method="post">
            <button class="btn" type="submit">Recetas de comidas para bebés</button>
        </form>

        <form action="juegos.php" method="post">
            <button class="btn" type="submit">Ideas de juegos y actividades</button>
        </form>

        <form action="preguntas.php" method="post">
            <button class="btn" type="submit">Preguntas frecuentes</button>
        </form>
    </div>

    <footer>Esta página esta echa con mucho cariño y dedicación</footer>

</body>
</html>
