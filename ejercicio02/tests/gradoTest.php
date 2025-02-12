<?php

    use PHPUnit\Framework\TestCase;

    class gradoTest extends TestCase{

        public function testEntradaNoNumerica(){
            $this->expectException(InvalidArgumentException::class);
            grado("texto");
        }

        public function testNumeroNegativo(){
            $this->expectException(InvalidArgumentException::class);
            grado(-10);
        }

        public function testPrimeraDivision(){
            $resultado = grado(70);
            $this->assertEquals('Primera División', $resultado);
        }

        public function testSegundaDivision(){
            $resultado = grado(55);
            $this->assertEquals('Segunda División', $resultado);
        }

        public function testTerceraDivision(){
            $resultado = grado(40);
            $this->assertEquals('Tercera División', $resultado);
        }

        public function testReprobado(){
            $resultado = grado(30);
            $this->assertEquals('Reprobado', $resultado);
        }
    }                       

?>