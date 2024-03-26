<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos y Actividades para Bebés</title>
    <link rel="stylesheet" href="estilo.php">
</head>
<body>
    <div class="container">
        <h1>Juegos y Actividades para Bebés</h1>
        <?php
        // Array con juegos y actividades
        $juegos_actividades = array(
            array(
                'titulo' => 'Juegos sensoriales',
                'descripcion' => 'Exploración táctil: Proporciona diferentes texturas para que tu bebé las toque y explore, como peluches suaves, telas ásperas o juguetes con diferentes texturas.<br><br>
                Caja de sorpresas: Coloca objetos seguros dentro de una caja y deja que tu bebé los saque y explore.'
            ),
            array(
                'titulo' => 'Juegos de movimiento:',
                'descripcion' => 'Baile suave: Sostén a tu bebé en tus brazos y muévete al ritmo de la música suavemente.<br><br>
                Juegos en el suelo: Coloca juguetes atractivos cerca de tu bebé para alentar el gateo o rodar.'
            ),
            array(
                'titulo' => 'Juegos de estimulación visual',
                'descripcion' => 'Móviles de colores: Cuelga un móvil colorido sobre la cuna o el cambiador para que tu bebé pueda mirarlo.<br><br>
                Libros de tela: Lee libros de tela con imágenes grandes y brillantes para estimular el interés de tu bebé por los libros desde una edad temprana.'
            ),
            array(
                'titulo' => 'Actividades al Aire Libre',
                'descripcion' => 'Paseos en cochecito: Sal a dar paseos cortos con tu bebé para que disfruten del aire fresco y los nuevos entornos.<br><br>
                Tiempo en el parque: Lleva a tu bebé al parque y colócalo en una manta para que pueda mirar a su alrededor y explorar el entorno.'
            )
        );

        // Mostrar los juegos y actividades
        echo '<ul>';
        foreach ($juegos_actividades as $juego_actividad) {
            echo '<li>';
            echo '<h2>' . $juego_actividad['titulo'] . '</h2>';
            echo '<p>' . $juego_actividad['descripcion'] . '</p>';
            echo '</li>';
        }
        echo '</ul>';
        ?>

        <form action="index.php" method="post">
            <button class="btn" type="submit">Inicio</button>
        </form>
    </div>
</body>
</html>
