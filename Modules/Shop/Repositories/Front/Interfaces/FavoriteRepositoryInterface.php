<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

use App\Models\User;
Use Modules\Shop\Entities\Favorites;
use Modules\Shop\Entities\Product;

interface FavoriteRepositoryInterface
{
    public function findByUserID(User $user);
}