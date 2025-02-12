        <?php
            function grado(int $nota) : string{
                if($nota >= 60){
                    $mensaje = "Estas en Primera División";

                } else if($nota >= 45){
                    $mensaje = "Estas en Segunda División";

                } else if($nota >= 33){
                    $mensaje = "Estas en Tercera División";
                    
                } else{
                    $mensaje = "Has Reprobado";
                }
                
                return $mensaje;
            }
            
            echo grado(67);
        ?>