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
    $new_id = $_POST["new_id"];
    $new_title = $_POST["new_title"];
	$new_date = $_POST["new_date"];
	$new_text = $_POST["new_text"];
   
 
    if(isset($_POST["editar2"])){
        include("connect.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query="UPDATE news SET new_title=?,new_date=?,new_text=? WHERE new_id=?";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sssi",$new_title,$new_date,$new_text,$new_id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script> alert('El Título $new_title se edito correctamente :) '); location.href='index2.php'; </script>";
        }else{
            echo "<script> alert('El Título $new_title no se edito :( '); location.href='index2.php'; </script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }

    ?>

    <form action="editar.php" method="POST">
        <input type="hidden" value="<?php echo $news_id ?>" name="new_id">
        <label for="news_title">Título: </label><input type="text" style="width: 1200px;height:50px;" name="news_title" id="new_title" value="<?php echo $new_title ?>">
		<br><br><label for="new_date">Fecha de publicación: </label><input type="text" style="width: 200px;height:50px;" name="new_date" id="new_date" value="<?php echo $new_date ?>">
		Día:
		<!-- The second value will be selected initially -->
<select name="select">
  <option value="1">1</option>
  <option value="2" selected>2</option>
   <option value="3" selected>3</option>
    <option value="4" selected>4</option>
	 <option value="5" selected>5</option>
	  <option value="6" selected>6</option>
	   <option value="7" selected>7</option>
	    <option value="8" selected>8</option>
		 <option value="9" selected>9</option>
		  <option value="10" selected>10</option>
		   <option value="11" selected>11</option>
		    <option value="12" selected>12</option>
			 <option value="13" selected>13</option>
			  <option value="14" selected>14</option>
			   <option value="15" selected>15</option>
			    <option value="16" selected>16</option>
				 <option value="17" selected>17</option>
				  <option value="18" selected>18</option>
				   <option value="19" selected>19</option>
				    <option value="20" selected>20</option>
					 <option value="21" selected>21</option>
					  <option value="22" selected>22</option>
					   <option value="23" selected>23</option>
					    <option value="24" selected>24</option>
						 <option value="25" selected>25</option>
						  <option value="26" selected>26</option>
						   <option value="27" selected>27</option>
						    <option value="28" selected>28</option>
							 <option value="29" selected>29</option>
							  <option value="30" selected>30</option>
							   <option value="31" selected>31</option>

			   
</select>
Mes:
<!-- The second value will be selected initially -->
<select name="select">
  <option value="value1">1</option>
  <option value="value2" selected>2</option>
  <option value="value3">3</option>
  <option value="value3">4</option>
  <option value="value3">5</option>
  <option value="value3">6</option>
  <option value="value3">7</option>
  <option value="value3">8</option>
  <option value="value3">9</option>
  <option value="value3">10</option>
    <option value="value3">11</option>
	  <option value="value3">12</option>
</select>
Año:
<!-- The second value will be selected initially -->
<select name="select">
  <option value="value1">2025</option>
  <option value="value2" selected>2026</option>
  <option value="value3">2027</option>
  <option value="value3">2028</option>
  <option value="value3">2029</option>
  <option value="value3">2031</option>
   <option value="value3">2032</option>
    <option value="value3">2033</option>
	 <option value="value3">2034</option>
	  <option value="value3">2035</option>
	   <option value="value3">2036</option>
	    <option value="value3">2037</option>
</select>
		  <br><br><br><label for="new_text">Texto: </label><textarea   rows="35" cols="100" name="new_text" id="new_text" value="<?php echo $new_text ?>"></textarea>
     <br><br><br>
        <input type="submit" name="editar2" value="editar">
    </form>
</body>

</html>