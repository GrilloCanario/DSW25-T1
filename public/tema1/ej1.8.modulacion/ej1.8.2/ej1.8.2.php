<?php
    include "cabecera.php";         //* Incluir cabecera
    require "datos_array.php";      //* Incluir datos y función de tabla
    require "tablaUtils.php";       //* Contenido intermedio
    echo generarTabla($datos);      //* Mostrar tabla generada con los datos
    include "pie_pagina.php";       //* Incluir pie de página
?>