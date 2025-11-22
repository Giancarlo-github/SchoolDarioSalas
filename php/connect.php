
	
	<?php
class mysqlconex
{
    public function conex()
    {
        $enlace = mysqli_connect("localhost", "root", "123456", "school");
        return $enlace;
    }
}
?>

 