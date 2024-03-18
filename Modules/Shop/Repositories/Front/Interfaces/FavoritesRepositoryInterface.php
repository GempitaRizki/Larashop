<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

use App\Models\User;
use Modules\Shop\Entities\Product;

interface FavoritesRepositoryInterface
{
    public function findByUserId($userId);
    public function addFav($userId, $productId);
    public function removeFav($userId, $productId);

}