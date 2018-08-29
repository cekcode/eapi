<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return ['errors' => 'Produk tidak memiliki pengguna'];
    }
}
