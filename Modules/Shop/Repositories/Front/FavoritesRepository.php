<?php

namespace Modules\Shop\Repositories\Front;

use App\Models\User;
use Carbon\Carbon;
use Modules\Shop\Entities\Favorites;
use Modules\Shop\Repositories\Front\Interfaces\FavoritesRepositoryInterface;

class FavoritesRepository implements FavoritesRepositoryInterface
{

    public function findByUserId(User $user)
    {
        $fav = Favorites::with([
            'users'
        ])->forUser($user)->first();


        if (!$fav) {
            return Favorites::create([
                'user_id' => $user->id
            ]);
        }

        return $fav;
    }
}
