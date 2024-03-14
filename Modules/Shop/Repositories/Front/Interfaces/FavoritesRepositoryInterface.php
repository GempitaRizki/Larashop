<?php

namespace Modules\Shop\Repositories\Front\Interfaces;

use App\Models\User;

interface FavoritesRepositoryInterface
{

    public function findByUserId(User $user);

}