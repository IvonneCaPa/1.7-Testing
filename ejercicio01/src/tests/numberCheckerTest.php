<?php
    use PHPUnit\Framework\TestCase;

    class numberCheckerTest extends TestCase{
        //confirmar que funciona la funcion isEven()
        public function testIsEven():void{
            $chec = new NumberChecker(4);
            $this->assertTrue($chec->isEven(), "4 debería ser par");
    
            $chec = new NumberChecker(5);
            $this->assertFalse($chec->isEven(), "5 no debería ser par");
        }
        // confirmar que funciona Positive()
        public function testIsPositive() {
            $chec = new NumberChecker(10);
            $this->assertTrue($chec->isPositive(), "10 debería ser positivo");
    
            $chec = new NumberChecker(-5);
            $this->assertFalse($chec->isPositive(), "-5 no debería ser positivo");
    
            $chec = new NumberChecker(0);
            $this->assertFalse($chec->isPositive(), "0 no debería ser positivo");
        }
    
    }


?>