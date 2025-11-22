<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function confirmacion() {
        var respuesta = confirm("¿Desea realmente borrar el registro?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }
</script>
<style>
.tabla-con-divisiones {
    border-collapse: collapse; /* Une los bordes de las celdas */
    width: 100%;
}

.tabla-con-divisiones th, .tabla-con-divisiones td {
    border: 1px solid #ddd; /* Borde para todas las celdas */
    padding: 8px;
}

/* Si quieres un borde debajo de cada fila */
.tabla-con-divisiones tr {
    border-bottom: 1px solid #ddd; 
}

/* Si solo quieres un borde superior en cada fila (sin borde en la última) */
.tabla-con-divisiones tr:not(:last-child) {
    border-bottom: 1px solid #ddd;
}
</style>
<body>
    <br>
    <br>
	<h1>Youtube</h1>
    <table class='tabla-con-divisiones'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
				<th>Texto</th>
				<th>Video</th>
				<th>Link</th>
                <th>EDITAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("connect.php");
            $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();

            $consulta = "SELECT * FROM youtube";
            $resultado = mysqli_query($getconex, $consulta);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                 echo "<tr>";
                echo "<td>" . $fila["you_id"] . "</td>";
                echo "<td>" . $fila["you_title"] . "</td>";
				 echo "<td>" . $fila["you_text"] . "</td>";
				 echo "<td>" . $fila["you_video"] . "</td>";
				echo "<td>" . $fila["you_go"] . "</td>";
               
           
                echo "<td>
                    <form action='editarYoutube.php' method='POST'>
                    <input type='hidden' name='you_id' value='" . $fila["you_id"] . "'>
                    <input type='hidden' name='you_title' value='" . $fila["you_title"] . "'> 
					 <input type='hidden' name='you_text' value='" . $fila["you_text"] . "'> 
                   <input type='hidden' name='you_video' value='" . $fila["you_video"] . "'> 					
                   <input type='hidden' name='you_go' value='" . $fila["you_go"] . "'>    					
                    <input type='submit' name='editar' value='editar' '>
                    </form>
                </td>";
                echo "</tr>";
            }
            mysqli_close($getconex);
            ?>
        </tbody>
    </table>	
</body>

</html>