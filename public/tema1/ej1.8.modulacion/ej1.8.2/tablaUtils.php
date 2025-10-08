<?php
    function generarTabla($arrayDatos){
        //- Iniciar tabla HTML
        $tabla = "<table>";

        //- Cabecera de la tabla (primeras claves del primer elemento)
        // $tabla .= "<tr>";
        //     foreach (array_keys($arrayDatos[0]) as $clave) {
        //         $tabla .= "<th>" . ucfirst($clave) . "</th>";
        //     }
        // $tabla .= "</tr>";

        //- Filas de datos
            foreach ($arrayDatos as $fila) {
                $tabla .= "<tr>";
                foreach ($fila as $valor) {
                    $tabla .= "<td>$valor</td>";
                }
                $tabla .= "</tr>";
            }

            $tabla .= "</table>";
        return $tabla;
    }
?>