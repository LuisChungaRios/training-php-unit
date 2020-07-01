<?php


namespace Test\Unit;


use App\Shopping\Cart;
use App\Shopping\CartItem;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{


    public static function setUpBeforeClass(): void
    {
        echo "init class \n";
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n after class \n";
    }

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    protected function tearDown(): void
    {
        //echo "tearDown";
    }

    public function testItCreateCart()
    {
        $itemCart = createItemCart("usb", 10);


        $this->assertEquals(0, $this->cart->count());

        $this->cart->add($itemCart);

        $this->assertEquals(1, $this->cart->count());
    }

    public function testItCreateMultipleCarts()
    {
        $carts = [];
        for ($i = 0; $i < 5; $i++) {

            $itemCart = createItemCart("usb", 10);
            array_push($carts, $itemCart);
        }



        $this->assertEquals(0, $this->cart->count());

        $this->cart->addItems($carts);

        $this->assertEquals(count($carts), $this->cart->count());
    }

    public function testItEmpty()
    {

        $this->assertTrue($this->cart->isEmpty());
    }

    public function testRemoveItemCart()
    {
        $itemCart = createItemCart("usb", 10);

        $this->cart->add($itemCart);

        $this->assertEquals(1, $this->cart->count());

        $this->cart->removeItem($itemCart->id);

        $this->assertTrue($this->cart->isEmpty());
    }


    /** 
     * @test
     */

    public function incompleteTest()
    {
        $this->markTestIncomplete();
    }

    /**
     * @test
     */

    public function skippTest()
    {
        if (true) {
            $this->markTestSkipped("skip");
        }
    }


    /**
     * @doesNotPerformAssertions
     */

    public function testEmpty()
    {
    }
}
