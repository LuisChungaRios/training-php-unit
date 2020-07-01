<?php


namespace App\Shopping;


class CartItem
{
    private $name, $amount;
    public $id;

    public function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->id =   uniqid();
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
