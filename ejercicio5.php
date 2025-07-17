<?php
    function llamdasInter($cod, $duracion){
        switch($cod){
            case 12:
                if($duracion < 30){
                    $descuento = 2 - 0.10;
                    echo "El costo de la llamada desde América del Norte es de $descuento ";
                }else{
                    echo "El costo de la llamada desde América del Norte es de 2.00";
                }
            break;    
        
        
            case 15:
                if($duracion < 30){
                    $descuento = 2.20 - 0.10;
                    echo "El costo de la llamada desde América Central es de $descuento ";
                }else{
                    echo "El costo de la llamada desde América Central es de 2.20";
                }
            break;    
        
       
            case 18:
                if($duracion < 30){
                    $descuento = 4.50 - 0.10;
                    echo "El costo de la llamada desde América del Sur es de $descuento ";
                }else{
                    echo "El costo de la llamada desde América del Sur es de 4.50";
                }
            break;
        
            case 19:
                if($duracion < 30){
                    $descuento = 3.50 - 0.10;
                    echo "El costo de la llamada desde Europa es de $descuento ";
                }else{
                    echo "El costo de la llamada desde Europa es de 3.50";
                }
            break;
        
            case 23:
                if($duracion < 30){
                    $descuento = 6.00 - 0.10;
                    echo "El costo de la llamada desde Asia es de $descuento ";
                }else{
                    echo "El costo de la llamada desde Asia es de 6.00";
                }
       
            break;
      
            case 25:
                if($duracion < 30){
                    $descuento = 6.00 - 0.10;
                    echo "El costo de la llamada desde África es de $descuento ";
                }else{
                    echo "El costo de la llamada desde África es de 6.00";
                }
            break;
       
       
            case 29:
                if($duracion < 30){
                    $descuento = 5.00 - 0.10;
                    echo "El costo de la llamada desde Oceanía es de $descuento ";
                }else{
                    echo "El costo de la llamada desde Oceanía es de 5.00";
                }
            break;       
    }
};
    llamdasInter(15, 10)
    ?>