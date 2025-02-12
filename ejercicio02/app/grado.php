<?php

    function grado(int $nota):string {

        if($nota >= 60){
            return "Estas en Primera División";

        } else if($nota >= 45){
            return "Estas en Segunda División";

        } else if($nota >= 33){
            return "Estas en Tercera División";
            
        } else{
            return "Has Reprobado";
        }   
    }
?>