<?php

function createItemCart($name, $amount)
{
    return new \App\Shopping\CartItem($name, $amount);
}
