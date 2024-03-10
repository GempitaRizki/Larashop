<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

use App\Models\User;
use Modules\Shop\Entities\CartItem;
use Modules\Shop\Entities\Product;

interface CartRepositoryInterface
{
    public function findByUser(User $user);
    public function addItem(Product $product, $qty): CartItem;
}