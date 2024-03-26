<?php
header("Content-type: text/css");
?>

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


.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}


/* Estilos de encabezados */
h1 {
    text-align: center;
    margin-top: 50px;
}

h2 {
    margin-top: 30px;
    color: #00FF7F; /* Color verde */
}

/* Estilos de párrafos */
p {
    margin-bottom: 20px;
}

/* Estilos de botones */
.btn {
    display: block;
    width: 100px;
    margin: 30px auto;
    padding: 10px;
    font-size: 16px;
    background-color: #4CAF50; /* Color verde */
    color: #fff; /* Texto blanco */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #45a049; /* Color verde más oscuro al pasar el ratón */
}
