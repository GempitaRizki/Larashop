<?php

namespace Modules\Shop\Repositories\Front;

use App\Models\User;
use Carbon\Carbon;

use Modules\Shop\Entities\Favorite;
use Modules\Shop\Repositories\Front\Interfaces\FavoriteRepositoryInterface;

class FavoriteRepository implements FavoriteRepositoryInterface
{

    public function findByUserID(User $user): Favorite
    {
        $favorite = Favorite::with([
            'items',
            'items.product',
        ])->forUser($user)->first();

        if (!$favorite) {
            return Favorite::create([
                'user_id' => $user->id,
            ]);
        }

        return $favorite;
    }
}
