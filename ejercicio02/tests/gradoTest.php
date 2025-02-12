<?php
use PHPUnit\Framework\TestCase;

class GradoTest extends TestCase
{
    public function testPrimeraDivision()
    {
        $this->assertEquals("Estas en Primera División", grado(70));
    }

    // public function testSegundaDivision()
    // {
    //     $this->assertEquals("Estas en Segunda División", grado(55));
    // }

    // public function testTerceraDivision()
    // {
    //     $this->assertEquals("Estas en Tercera División", grado(40));
    // }

    // public function testReprobado()
    // {
    //     $this->assertEquals("Has Reprobado", grado(30));
    // }

    // public function testEntradaNoNumerica()
    // {
    //     $this->expectException(TypeError::class);
    //     grado("texto"); // Esto debería lanzar un TypeError
    // }

    // public function testNumeroNegativo()
    // {
    //     $this->expectException(TypeError::class);
    //     grado(-10); // Esto también debería lanzar un TypeError
    // }
}
