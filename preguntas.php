<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes sobre Bebés</title>
    <link rel="stylesheet" href="estilo.php">
</head>
<body>
    <div class="container">
        <h1>Preguntas Frecuentes sobre Bebés</h1>

        <?php
        // Array con preguntas y respuestas
        $preguntas_respuestas = array(
            array(
                'pregunta' => '¿Cuánto debe dormir un bebé?',
                'respuesta' => 'Los recién nacidos suelen dormir de 14 a 17 horas al día, pero cada bebé es diferente. A medida que crecen, la cantidad de horas de sueño disminuye.'
            ),
            array(
                'pregunta' => '¿Cuándo debo comenzar a alimentar a mi bebé con alimentos sólidos?',
                'respuesta' => 'La mayoría de los bebés comienzan a comer alimentos sólidos alrededor de los 6 meses de edad, pero es importante consultar con el pediatra para determinar el momento adecuado para tu bebé.'
            ),
            array(
                'pregunta' => '¿Cómo sé si mi bebé está enfermo?',
                'respuesta' => 'Algunos signos de enfermedad en un bebé incluyen fiebre, letargo, falta de apetito y dificultad para respirar. Si tienes dudas, siempre es mejor consultar con un médico.'
            ),
            array(
                'pregunta' => '¿Cuándo debo llevar a mi bebé al pediatra?',
                'respuesta' => 'Es recomendable programar visitas regulares al pediatra para chequeos de rutina y vacunas. Además, debes llevar a tu bebé al médico si presenta síntomas preocupantes o cambios en su comportamiento.'
            ),
            // Añade más preguntas y respuestas aquí
            array(
                'pregunta' => '¿Cuántas veces al día debo amamantar a mi bebé?',
                'respuesta' => 'Los recién nacidos suelen amamantar de 8 a 12 veces al día, pero esto puede variar. Sigue las señales de hambre de tu bebé y amamántalo a demanda.'
            ),
            array(
                'pregunta' => '¿Cómo puedo aliviar el dolor de la dentición en mi bebé?',
                'respuesta' => 'Algunas formas de aliviar el dolor de la dentición incluyen masajear las encías con un dedo limpio, darle a morder juguetes seguros y fríos, o usar gel de dentición recomendado por el pediatra.'
            ),
            array(
                'pregunta' => '¿Cuándo debo comenzar a cepillar los dientes de mi bebé?',
                'respuesta' => 'Debes comenzar a cepillar los dientes de tu bebé tan pronto como aparezca el primer diente, usando un cepillo de dientes suave y sin pasta dental hasta los 2 años de edad.'
            ),
            array(
                'pregunta' => '¿Es seguro que mi bebé duerma boca abajo?',
                'respuesta' => 'No se recomienda que los bebés duerman boca abajo debido al riesgo de síndrome de muerte súbita del lactante (SMSL). La posición más segura para dormir es boca arriba.'
            ),
            array(
                'pregunta' => '¿Cuándo puedo comenzar a introducir agua en la dieta de mi bebé?',
                'respuesta' => 'Puedes comenzar a ofrecer pequeñas cantidades de agua a tu bebé a partir de los 6 meses de edad, especialmente durante las comidas sólidas.'
            ),
            array(
                'pregunta' => '¿Qué debo hacer si mi bebé tiene cólicos?',
                'respuesta' => 'Los cólicos son comunes en los bebés y generalmente desaparecen por sí solos. Intenta calmar a tu bebé con movimientos suaves, baños tibios y abrazos.'
            ),
            array(
                'pregunta' => '¿Es seguro usar chupetes con mi bebé?',
                'respuesta' => 'Los chupetes pueden ser seguros y reconfortantes para algunos bebés, pero es importante usarlos con moderación y seguir las pautas de seguridad, como esterilizarlos regularmente y evitar sujetarlos con cordones o cintas.'
            ),
            array(
                'pregunta' => '¿Cómo puedo ayudar a mi bebé a desarrollar sus habilidades motoras?',
                'respuesta' => 'Proporciona a tu bebé oportunidades para jugar en el suelo, gatear, rodar y alcanzar objetos. También puedes realizar actividades de juego que fomenten el movimiento y la coordinación, como jugar con pelotas suaves o almohadas.'
            ),
            array(
                'pregunta' => '¿Cuándo debo comenzar a usar un asiento de seguridad para el automóvil con mi bebé?',
                'respuesta' => 'Debes comenzar a usar un asiento de seguridad para el automóvil desde el primer día de vida de tu bebé y asegurarte de que esté correctamente instalado según las recomendaciones del fabricante y las leyes locales.'
            ),
            array(
                'pregunta' => '¿Qué debo hacer si mi bebé tiene fiebre?',
                'respuesta' => 'Si tu bebé tiene fiebre, debes mantenerlo cómodo y bien hidratado. Consulta con el pediatra para determinar la causa de la fiebre y cómo tratarla adecuadamente.'
            ),
            array(
                'pregunta' => '¿Cómo puedo ayudar a mi bebé a dormir mejor por la noche?',
                'respuesta' => 'Establece una rutina de sueño tranquila y consistente, crea un ambiente tranquilo y oscuro para dormir, y responde con calma a las necesidades de sueño de tu bebé.'
            )
        );

        // Mostrar preguntas y respuestas
        foreach ($preguntas_respuestas as $index => $pregunta_respuesta) {
            echo '<div class="question">';
            echo '<h2>Pregunta ' . ($index + 1) . ': ' . $pregunta_respuesta['pregunta'] . '</h2>';
            echo '</div>';
            echo '<div class="answer">';
            echo '<p>' . $pregunta_respuesta['respuesta'] . '</p>';
            echo '</div>';
        }
        ?>

        <form action="index.php" method="post">
            <button class="btn" type="submit">Inicio</button>
        </form>

    </div>
</body>
</html>
