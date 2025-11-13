<?php
    #CULMINAR LA LÓGICA PARA OBTENER EL DÍA
    $dia= $_GET['cbxdia'];
    $dia_sel="";
    $horaStart_sel="";
    $horaEnd_sel="";
    $entorno_sel="";
    $ambiente_sel="";
    $prof1="";
    $curso1="";
    switch($dia){
        case 1:
            $horaStart_sel="01:30 PM";
            $dia_sel="Lunes";
            $prof1="Luigui Colque";
            $curso1="BACKEND DEVELOPER WEB - TALLER";
            $entorno_sel="Presencial";
            $ambiente_sel="Laboratorio 204";
            $horaEnd_sel="05:30 PM";
        break;
        case 2:
           $horaStart_sel="01:30 PM";
            $dia_sel="Martes";
            $prof1="Luigui Colque";
            $curso1="BACKEND DEVELOPER WEB - TALLER";
            $entorno_sel="Presencial";
            $ambiente_sel="Laboratorio 204";
            $horaEnd_sel="05:30 PM";
        break;
        case 3:
            $horaStart_sel="04:30 PM";
            $dia_sel="Miércoles";
            $prof1="Josselyn Mamani";
            $curso1="TECNICAS DE LA COMUNICACION";
            $entorno_sel="Virtual";
            $ambiente_sel="Teams";
            $horaEnd_sel="06:00 PM";
        break;
        case 4:
            $horaStart_sel="01:45 PM";
            $dia_sel="Jueves";
            $prof1="Jesús Villanueva";
            $curso1="BACKEND DEVELOPER WEB - TEC";
            $entorno_sel="Presencial";
            $ambiente_sel="Laboratorio 307 - 304";
            $horaEnd_sel="05:45 PM";
        break;     
        case 5:
            $dia_sel="Viernes";
            $curso1="HOY NO TIENES CLASES";
        break;
        default:
            $dia_sel="Sábado y Domingo";
            $curso1="NO HAY CLASES";
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<h1>
    Horario: <?=$dia_sel?>
</h1>
<hr color='red'>
<table border="1">
    <tr>
        <th>Hora de inicio</th>
        <th>Docente</th>
        <th>Curso</th>
        <th>Entorno</th>
        <th>Ambiente</th>
        <th>Hora de termino</th>

    </tr>
    <tr>
        <td> <?=$horaStart_sel?> </td>
        <td> <?=$prof1?> </td>
        <td> <?=$curso1?> </td>
        <td> <?=$entorno_sel?> </td>
        <td> <?=$ambiente_sel?> </td>
        <td> <?=$horaEnd_sel?> </td>
    </tr>
</table>