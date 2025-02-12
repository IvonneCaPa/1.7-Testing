<?php

    use PHPUnit\Framework\TestCase;

    require_once "app/grado.php";

    class gradoTest extends TestCase{
     
        public function testPrimeraDivision(){
            $this->assertEquals("Estas en Primera División", grado(75));
        }

        public function testSegundaDivision(){
            $this->assertEquals("Estas en Segunda División", grado(50));
        }
        
        public function testTerceraDivision(){
            $this->assertEquals("Estas en Tercera División", grado(40));
        }

        public function testReprobado(){
            $this->assertEquals("Has Reprobado", grado(12));
        }
    }

?>