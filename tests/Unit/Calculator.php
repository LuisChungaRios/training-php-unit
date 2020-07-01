<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Calculator as CalculatorModule;

class Calculator extends TestCase
{

      public function testSum()
      {

        $calculator = new CalculatorModule;
        $this->assertEquals(5, $calculator->sum(2, 3));


      }


      public function testHasAttribute()
      {
          $this->assertClassHasAttribute('operation', CalculatorModule::class);
      }

      public function testInstanceOfCalculator()
      {
            $sum =new CalculatorModule();
            $this->assertInstanceOf(CalculatorModule::class, $sum);

      }


}
