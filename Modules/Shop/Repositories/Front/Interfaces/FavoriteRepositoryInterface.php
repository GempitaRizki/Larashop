<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

use App\Models\User;
use Modules\Shop\Entities\CartItem;
use Modules\Shop\Entities\Product;

interface FavoriteRepositoryInterface
{
    public function findByUserID(User $user);
}