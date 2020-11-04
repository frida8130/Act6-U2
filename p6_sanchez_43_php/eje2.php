<p>
<?php
    $aDias = array("Lunes", "Martes", "Miércoles", "Jueves",
     "Viernes", "Sábado", "Domingo");
     sort( $aDias );
    // El array queda: "Domingo", "Jueves", "Lunes", 
    //"Martes", "Miércoles", "Sábado", "Viernes"
    print_r( $aDias );
?>
</p>