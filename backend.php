<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["precioContado"])) {
    $precioContado = $_POST["precioContado"];
    
    // Simular cotizaciones de interés
    $cotizaciones = array(
        "BANCARIZADA 12 SOLICITADO" => $precioContado * 1.845, 
        "BANCARIZADA 12 CTAS" => ($precioContado * 1.845) / 12,
        "BANCARIZADA 6 SOLICITADO" => $precioContado * 1.355, 
        "BANCARIZADA 6 CTAS" => ($precioContado * 1.355) / 6,
        "BANCARIZADA 3 SOLICITADO" => $precioContado * 1.18, 
        "BANCARIZADA 3 CTAS" => ($precioContado * 1.18) / 3,
        // SUCREDITO 3 Y 6
        "SUCREDITO 12 SOLICITADO" => $precioContado * 1.77, 
        "SUCREDITO 12 CTAS" => ($precioContado * 1.77) / 12,
        "SUCREDITO 6 SOLICITADO" => $precioContado * 1.3, 
        "SUCREDITO 6 CTAS" => ($precioContado * 1.3) / 6,
        "SUCREDITO 3 SOLICITADO" => $precioContado * 1.14, 
        "SUCREDITO 3 CTAS" => ($precioContado * 1.14) / 3,
        "NARANJA PLAN Z" => $precioContado * 1.05,
        "NARANJA PLAN Z 3 CTAS" => ($precioContado * 1.05) / 3,
        "NARANJA 12 SOLICITADO" => $precioContado * 1.845, 
        "NARANJA 12 CTAS" => ($precioContado * 1.845) / 12,
        "NARANJA 6 SOLICITADO" => $precioContado * 1.355, 
        "NARANJA 6 CTAS" => ($precioContado * 1.355) / 6,
        "VISA Y MASTER COMUN 18 SOLICITADO" => $precioContado * 4.1, 
        "VISA Y MASTER COMUN 18 CTAS" => ($precioContado * 4.1) / 18,
        "VISA Y MASTER COMUN 12 SOLICITADO" => $precioContado * 3, 
        "VISA Y MASTER COMUN 12 CTAS" => ($precioContado * 3) / 12,
        "VISA Y MASTER COMUN 6 SOLICITADO" => $precioContado * 2, 
        "VISA Y MASTER COMUN 6 CTAS" => ($precioContado * 2) / 6,
        "VISA Y MASTER COMUN 3 SOLICITADO" => $precioContado * 1.5, 
        "VISA Y MASTER COMUN 3 CTAS" => ($precioContado * 1.5) / 3,
    );

    echo json_encode($cotizaciones);
}
?>
