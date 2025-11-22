<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $you_id = $_POST["you_id"];
    $you_title = $_POST["you_title"];
	$you_text = $_POST["you_text"];
	$you_video = $_POST["you_video"];
	$you_go = $_POST["you_go"];
   
 
    if(isset($_POST["editar2"])){
        include("connect.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE youtube SET you_title=?,you_text=?,you_video=?,you_go=? WHERE you_id=?";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"ssssi",$you_title,$you_text,$you_video,$you_go,$you_id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script> alert('El Título $you_title se edito correctamente :) '); location.href='index2.php'; </script>";
        }else{
            echo "<script> alert('El Título $you_title no se edito :( '); location.href='index2.php'; </script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }

    ?>

    <form action="editar.php" method="POST">
        <input type="hidden" value="<?php echo $you_id ?>" name="you_id">
        <label for="news_title">Título: </label><input type="text" style="width: 1200px;height:50px;" name="news_title" id="you_title" value="<?php echo $you_title ?>">
		<br><br><label for="you_text">Texto: </label><input type="text" style="width: 1400px;height:50px;" name="you_text" id="you_text" value="<?php echo $you_text ?>">
		  <br><br><br><label for="you_video">Video width="287" height="280" : </label><textarea   rows="35" cols="100"  name="you_video" id="you_video" value="<?php echo $you_video ?>"></textarea>
		   <br><br><br><label for="you_go">Link: </label><input type="text"   style="width: 1200px;height:50px;" name="you_go" id="you_go" value="<?php echo $you_go ?>">
     <br><br><br>
        <input type="submit" name="editar2" value="editar">
    </form>
</body>

</html>