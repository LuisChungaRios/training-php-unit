<?php


namespace App\Shopping;


class Cart
{
    private $cart = [];
    public $id;

    public function __construct()
    {
        $this->id = uniqid();
        $this->cart = [];
    }

    public function add(CartItem $item)
    {
        array_push($this->cart, $item);
    }

    public function addItems(array $items)
    {
        $this->cart = array_merge($this->cart, $items);
    }

    public function removeItem($id)
    {
        foreach ($this->cart as $key => $value){
            if ($id === $value->id) {
                unset($this->cart[$key]);
            }
        }
    }

    public function getFirstItem()
    {

        return reset($this->cart);
    }

    public function count()
    {
        return count($this->cart);
    }

    public function isEmpty()
    {

        return empty($this->cart);
    }

}
